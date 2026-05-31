<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Software;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File; // Wajib ada untuk hapus file

class AdminController extends Controller
{
    // 1. Tampilkan Halaman Login
    public function showLogin() {
        return view('admin.login');
    }

    // 2. Proses Login
    public function login(Request $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard');
        }
        return back()->withErrors(['email' => 'Email atau Password salah!']);
    }

    // 3. Logout
    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }

    // 4. Dashboard (List Software) - SUDAH DIOPTIMASI
    public function dashboard() {
        // PERBAIKAN: Menggunakan Eager Loading (withCount & withAvg)
        // Agar tidak berat saat load banyak data
        $softwares = Software::withCount('ratings') // Hitung total ulasan
                             ->withAvg('ratings', 'rating') // Hitung rata-rata bintang
                             ->orderByDesc('is_featured')
                             ->latest()
                             ->get();
        
        // Data Statistik
        $totalSoftware = Software::count();
        $totalDownloads = Software::sum('downloads_count');
        $totalCategories = Software::distinct('category')->count();

        // Grafik 1: Top Downloads
        $topDownloads = Software::orderByDesc('downloads_count')->take(5)->get();
        $chart1Labels = $topDownloads->pluck('title');
        $chart1Data = $topDownloads->pluck('downloads_count');

        // Grafik 2: Kategori
        $categories = Software::select('category', DB::raw('count(*) as total'))
                        ->groupBy('category')
                        ->get();
        $chart2Labels = $categories->pluck('category');
        $chart2Data = $categories->pluck('total');

        return view('admin.dashboard', compact(
            'softwares', 'totalSoftware', 'totalDownloads', 'totalCategories',
            'chart1Labels', 'chart1Data', 'chart2Labels', 'chart2Data'
        ));
    }

    // 5. Form Tambah Software
    public function create() {
        return view('admin.create');
    }

    // 6. Simpan Software Baru (LOGIKA UPLOAD LENGKAP)
    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'version' => 'required',
            // VALIDASI ICON: Pakai 'file' agar support SVG
            'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            // VALIDASI SCREENSHOT: File upload, max 4MB
            'screenshot' => 'nullable|file|mimes:jpeg,png,jpg,webp|max:4096',
            'download_url' => 'required|url',
            'install_instructions' => 'nullable|string',
            'file_size' => 'nullable|string',
            'os_support' => 'nullable|string',
        ]);

        // A. Handle Icon Utama
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/softwares'), $filename);
            $imagePath = 'images/softwares/' . $filename;
        } else {
            $imagePath = 'images/default-icon.png'; 
        }

        // B. Handle Screenshot (Logika Baru)
        $screenshotPath = null;
        if ($request->hasFile('screenshot')) {
            $fileScreen = $request->file('screenshot');
            $screenName = time() . '_screen_' . $fileScreen->getClientOriginalName();
            $fileScreen->move(public_path('images/screenshots'), $screenName);
            $screenshotPath = 'images/screenshots/' . $screenName;
        }

        // C. Simpan ke Database
        Software::create([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'version' => $request->version,
            'image_url' => $imagePath,
            'screenshot_url' => $screenshotPath, // Simpan path screenshot
            'download_url' => $request->download_url,
            'install_instructions' => $request->install_instructions,
            'file_size' => $request->file_size,
            'os_support' => $request->os_support,
            'is_featured' => $request->has('is_featured'),
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Software berhasil ditambahkan!');
    }

    // 7. Form Edit
    public function edit($id) {
        $software = Software::findOrFail($id);
        return view('admin.edit', compact('software'));
    }

    // 8. Update Data Software (LOGIKA UPLOAD & HAPUS FILE LAMA)
    public function update(Request $request, $id) {
        $software = Software::findOrFail($id);

        // A. Validasi
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'version' => 'required',
            // Nullable karena user mungkin tidak ganti gambar
            'image' => 'nullable|file|mimes:jpeg,png,svg,webp|max:2048', 
            'screenshot' => 'nullable|file|mimes:jpeg,png,jpg,webp|max:4096',
            'download_url' => 'required|url',
        ]);

        // B. Siapkan Data Dasar (Tanpa File dulu)
        $dataToUpdate = [
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'version' => $request->version,
            'download_url' => $request->download_url,
            'install_instructions' => $request->install_instructions,
            'file_size' => $request->file_size,
            'os_support' => $request->os_support,
            'is_featured' => $request->has('is_featured'),
        ];

        // C. Cek Upload Icon Baru
        if ($request->hasFile('image')) {
            // 1. Hapus Icon Lama (Bersih-bersih)
            if ($software->image_url && !str_starts_with($software->image_url, 'http')) {
                $oldPath = public_path($software->image_url);
                if (file_exists($oldPath)) unlink($oldPath);
            }

            // 2. Upload Baru
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/softwares'), $filename);
            
            // 3. Masukkan ke array update
            $dataToUpdate['image_url'] = 'images/softwares/' . $filename;
        }

        // D. Cek Upload Screenshot Baru
        if ($request->hasFile('screenshot')) {
            // 1. Hapus Screenshot Lama (Bersih-bersih)
            if ($software->screenshot_url && !str_starts_with($software->screenshot_url, 'http')) {
                $oldScreenPath = public_path($software->screenshot_url);
                if (file_exists($oldScreenPath)) unlink($oldScreenPath);
            }

            // 2. Upload Baru
            $fileScreen = $request->file('screenshot');
            $screenName = time() . '_screen_' . $fileScreen->getClientOriginalName();
            $fileScreen->move(public_path('images/screenshots'), $screenName);

            // 3. Masukkan ke array update
            $dataToUpdate['screenshot_url'] = 'images/screenshots/' . $screenName;
        }

        // E. Eksekusi Update ke Database
        $software->update($dataToUpdate);

        return redirect()->route('admin.dashboard')->with('success', 'Software berhasil diupdate!');
    }

    // 9. Hapus Software (FIXED: Hapus File juga dari folder)
    public function delete(Request $request, $id)
    {
        $software = Software::findOrFail($id);

        // 1. Hapus File Icon
        if ($software->image_url && !str_starts_with($software->image_url, 'http')) {
            $path = public_path($software->image_url);
            if (file_exists($path)) unlink($path);
        }

        // 2. Hapus File Screenshot
        if ($software->screenshot_url && !str_starts_with($software->screenshot_url, 'http')) {
            $screenPath = public_path($software->screenshot_url);
            if (file_exists($screenPath)) unlink($screenPath);
        }

        // 3. Hapus Data Database
        $software->delete();

        if ($request->ajax()) {
            return response()->json(['status' => 'success', 'message' => 'Software berhasil dihapus!']);
        }

        return back()->with('success', 'Software berhasil dihapus!');
    }

    // 10. Manajemen User (Admin)
    public function createUser() {
        return view('admin.users.create');
    }

    public function storeUser(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Admin baru berhasil ditambahkan!');
    }

    // 11. Fitur Lupa Password
    public function showForgotPassword() {
        return view('admin.forgot-password');
    }

    public function processForgotPassword(Request $request) {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::where('email', $request->email)->first();

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login')->withErrors(['email' => 'Password berhasil direset! Silakan login.']);
    }

    // 12. Resolve Laporan
    public function resolve(Request $request, $id)
    {
        $software = Software::findOrFail($id);
        $software->is_reported = false;
        $software->save();

        if ($request->ajax()) {
            return response()->json(['status' => 'success', 'message' => 'Laporan diselesaikan!']);
        }

        return back()->with('success', 'Laporan berhasil diselesaikan.');
    }
}