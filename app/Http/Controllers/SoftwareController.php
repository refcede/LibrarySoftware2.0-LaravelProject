<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Software; 
use App\Models\Rating;

class SoftwareController extends Controller
{
    public function index(Request $request)
    {
        // --- PERUBAHAN UTAMA DISINI ---
        
        // 1. Mulai Query
        $query = Software::query();

        // 2. Terapkan Sorting Prioritas
        // Prioritas 1: Featured (is_featured = 1) harus paling atas
        $query->orderByDesc('is_featured');
        // Prioritas 2: Tanggal terbaru (created_at)
        $query->orderByDesc('created_at');

        // 3. Filter Kategori
        if ($request->has('category')) {
            $query->where('category', $request->category);
        }

        // 4. Filter Pencarian Judul
        if ($request->has('title')) { // Lebih baik pakai 'has' daripada langsung request()
            $query->where('title', 'like', '%' . $request->title . '%');
        }

        // 5. Eksekusi Pagination
        $softwares = $query->paginate(9)->withQueryString();

        return view('home', compact('softwares'));
    }

    public function download($id)
    {
        $software = Software::findOrFail($id);
        
        // Tambah counter download
        $software->increment('downloads_count');
        
        // Redirect ke link asli
        return redirect()->away($software->download_url);
    }
    public function reportLink($id)
{
    $software = Software::findOrFail($id);
    $software->update(['is_reported' => true]);
    
    return back()->with('success', 'Terima kasih! Laporan link rusak sudah kami terima.');
}
    public function rate(Request $request, $id)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:500',
        ]);

        // Cek Double Rating
        $existing = \App\Models\Rating::where('software_id', $id)
                          ->where('ip_address', $request->ip())
                          ->first();

        if ($existing) {
            // Jika AJAX (Request dari JS), kirim Error JSON
            if ($request->ajax()) {
                return response()->json(['status' => 'error', 'message' => 'Kamu sudah memberikan rating sebelumnya!'], 400);
            }
            return back()->with('error', 'Kamu sudah memberikan rating sebelumnya!');
        }

        // Simpan
        \App\Models\Rating::create([
            'software_id' => $id,
            'ip_address' => $request->ip(),
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        // Jika AJAX (Request dari JS), kirim Sukses JSON
        if ($request->ajax()) {
            return response()->json(['status' => 'success', 'message' => 'Rating berhasil dikirim!']);
        }

        return back()->with('success', 'Terima kasih! Penilaian kamu berhasil dikirim. ⭐');
    }
}