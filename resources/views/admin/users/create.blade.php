<!DOCTYPE html>
<html lang="id">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tambah Admin Baru</title>
</head>
<body class="bg-black text-white p-10 flex justify-center min-h-screen items-center">

    <div class="w-full max-w-lg bg-zinc-900 p-8 rounded-xl border border-zinc-800 shadow-2xl">
        
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Tambah Admin Baru</h2>
            <a href="{{ route('admin.dashboard') }}" class="text-sm text-zinc-500 hover:text-white">&larr; Batal</a>
        </div>

        <form action="{{ route('admin.users.store') }}" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label class="block mb-1 text-zinc-400 text-sm">Nama Lengkap</label>
                <input type="text" name="name" class="w-full p-3 bg-black border border-zinc-700 rounded text-white focus:outline-none focus:border-white" required>
            </div>

            <div>
                <label class="block mb-1 text-zinc-400 text-sm">Email Login</label>
                <input type="email" name="email" class="w-full p-3 bg-black border border-zinc-700 rounded text-white focus:outline-none focus:border-white" required>
            </div>

            <div>
                <label class="block mb-1 text-zinc-400 text-sm">Password</label>
                <input type="password" name="password" class="w-full p-3 bg-black border border-zinc-700 rounded text-white focus:outline-none focus:border-white" required minlength="6">
                <p class="text-xs text-zinc-600 mt-1">*Minimal 6 karakter</p>
            </div>

            <button type="submit" class="w-full bg-white text-black font-bold py-3 rounded mt-4 hover:bg-zinc-200 transition-colors">
                Simpan Admin
            </button>
        </form>
    </div>

</body>
</html>