<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin Login</title>
</head>
<body class="bg-black text-white h-screen flex flex-col items-center justify-center relative">

    <a href="{{ route('home') }}" class="absolute top-8 left-8 flex items-center gap-2 text-zinc-400 hover:text-white transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
        </svg>
        <span>Kembali ke Website</span>
    </a>

    <div class="w-full max-w-sm p-8 bg-zinc-900 rounded-2xl border border-zinc-800 shadow-2xl">
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-white">Admin Login</h2>
            <p class="text-sm text-zinc-500 mt-2">Masukan kredensial untuk masuk</p>
        </div>

        @if($errors->any())
            <div class="bg-red-500/10 border border-red-500/50 text-red-500 text-sm p-3 rounded mb-4 text-center">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-xs font-medium text-zinc-400 mb-1">EMAIL</label>
                <input type="email" name="email" class="w-full p-3 bg-black border border-zinc-700 rounded-lg text-white focus:outline-none focus:border-white transition-colors" placeholder="admin@gmail.com" required>
            </div>
            
            <div>
                <label class="block text-xs font-medium text-zinc-400 mb-1">PASSWORD</label>
                <input type="password" name="password" class="w-full p-3 bg-black border border-zinc-700 rounded-lg text-white focus:outline-none focus:border-white transition-colors" placeholder="••••••••" required>
            </div>

            <button type="submit" class="w-full bg-white text-black font-bold py-3 rounded-lg hover:bg-zinc-200 transition-transform active:scale-95">
                Masuk Dashboard
            </button>
        </form>

        <div class="mt-6 text-center">
            <a href="{{ route('password.forgot') }}" class="text-sm text-zinc-500 hover:text-zinc-300 transition-colors underline underline-offset-4">
                Lupa Password / Ganti Akun?
            </a>
        </div>
    </div>

</body>
</html>