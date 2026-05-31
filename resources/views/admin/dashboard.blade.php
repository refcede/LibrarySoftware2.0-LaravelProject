<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Admin Dashboard</title>
    <style>
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #09090b; }
        ::-webkit-scrollbar-thumb { background: #27272a; border-radius: 4px; }
        /* Animasi baris tabel saat dihapus */
        .fade-out { opacity: 0; transform: translateX(20px); transition: all 0.5s ease; }
    </style>
</head>
<body class="bg-black text-zinc-300 p-6 md:p-10 font-sans antialiased selection:bg-indigo-500 selection:text-white">
    <div class="max-w-7xl mx-auto space-y-8">
        
        <div class="flex flex-col md:flex-row justify-between items-center gap-4 border-b border-zinc-800 pb-6">
            <div>
                <h1 class="text-3xl font-bold text-white tracking-tight">DASHBOARD ADMIN</h1>
                <p class="text-zinc-500 text-sm mt-1">Pantau performa aplikasi dan kelola konten.</p>
            </div>
            
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('home') }}" class="bg-zinc-800 border border-zinc-700 text-white px-4 py-2 rounded-lg flex items-center gap-2 hover:bg-white hover:text-black transition-all text-sm font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                    Lihat Website
                </a>
                <a href="{{ route('admin.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 hover:bg-indigo-500 transition-colors text-sm font-bold shadow-lg shadow-indigo-900/20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    Tambah Software
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="bg-red-600/10 border border-red-900/50 text-red-500 px-4 py-2 rounded-lg hover:bg-red-600 hover:text-white transition-all text-sm font-bold flex items-center gap-2">
                        Logout
                    </button>
                </form>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-zinc-900 border border-zinc-800 p-6 rounded-2xl flex items-center justify-between shadow-lg">
                <div><p class="text-zinc-500 text-xs uppercase font-bold tracking-wider">Total Software</p><p class="text-3xl font-bold text-white mt-1">{{ $totalSoftware }}</p></div>
                <div class="p-3 bg-blue-500/10 rounded-xl text-blue-500"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg></div>
            </div>
            <div class="bg-zinc-900 border border-zinc-800 p-6 rounded-2xl flex items-center justify-between shadow-lg">
                <div><p class="text-zinc-500 text-xs uppercase font-bold tracking-wider">Total Download</p><p class="text-3xl font-bold text-white mt-1">{{ number_format($totalDownloads) }}</p></div>
                <div class="p-3 bg-green-500/10 rounded-xl text-green-500"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg></div>
            </div>
            <div class="bg-zinc-900 border border-zinc-800 p-6 rounded-2xl flex items-center justify-between shadow-lg">
                <div><p class="text-zinc-500 text-xs uppercase font-bold tracking-wider">Kategori Aktif</p><p class="text-3xl font-bold text-white mt-1">{{ $totalCategories }}</p></div>
                <div class="p-3 bg-purple-500/10 rounded-xl text-purple-500"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg></div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-zinc-900 border border-zinc-800 p-6 rounded-2xl shadow-lg">
                <h3 class="text-white font-bold mb-4 flex items-center gap-2"><span class="w-2 h-6 bg-indigo-500 rounded-full"></span> Top 5 Software Populer</h3>
                <div class="relative h-64 w-full"><canvas id="topDownloadChart"></canvas></div>
            </div>
            <div class="bg-zinc-900 border border-zinc-800 p-6 rounded-2xl shadow-lg">
                <h3 class="text-white font-bold mb-4 flex items-center gap-2"><span class="w-2 h-6 bg-purple-500 rounded-full"></span> Distribusi Kategori</h3>
                <div class="relative h-64 w-full flex justify-center"><canvas id="categoryChart"></canvas></div>
            </div>
        </div>

        <div class="bg-zinc-900 rounded-xl overflow-hidden border border-zinc-800 shadow-2xl">
            <div class="p-4 border-b border-zinc-800 bg-zinc-950/50">
                <h3 class="font-bold text-zinc-300">Data Software</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-zinc-950 text-zinc-500 text-xs uppercase tracking-wider border-b border-zinc-800">
                        <tr>
                            <th class="p-4 font-semibold">Nama Software</th>
                            <th class="p-4 font-semibold">Kategori</th>
                            <th class="p-4 font-semibold">Downloads</th>
                            <th class="p-4 font-semibold text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-zinc-800" id="softwareTableBody">
                        @forelse($softwares as $sw)
                        <tr id="row-{{ $sw->id }}" class="hover:bg-zinc-800/50 transition-colors {{ $sw->is_reported ? 'bg-red-900/10' : '' }}">
                            <td class="p-4">
                                <div class="flex items-center gap-3">
                                    <img src="{{ $sw->image_url }}" class="w-8 h-8 rounded bg-zinc-800 object-contain p-1 border border-zinc-700">
                                    <div>
                                        <div class="font-bold text-white flex items-center gap-2">
                                            {{ $sw->title }}
                                            @if($sw->is_featured) <span class="bg-yellow-500/20 text-yellow-400 text-[9px] px-1.5 rounded uppercase">Featured</span> @endif
                                            
                                            @if($sw->is_reported) 
                                                <span id="badge-report-{{ $sw->id }}" class="bg-red-500 text-white text-[9px] px-1.5 rounded uppercase animate-pulse">Reported</span> 
                                            @endif
                                        </div>
                                        <div class="text-xs text-zinc-500 mt-0.5">{{ $sw->version }} • {{ $sw->file_size ?? '-' }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="p-4 text-sm text-zinc-400"><span class="bg-zinc-800 px-2 py-1 rounded text-xs">{{ $sw->category }}</span></td>
                            <td class="p-4 text-sm font-mono text-white">{{ number_format($sw->downloads_count) }}</td>
                            <td class="p-4 text-right flex justify-end gap-3 items-center">
                                
                                @if($sw->is_reported)
                                    <button onclick="resolveReport({{ $sw->id }})" id="btn-resolve-{{ $sw->id }}" class="text-xs bg-green-600 hover:bg-green-500 text-white px-3 py-1.5 rounded font-bold transition-all">
                                        ✅ Fix
                                    </button>
                                @endif

                                <a href="{{ route('admin.edit', $sw->id) }}" class="text-blue-500 hover:text-blue-400 text-sm font-medium">Edit</a>
                                
                                <button onclick="confirmDelete({{ $sw->id }}, '{{ $sw->title }}')" class="text-zinc-500 hover:text-red-500 text-sm font-medium transition-colors">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="4" class="p-8 text-center text-zinc-500">Belum ada data.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="text-center text-xs text-zinc-600">&copy; {{ date('Y') }} Admin Panel v2.0</div>
    </div>

    <script>
        // Data Grafik Chart.js (Sama seperti sebelumnya)
        const labels1 = @json($chart1Labels); const data1 = @json($chart1Data);
        const labels2 = @json($chart2Labels); const data2 = @json($chart2Data);

        new Chart(document.getElementById('topDownloadChart'), {
            type: 'bar', data: { labels: labels1, datasets: [{ label: 'Jumlah Download', data: data1, backgroundColor: '#6366f1', borderRadius: 6 }] },
            options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true, grid: { color: '#27272a' }, ticks: { color: '#a1a1aa' } }, x: { grid: { display: false }, ticks: { color: '#a1a1aa' } } } }
        });

        new Chart(document.getElementById('categoryChart'), {
            type: 'doughnut', data: { labels: labels2, datasets: [{ data: data2, backgroundColor: ['#a855f7', '#3b82f6', '#10b981', '#f59e0b', '#ef4444'], borderWidth: 0, hoverOffset: 4 }] },
            options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { position: 'right', labels: { color: '#d4d4d8', font: { size: 11 } } } } }
        });

        // ==========================================
        //  LOGIKA BARU: AJAX DELETE & RESOLVE
        // ==========================================

        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // 1. FUNGSI HAPUS (Tanpa Reload + SweetAlert)
        function confirmDelete(id, title) {
            Swal.fire({
                title: 'Yakin hapus?',
                text: `Software "${title}" akan dihapus permanen!`,
                icon: 'warning',
                background: '#18181b',
                color: '#fff',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#3f3f46',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    
                    // --- PERBAIKAN DISINI ---
                    fetch(`/admin/delete/${id}`, {
                        method: 'DELETE', // Gunakan method DELETE agar cocok dengan Route::delete
                        headers: {
                            'X-CSRF-TOKEN': csrfToken, // Wajib ada token
                            'X-Requested-With': 'XMLHttpRequest',
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(response => {
                        // Cek jika response TIDAK OK (Misal: 404, 500, 419)
                        if (!response.ok) {
                            throw new Error(response.statusText);
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.status === 'success') {
                            // Hapus baris tabel
                            const row = document.getElementById(`row-${id}`);
                            if(row) {
                                row.classList.add('fade-out');
                                setTimeout(() => row.remove(), 500);
                            }

                            // Notifikasi Sukses
                            const Toast = Swal.mixin({
                                toast: true, position: 'top-end', showConfirmButton: false,
                                timer: 3000, timerProgressBar: true, background: '#18181b', color: '#fff'
                            });
                            Toast.fire({ icon: 'success', title: 'Berhasil dihapus!' });
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        Swal.fire({
                            icon: 'error', 
                            title: 'Gagal Menghapus!', 
                            text: 'Terjadi kesalahan sistem atau rute tidak ditemukan.', 
                            background: '#18181b', 
                            color: '#fff'
                        });
                    });
                }
            });
        }

        // 2. FUNGSI RESOLVE REPORT (Tanpa Reload)
        function resolveReport(id) {
            fetch(`/admin/resolve/${id}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // Hilangkan tombol dan badge merah
                    const btn = document.getElementById(`btn-resolve-${id}`);
                    const badge = document.getElementById(`badge-report-${id}`);
                    const row = document.getElementById(`row-${id}`);
                    
                    if(badge) badge.remove();
                    if(row) row.classList.remove('bg-red-900/10'); // Hapus background merah
                    
                    if(btn) {
                        btn.innerHTML = 'Fixed';
                        btn.classList.replace('bg-green-600', 'bg-zinc-700');
                        btn.disabled = true;
                    }

                    // Toast Sukses
                    const Toast = Swal.mixin({
                        toast: true, position: 'top-end', showConfirmButton: false, timer: 3000,
                        background: '#18181b', color: '#fff'
                    });
                    Toast.fire({ icon: 'success', title: 'Laporan diselesaikan!' });
                }
            });
        }

        // 3. CEK SESSION FLASH (Untuk Notif setelah Edit/Create)
        // Karena Edit/Create biasanya pindah halaman, kita pakai Toast saat kembali ke dashboard
        @if(session('success'))
            const Toast = Swal.mixin({
                toast: true, position: 'top-end', showConfirmButton: false, timer: 3000, timerProgressBar: true,
                background: '#18181b', color: '#fff'
            });
            Toast.fire({ icon: 'success', title: "{{ session('success') }}" });
        @endif
    </script>
</body>
</html>