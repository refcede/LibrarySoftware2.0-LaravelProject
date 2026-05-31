<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Reset Password</title>
</head>
<body class="bg-black text-white h-screen flex items-center justify-center">

    <div class="w-full max-w-sm p-8 bg-zinc-900 rounded-2xl border border-zinc-800 shadow-2xl">
        
        <div class="flex justify-center items-center mb-6">
            <h2 class="text-xl font-bold">Reset Password</h2>
            
        </div>

        <p class="text-sm text-zinc-500 mb-6">Masukan email akun admin Anda dan password baru yang diinginkan.</p>

        @if($errors->any())
            <div class="bg-red-500/10 border border-red-500/50 text-red-500 text-sm p-3 rounded mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('password.process') }}" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label class="block text-xs font-medium text-zinc-400 mb-1">EMAIL ADMIN</label>
                <input type="email" name="email" class="w-full p-3 bg-black border border-zinc-700 rounded-lg text-white" placeholder="admin@gmail.com" required>
            </div>

            <div>
                <label class="block text-xs font-medium text-zinc-400 mb-1">PASSWORD BARU</label>
                <input type="password" name="password" class="w-full p-3 bg-black border border-zinc-700 rounded-lg text-white" placeholder="Minimal 6 karakter" required>
            </div>

            <div>
                <label class="block text-xs font-medium text-zinc-400 mb-1">ULANGI PASSWORD</label>
                <input type="password" name="password_confirmation" class="w-full p-3 bg-black border border-zinc-700 rounded-lg text-white" placeholder="Ketik ulang password" required>
            </div>

            <button type="submit" class="w-full bg-white text-black font-bold py-3 rounded-lg hover:bg-zinc-200 mt-2">
                Simpan Password Baru
            </button>
            <a href="{{ route('login') }}" class="block text-center w-full bg-red-600 text-black font-bold py-3 rounded-lg hover:bg-red-700 mt-2">
                Batal
            </a>
            
        </form>
    </div>

</body>
</html>