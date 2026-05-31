<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoftBay >\\<</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        hand: ['Patrick Hand', 'cursive'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.8s ease-out forwards',
                        'bounce-slow': 'bounce 2s infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #52525b; border-radius: 4px; }
        body { overflow-x: hidden; }
    </style>
</head>
<body class="bg-transparent text-slate-800 dark:text-zinc-100 antialiased selection:bg-blue-500 selection:text-white transition-colors duration-500 relative">

    <div class="fixed inset-0 z-[-1] overflow-hidden transition-colors duration-700 bg-slate-50 dark:bg-[#0a0a0a]">
        
        <div class="absolute inset-0 opacity-100 dark:opacity-0 transition-opacity duration-700">
            <div class="absolute inset-0 bg-gradient-to-tr from-slate-100 via-white to-slate-100"></div>
            <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-purple-200/30 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/3"></div>
            <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-blue-200/20 rounded-full blur-[120px] translate-y-1/2 -translate-x-1/3"></div>
        </div>

        <div class="absolute inset-0 opacity-0 dark:opacity-100 transition-opacity duration-700">
            <div class="absolute top-[-10%] right-[-5%] w-[50vw] h-[50vw] max-w-[700px] max-h-[700px] rounded-full bg-purple-800/40 blur-[100px] md:blur-[180px] mix-blend-screen"></div>
            <div class="absolute top-[40%] left-[-10%] w-[40vw] h-[40vw] max-w-[600px] max-h-[600px] rounded-full bg-indigo-900/50 blur-[100px] md:blur-[180px] mix-blend-screen"></div>
            <div class="absolute bottom-[-10%] right-[10%] w-[30vw] h-[30vw] max-w-[500px] max-h-[500px] rounded-full bg-fuchsia-900/30 blur-[100px] md:blur-[180px] mix-blend-screen"></div>
        </div>

        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjAwIDIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZmlsdGVyIGlkPSJuIj48ZmVUdXJYdWxlbmNlIHR5cGU9ImZyYWN0YWxOb2lzZSIgYmFzZUZyZXF1ZW5jeT0iMC42IiBbnVtT2N0YXZlcz0iMyIgc3RpdGNoVGlsZXM9InN0aXRjaCIvPjwvZmlsdGVyPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbHRlcj0idXJsKCNuKSIgb3BhY2l0eT0iMC4wNSIvPjwvc3ZnPg==')] opacity-20 dark:opacity-30 mix-blend-overlay pointer-events-none"></div>
    </div>

    <nav class="fixed top-0 w-full z-50 bg-white/80 dark:bg-black/60 backdrop-blur-xl border-b border-slate-200 dark:border-zinc-800 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            
            <a href="{{ route('home') }}" class="flex items-center gap-3 group cursor-pointer relative z-50">
                <div class="bg-slate-900 dark:bg-white text-white dark:text-black p-1.5 rounded-lg group-hover:rotate-12 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm14.25 6a.75.75 0 0 1-.22.53l-2.25 2.25a.75.75 0 1 1-1.06-1.06L15.44 12l-1.72-1.72a.75.75 0 1 1 1.06-1.06l2.25 2.25c.141.14.22.331.22.53Zm-10.28-.53a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.56 12l1.72-1.72a.75.75 0 1 0-1.06-1.06l-2.25 2.25Z" clip-rule="evenodd" />
                    </svg>                          
                </div>
                <h1 class="text-xl font-bold tracking-tight text-slate-800 dark:text-white">SoftBay</h1>
            </a>

            <div class="hidden md:flex items-center gap-4">
                <button onclick="toggleTheme()" class="p-2 rounded-full bg-slate-200 dark:bg-zinc-800 text-slate-800 dark:text-yellow-400 hover:scale-110 transition-transform">
                    <svg id="iconSun" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 hidden dark:block"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" /></svg>
                    <svg id="iconMoon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 block dark:hidden"><path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" /></svg>
                </button>
                <form action="{{ route('home') }}" method="GET" class="flex items-center bg-white/50 dark:bg-zinc-900 border border-slate-300 dark:border-zinc-800 rounded-full px-4 py-2 focus-within:border-blue-500 transition-all w-64 backdrop-blur">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-slate-500 dark:text-zinc-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 5.196 5.196Z" />
                    </svg>
                    <input type="text" name="title" value="{{ request('title') }}" placeholder="Cari apps..." class="bg-transparent border-none text-sm text-slate-800 dark:text-white focus:outline-none ml-2 w-full placeholder:text-slate-500 dark:placeholder:text-zinc-600">
                </form>
                @auth
                    <a href="{{ route('admin.dashboard') }}" class="text-sm font-semibold text-white bg-slate-800 dark:bg-zinc-800 hover:bg-slate-700 px-4 py-2 rounded-full border border-slate-600 dark:border-zinc-700">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-medium text-slate-600 dark:text-zinc-400 hover:text-black dark:hover:text-white">Login</a>
                @endauth
            </div>

            <div class="flex items-center gap-3 md:hidden relative z-50">
                <button onclick="toggleTheme()" class="p-2 rounded-full bg-slate-200 dark:bg-zinc-800 text-slate-800 dark:text-yellow-400 shadow-sm">
                    <svg id="iconSunMobile" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 hidden dark:block"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" /></svg>
                    <svg id="iconMoonMobile" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 block dark:hidden"><path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" /></svg>
                </button>
                <button onclick="toggleMobileMenu()" class="text-slate-800 dark:text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobileMenu" class="hidden md:hidden absolute top-full left-0 w-full bg-white/95 dark:bg-black/95 backdrop-blur-xl border-b border-slate-200 dark:border-zinc-800 p-6 flex-col gap-4 shadow-2xl transition-all">
            <form action="{{ route('home') }}" method="GET" class="flex items-center bg-slate-100 dark:bg-zinc-900 border border-slate-300 dark:border-zinc-700 rounded-lg px-4 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 5.196 5.196Z" />
                </svg>
                <input type="text" name="title" value="{{ request('title') }}" placeholder="Cari software..." class="bg-transparent border-none text-base text-slate-800 dark:text-white focus:outline-none ml-2 w-full">
            </form>
            <div class="flex flex-col gap-2">
                @auth
                    <a href="{{ route('admin.dashboard') }}" class="block text-center w-full bg-blue-600 text-white font-bold py-3 rounded-lg">Dashboard Admin</a>
                @else
                    <a href="{{ route('login') }}" class="block text-center w-full bg-slate-200 dark:bg-zinc-800 text-slate-800 dark:text-white font-bold py-3 rounded-lg">Login Admin</a>
                @endauth
            </div>
        </div>
    </nav>

    @if(session('success') || session('error'))
        <div class="fixed top-24 left-1/2 -translate-x-1/2 z-[80] animate-bounce-slow">
            <div class="px-6 py-3 rounded-full shadow-2xl font-bold text-sm border flex items-center gap-2
                {{ session('success') ? 'bg-green-500 text-white border-green-400' : 'bg-red-500 text-white border-red-400' }}">
                @if(session('success')) <span>✅</span> {{ session('success') }}
                @else <span>❌</span> {{ session('error') }} @endif
            </div>
        </div>
    @endif

    <header class="pt-32 pb-10 px-6 max-w-7xl mx-auto text-center animate-fade-in relative z-10">
        <span class="inline-block py-1 px-3 rounded-full bg-white/50 dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 text-xs font-medium text-slate-600 dark:text-zinc-400 mb-4 tracking-wide uppercase backdrop-blur">
            SoftBay v2.0 Updated
        </span>
        <h2 class="text-4xl md:text-6xl font-extrabold text-slate-800 dark:text-white tracking-tight mb-4 drop-shadow-sm">
            Essential Tools for <br> <span class="text-blue-600 dark:text-zinc-500">Modern Creators.</span>
        </h2>
        <p class="text-slate-600 dark:text-zinc-400 text-base md:text-lg max-w-2xl mx-auto leading-relaxed font-medium">
            Koleksi software terkurasi, aman, dan gratis. Tanpa iklan mengganggu, langsung download, dari mas CibayGantenk.
        </p>
    </header>

    <main class="max-w-7xl mx-auto px-6 pb-24 relative z-10">
        <div class="flex gap-2 mb-8 md:mb-10 overflow-x-auto pb-4 justify-start md:justify-center no-scrollbar">
            @php
                $activeStyle = "bg-slate-800 dark:bg-white text-white dark:text-black font-semibold shadow-lg scale-105";
                $inactiveStyle = "bg-white/60 dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 text-slate-500 dark:text-zinc-400 font-medium hover:border-blue-400 dark:hover:border-zinc-500 hover:text-slate-900 dark:hover:text-white backdrop-blur whitespace-nowrap";
                $currentCat = request('category');
            @endphp
            <a href="{{ route('home') }}" class="px-5 py-2 rounded-full text-sm transition-all duration-300 {{ !$currentCat ? $activeStyle : $inactiveStyle }}">Semua</a>
            <a href="{{ route('home', ['category' => 'Development']) }}" class="px-5 py-2 rounded-full text-sm transition-all duration-300 {{ $currentCat == 'Development' ? $activeStyle : $inactiveStyle }}">Development</a>
            <a href="{{ route('home', ['category' => 'Multimedia']) }}" class="px-5 py-2 rounded-full text-sm transition-all duration-300 {{ $currentCat == 'Multimedia' ? $activeStyle : $inactiveStyle }}">Multimedia</a>
            <a href="{{ route('home', ['category' => 'Office']) }}" class="px-5 py-2 rounded-full text-sm transition-all duration-300 {{ $currentCat == 'Office' ? $activeStyle : $inactiveStyle }}">Office</a>
            <a href="{{ route('home', ['category' => 'Gaming']) }}" class="px-5 py-2 rounded-full text-sm transition-all duration-300 {{ $currentCat == 'Gaming' ? $activeStyle : $inactiveStyle }}">Gaming</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($softwares as $sw)
            <div class="group relative bg-white/70 dark:bg-zinc-900/90 backdrop-blur-md rounded-3xl p-6 transition-all duration-300 ease-out hover:-translate-y-1 shadow-sm hover:shadow-xl
                {{ $sw->is_featured ? 'border border-yellow-500/50 shadow-[0_0_20px_rgba(234,179,8,0.15)]' : 'border border-slate-100 dark:border-zinc-800 hover:border-slate-300 dark:hover:border-zinc-500' }}">
                
                @if($sw->is_featured)
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-gradient-to-r from-yellow-500 to-orange-400 text-white text-[10px] font-extrabold px-3 py-1 rounded-full shadow-lg z-20 flex items-center gap-1 uppercase tracking-widest">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3 h-3"><path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" /></svg> Featured
                    </div>
                @endif                
                
                <div class="flex items-start justify-between mb-6">
                    <div class="relative">
                        <div class="absolute inset-0 bg-blue-500/10 dark:bg-white/10 blur-xl rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="w-20 h-20 rounded-2xl bg-white dark:bg-zinc-950 border border-slate-200 dark:border-zinc-800 flex items-center justify-center relative z-10 group-hover:scale-110 transition-transform duration-300 overflow-hidden shadow-inner">
                           <img src="{{ Str::startsWith($sw->image_url, 'http') ? $sw->image_url : asset($sw->image_url) }}" 
                                 alt="{{ $sw->title }}" 
                                 class="w-full h-full object-contain p-3">
                        </div>
                    </div>
                    <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider border border-slate-200 dark:border-zinc-700 bg-white dark:bg-zinc-950 text-slate-500 dark:text-zinc-400 group-hover:border-blue-400 dark:group-hover:border-zinc-500 group-hover:text-blue-600 dark:group-hover:text-white transition-colors">
                        {{ $sw->category }}
                    </span>
                </div>

                <h3 class="text-xl font-bold text-slate-800 dark:text-white mb-1 group-hover:text-blue-600 dark:group-hover:text-white transition-colors flex items-center gap-2">
                    {{ $sw->title }}
                    
                    {{-- Logika: Jika dibuat dalam 7 hari terakhir --}}
                    @if($sw->created_at >= now()->subDays(7))
                        <span class="bg-blue-500 text-white text-[10px] font-extrabold px-2 py-0.5 rounded-md shadow-[0_0_10px_rgba(59,130,246,0.5)] animate-pulse border border-blue-400">
                            NEW 
                        </span>
                    @endif
                </h3>
                
                <div class="flex items-center gap-1 mb-3">
                    <div class="flex text-yellow-400">
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= round($sw->ratings_avg_rating))
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @else
                                <svg class="w-4 h-4 text-slate-300 dark:text-zinc-600 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endif
                        @endfor
                    </div>
                    <span class="text-xs text-slate-400 dark:text-zinc-500 ml-1">({{ number_format($sw->ratings_avg_rating, 1) }})</span>
                </div>

                <p class="text-sm text-slate-500 dark:text-zinc-500 leading-relaxed mb-6 line-clamp-2 group-hover:text-slate-600 dark:group-hover:text-zinc-400 transition-colors">{{ $sw->description }}</p>

                <div class="flex items-center justify-between border-t border-slate-100 dark:border-zinc-800 pt-5 mt-auto">
                    <div class="flex flex-col">
                        <span class="text-xs text-slate-400 dark:text-zinc-500">Versi</span>
                        <span class="text-xs font-mono text-slate-600 dark:text-zinc-300">{{ $sw->version }}</span>
                    </div>

                    <button onclick="openModal(this)" 
                        data-id="{{ $sw->id }}" 
                        data-title="{{ $sw->title }}" 
                        data-version="{{ $sw->version }}" 
                        data-desc="{{ $sw->description }}" 
                        data-install="{{ $sw->install_instructions }}" 
                        data-image="{{ Str::startsWith($sw->image_url, 'http') ? $sw->image_url : asset($sw->image_url) }}" 
                        data-screenshot="{{ $sw->screenshot_url ? (Str::startsWith($sw->screenshot_url, 'http') ? $sw->screenshot_url : asset($sw->screenshot_url)) : '' }}" 
                        data-download="{{ route('software.download', $sw->id) }}" 
                        data-filesize="{{ $sw->file_size }}" 
                        data-ossupport="{{ $sw->os_support }}" 
                        data-report="{{ route('software.report', $sw->id) }}" 
                        data-rate-url="{{ route('software.rate', $sw->id) }}"
                        class="bg-slate-900 dark:bg-white text-white dark:text-black px-6 py-2.5 rounded-full text-sm font-bold flex items-center gap-2 hover:bg-blue-600 dark:hover:bg-zinc-200 hover:scale-105 active:scale-95 transition-all duration-200 cursor-pointer shadow-md">
                        <span>Get</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-11.25a.75.75 0 0 0-1.5 0v2.5h-2.5a.75.75 0 0 0 0 1.5h2.5v2.5a.75.75 0 0 0 1.5 0v-2.5h2.5a.75.75 0 0 0 0-1.5h-2.5v-2.5Z" clip-rule="evenodd" /></svg>                          
                    </button>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-10">{{ $softwares->links() }}</div>
    </main>

    <footer class="border-t border-slate-200 dark:border-zinc-900 py-8 text-center relative z-10 bg-white/50 dark:bg-black/50 backdrop-blur">
        <p class="text-slate-500 dark:text-zinc-600 text-sm">© 2026 SoftBay Inc by CibayGantenk.</p>
    </footer>

    <div id="waifuPopup" class="fixed bottom-0 right-2 md:right-5 z-[200] flex flex-col items-end translate-y-[150%] transition-transform duration-500 ease-out pointer-events-none">
        <div class="bg-white text-black px-3 py-2 md:px-4 md:py-3 rounded-t-2xl rounded-bl-2xl shadow-xl mb-2 mr-2 md:mr-4 relative animate-bounce-slow max-w-[150px] md:max-w-[200px] border border-zinc-200">
            <p class="text-xs md:text-sm font-hand font-bold leading-tight text-center">Arigatou! >< <br> Jangan lupa mampir lagi!</p>
            <div class="absolute -bottom-2 right-4 w-4 h-4 bg-white border-r border-b border-zinc-200 rotate-45"></div>
        </div>
        <img src="{{ asset('images/rem.gif') }}" class="w-24 md:w-40 h-auto drop-shadow-2xl">
    </div>

    <div id="ratingWaifu" class="fixed bottom-0 right-2 md:right-5 z-[200] flex flex-col items-end translate-y-[150%] transition-transform duration-500 ease-out pointer-events-none">
        <div class="bg-white text-black px-3 py-2 md:px-4 md:py-3 rounded-t-2xl rounded-bl-2xl shadow-xl mb-2 mr-2 md:mr-4 relative animate-bounce-slow max-w-[150px] md:max-w-[200px] border border-zinc-200">
            <p class="text-xs md:text-sm font-hand font-bold leading-tight text-center">Makasih Ratingnya! ⭐️<br> Kamu terbaik!</p>
            <div class="absolute -bottom-2 right-4 w-4 h-4 bg-white border-r border-b border-zinc-200 rotate-45"></div>
        </div>
        <img src="{{ asset('images/kaguya.gif') }}" class="w-24 md:w-40 h-auto drop-shadow-2xl">
    </div>

    <div id="reportWaifu" class="fixed bottom-0 left-2 md:left-5 z-[200] flex flex-col items-start translate-y-[150%] transition-transform duration-500 ease-out pointer-events-none">
        <div class="bg-white text-black px-3 py-2 md:px-4 md:py-3 rounded-t-2xl rounded-br-2xl shadow-xl mb-2 ml-2 md:ml-4 relative animate-bounce-slow max-w-[150px] md:max-w-[200px] border border-zinc-200">
            <p class="text-xs md:text-sm font-hand font-bold leading-tight text-center">Maaf ya... 😭 <br> Laporan diterima!</p>
            <div class="absolute -bottom-2 left-4 w-4 h-4 bg-white border-l border-b border-zinc-200 -rotate-45"></div>
        </div>
        <img src="{{ asset('images/yuil.gif') }}" class="w-24 md:w-40 h-auto drop-shadow-2xl">
    </div>

    <div id="alreadyRatedWaifu" class="fixed bottom-0 left-2 md:left-5 z-[200] flex flex-col items-start translate-y-[150%] transition-transform duration-500 ease-out pointer-events-none">
        <div class="bg-white text-black px-3 py-2 md:px-4 md:py-3 rounded-t-2xl rounded-br-2xl shadow-xl mb-2 ml-2 md:ml-4 relative animate-bounce-slow max-w-[150px] md:max-w-[200px] border border-zinc-200">
            <p class="text-xs md:text-sm font-hand font-bold leading-tight text-center">Kamu sudah vote Loh yaa! 😡 <br> Jangan spam!</p>
            <div class="absolute -bottom-2 left-4 w-4 h-4 bg-white border-l border-b border-zinc-200 -rotate-45"></div>
        </div>
        <img src="{{ asset('images/yuia.gif') }}" class="w-24 md:w-40 h-auto drop-shadow-2xl">
    </div>

    <div id="starWaifu" class="fixed bottom-0 left-2 md:left-5 z-[200] flex flex-col items-start translate-y-[150%] transition-transform duration-500 ease-out pointer-events-none">
        <div class="bg-white text-black px-3 py-2 md:px-4 md:py-3 rounded-t-2xl rounded-br-2xl shadow-xl mb-2 ml-2 md:ml-4 relative animate-bounce-slow max-w-[150px] md:max-w-[200px] border border-zinc-200">
            <p class="text-xs md:text-sm font-hand font-bold leading-tight text-center">Eits, pilih bintangnya dulu dong! ⭐</p>
            <div class="absolute -bottom-2 left-4 w-4 h-4 bg-white border-l border-b border-zinc-200 -rotate-45"></div>
        </div>
        <img src="{{ asset('images/yuia.gif') }}" class="w-24 md:w-40 h-auto drop-shadow-2xl">
    </div>

    <div id="appModal" class="fixed inset-0 z-[100] hidden transition-opacity duration-300 ease-out opacity-0">
        <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" onclick="closeModal()"></div>
        <div class="relative min-h-screen md:min-h-0 flex items-center justify-center p-4">
            <div id="modalPanel" class="bg-white dark:bg-zinc-900 w-full max-w-2xl rounded-2xl border border-slate-200 dark:border-zinc-700 shadow-2xl overflow-hidden relative transition-all duration-300 ease-out transform scale-95 opacity-0">
                
                <div class="h-40 md:h-48 w-full bg-slate-100 dark:bg-zinc-800 relative group">
                    <img id="modalScreenshot" src="" class="w-full h-full object-cover opacity-50 transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-white dark:from-zinc-900 via-white/60 dark:via-zinc-900/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-6 flex items-end gap-4">
                        <div class="w-16 h-16 md:w-20 md:h-20 rounded-xl bg-white dark:bg-zinc-900 border border-slate-200 dark:border-zinc-700 shadow-lg flex items-center justify-center overflow-hidden">
                            <img id="modalIcon" src="" class="w-full h-full object-contain p-2">
                        </div>
                        <div>
                            <h2 id="modalTitle" class="text-xl md:text-2xl font-bold text-slate-800 dark:text-white leading-none mb-2 drop-shadow-md">Title</h2>
                            <span id="modalVersion" class="text-xs font-mono text-slate-500 dark:text-zinc-300 bg-white/80 dark:bg-zinc-800/80 px-2 py-1 rounded border border-slate-300 dark:border-zinc-600 backdrop-blur">v1.0</span>
                        </div>
                    </div>
                    <button onclick="closeModal()" class="absolute top-4 right-4 bg-black/10 dark:bg-black/40 p-2 rounded-full backdrop-blur-md cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-500 dark:text-zinc-300"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" /></svg></button>
                </div>

                <div class="p-6 md:p-8 space-y-6 md:space-y-8 max-h-[50vh] md:max-h-[60vh] overflow-y-auto custom-scrollbar">
                    <div>
                        <h3 class="text-sm font-bold text-slate-800 dark:text-zinc-100 uppercase tracking-wider mb-3">Tentang Aplikasi</h3>
                        <p id="modalDesc" class="text-slate-600 dark:text-zinc-400 text-sm leading-relaxed ml-6">Description...</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div class="bg-slate-50 dark:bg-zinc-800/50 p-3 rounded-lg border border-slate-200 dark:border-zinc-700 flex items-center gap-3">
                            <div class="bg-slate-200 dark:bg-zinc-700 p-2 rounded-md"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-slate-600 dark:text-zinc-300" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M1 11.27c0-.246.033-.492.099-.73l1.523-5.521A2.75 2.75 0 0 1 5.273 3h9.454a2.75 2.75 0 0 1 2.651 2.019l1.523 5.52c.066.239.099.485.099.732V15a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3.73Zm3.068-5.852.62-2.25A1.25 1.25 0 0 1 5.961 2.5h8.078a1.25 1.25 0 0 1 1.272.969l.62 2.251a.25.25 0 0 1-.242.317H4.31a.25.25 0 0 1-.242-.317Z" clip-rule="evenodd" /><path d="M2.5 12.25a.75.75 0 1 0 0 1.5.75.75 0 0 0 0-1.5ZM17.5 13a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" /></svg></div>
                            <div><p class="text-[10px] uppercase text-slate-500 dark:text-zinc-500 font-bold">Ukuran</p><p id="modalFileSize" class="text-sm font-mono text-slate-700 dark:text-white">...</p></div>
                        </div>
                        <div class="bg-slate-50 dark:bg-zinc-800/50 p-3 rounded-lg border border-slate-200 dark:border-zinc-700 flex items-center gap-3">
                            <div class="bg-slate-200 dark:bg-zinc-700 p-2 rounded-md"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-slate-600 dark:text-zinc-300" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M2 4.25A2.25 2.25 0 0 1 4.25 2h11.5A2.25 2.25 0 0 1 18 4.25v8.5A2.25 2.25 0 0 1 15.75 15h-3.105a6.199 6.199 0 0 0 .476 2.283.75.75 0 0 1-1.396.55A7.683 7.683 0 0 1 10.5 15h-1c-.502 0-.986.088-1.425.233a.75.75 0 0 1-.498-1.416A6.2 6.2 0 0 0 7.355 15H4.25A2.25 2.25 0 0 1 2 12.75v-8.5Zm2.25-.75a.75.75 0 0 0-.75.75v4.5c0 .414.336.75.75.75h11.5a.75.75 0 0 0 .75-.75v-4.5a.75.75 0 0 0-.75-.75h-11.5Z" clip-rule="evenodd" /></svg></div>
                            <div><p class="text-[10px] uppercase text-slate-500 dark:text-zinc-500 font-bold">Sistem Operasi</p><p id="modalOS" class="text-sm font-mono text-slate-700 dark:text-white">...</p></div>
                        </div>
                    </div>
                    
                    <div class="bg-slate-50 dark:bg-zinc-800/50 p-5 rounded-xl border border-slate-200 dark:border-zinc-700/50">
                        <h3 class="text-sm font-bold text-slate-800 dark:text-zinc-100 uppercase tracking-wider mb-3">Cara Instalasi</h3>
                        <div id="modalInstall" class="text-slate-600 dark:text-zinc-300 text-sm font-mono whitespace-pre-line ml-6 pl-4 border-l-2 border-slate-300 dark:border-zinc-700">Langkah instalasi...</div>
                    </div>

                    <div class="bg-slate-50 dark:bg-zinc-800/50 p-5 rounded-xl border border-slate-200 dark:border-zinc-700/50">
                        <h3 class="text-sm font-bold text-slate-800 dark:text-zinc-100 uppercase tracking-wider mb-3">Berikan Nilai & Komentar</h3>
                        <form id="ratingForm" action="" method="POST" class="space-y-3">
                            @csrf
                            <div class="flex flex-row-reverse justify-end gap-1">
                                <input type="radio" name="rating" id="star5" value="5" class="peer/5 hidden" /><label for="star5" class="cursor-pointer text-slate-300 dark:text-zinc-600 peer-checked/5:text-yellow-400 hover:text-yellow-400 peer-hover/5:text-yellow-400 transition-colors"><svg class="w-8 h-8 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></label>
                                <input type="radio" name="rating" id="star4" value="4" class="peer/4 hidden" /><label for="star4" class="cursor-pointer text-slate-300 dark:text-zinc-600 peer-checked/4:text-yellow-400 hover:text-yellow-400 peer-hover/4:text-yellow-400 peer-checked/5:text-yellow-400 transition-colors"><svg class="w-8 h-8 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></label>
                                <input type="radio" name="rating" id="star3" value="3" class="peer/3 hidden" /><label for="star3" class="cursor-pointer text-slate-300 dark:text-zinc-600 peer-checked/3:text-yellow-400 hover:text-yellow-400 peer-hover/3:text-yellow-400 peer-checked/4:text-yellow-400 peer-checked/5:text-yellow-400 transition-colors"><svg class="w-8 h-8 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></label>
                                <input type="radio" name="rating" id="star2" value="2" class="peer/2 hidden" /><label for="star2" class="cursor-pointer text-slate-300 dark:text-zinc-600 peer-checked/2:text-yellow-400 hover:text-yellow-400 peer-hover/2:text-yellow-400 peer-checked/3:text-yellow-400 peer-checked/4:text-yellow-400 peer-checked/5:text-yellow-400 transition-colors"><svg class="w-8 h-8 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></label>
                                <input type="radio" name="rating" id="star1" value="1" class="peer/1 hidden" /><label for="star1" class="cursor-pointer text-slate-300 dark:text-zinc-600 peer-checked/1:text-yellow-400 hover:text-yellow-400 peer-hover/1:text-yellow-400 peer-checked/2:text-yellow-400 peer-checked/3:text-yellow-400 peer-checked/4:text-yellow-400 peer-checked/5:text-yellow-400 transition-colors"><svg class="w-8 h-8 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></label>
                            </div>
                            <textarea name="comment" rows="2" placeholder="Tulis pendapatmu..." class="w-full bg-slate-200 dark:bg-zinc-700 text-slate-800 dark:text-white rounded-lg p-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder:text-slate-500 dark:placeholder:text-zinc-500"></textarea>
                            <button type="button" onclick="submitRatingAjax()" class="bg-blue-600 hover:bg-blue-500 text-white px-4 py-2 rounded-lg text-sm font-bold w-full transition-colors">Kirim Penilaian</button>
                        </form>
                    </div>

                </div>

                <div class="p-6 border-t border-slate-200 dark:border-zinc-800 bg-slate-50 dark:bg-zinc-900 flex justify-between items-center relative z-20">
                    <form id="reportForm" action="" method="POST">
                        @csrf
                        <button type="button" onclick="submitReportAjax()" class="text-xs text-red-500 hover:text-red-400 font-bold flex items-center gap-1 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495ZM10 5a.75.75 0 0 1 .75.75v3.5a.75.75 0 0 1-1.5 0v-3.5A.75.75 0 0 1 10 5Zm0 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd" /></svg> Lapor Link Rusak
                        </button>
                    </form>
                    <a id="modalDownloadBtn" href="#" target="_blank" onclick="showWaifu()" class="bg-slate-900 dark:bg-white text-white dark:text-black px-6 md:px-8 py-3 rounded-full font-bold hover:bg-blue-600 dark:hover:bg-zinc-200 transition-all active:scale-95 flex items-center gap-2 shadow-lg">
                        Download <span class="hidden md:inline">Sekarang</span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path d="M10.75 2.75a.75.75 0 0 0-1.5 0v8.614L6.295 8.235a.75.75 0 1 0-1.09 1.03l4.25 4.5a.75.75 0 0 0 1.09 0l4.25-4.5a.75.75 0 0 1 0-1.09 1.03l-2.955 3.129V2.75Z" /><path d="M3.5 12.75a.75.75 0 0 0-1.5 0v2.5A2.75 2.75 0 0 0 4.75 18h10.5A2.75 2.75 0 0 0 18 15.25v-2.5a.75.75 0 0 0-1.5 0v2.5c0 .69-.56 1.25-1.25 1.25H4.75c-.69 0-1.25-.56-1.25-1.25v-2.5Z" /></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // ========= SETUP AUDIO (SFX) =========
        // URL Audio Online (Stabil & Cepat)
        const sfxDownload = new Audio('https://www.myinstants.com/media/sounds/cute-arigato.mp3'); 
        const sfxReport = new Audio('https://www.myinstants.com/media/sounds/among-us-emergency-button.mp3'); 
        const sfxRating = new Audio('https://www.myinstants.com/media/sounds/tuturu_1.mp3'); 
        const sfxError = new Audio('https://www.myinstants.com/media/sounds/error-sound.mp3'); 

        // Fungsi Helper untuk Memainkan Suara
        function playSound(type) {
            if(type === 'download') { sfxDownload.volume = 0.3; sfxDownload.play().catch(e => console.log(e)); }
            if(type === 'report') { sfxReport.volume = 0.3; sfxReport.play().catch(e => console.log(e)); }
            if(type === 'rating') { sfxRating.volume = 0.3; sfxRating.play().catch(e => console.log(e)); }
            if(type === 'error') { sfxError.volume = 0.3; sfxError.play().catch(e => console.log(e)); }
        }

        const modal = document.getElementById('appModal');
        const modalPanel = document.getElementById('modalPanel');
        
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
        }

        function toggleTheme() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark'); localStorage.theme = 'light';
            } else {
                document.documentElement.classList.add('dark'); localStorage.theme = 'dark';
            }
        }
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        // --- ANIMASI WAIFU ---
        function showWaifu() { 
            playSound('download'); // Bunyi "Wow/Yatta!"
            const waifu = document.getElementById('waifuPopup'); 
            if (waifu) { waifu.classList.remove('translate-y-[150%]'); setTimeout(() => { waifu.classList.add('translate-y-[150%]'); }, 4000); } 
        }
        
        function showReportWaifu() { 
            playSound('report'); // Bunyi Sedih
            const reportWaifu = document.getElementById('reportWaifu'); 
            if(reportWaifu) { reportWaifu.classList.remove('translate-y-[150%]'); setTimeout(() => { reportWaifu.classList.add('translate-y-[150%]'); }, 5000); } 
        }
        
        function showRatingWaifu() { 
            playSound('rating'); // Bunyi "Tuturu"
            const ratingWaifu = document.getElementById('ratingWaifu'); 
            if(ratingWaifu) { ratingWaifu.classList.remove('translate-y-[150%]'); setTimeout(() => { ratingWaifu.classList.add('translate-y-[150%]'); }, 5000); } 
        }
        
        // Waifu Baru: Sudah Rating & Lupa Bintang
        function showAlreadyRatedWaifu() { 
            playSound('error'); // Bunyi Error
            const already = document.getElementById('alreadyRatedWaifu'); 
            if(already) { already.classList.remove('translate-y-[150%]'); setTimeout(() => { already.classList.add('translate-y-[150%]'); }, 5000); } 
        }
        
        function showStarWaifu() { 
            playSound('error'); // Bunyi Error
            const star = document.getElementById('starWaifu'); 
            if(star) { star.classList.remove('translate-y-[150%]'); setTimeout(() => { star.classList.add('translate-y-[150%]'); }, 5000); } 
        }

        // --- AJAX REPORT ---
        function submitReportAjax() {
            const form = document.getElementById('reportForm');
            const url = form.action; 
            fetch(url, { method: 'POST', body: new FormData(form), headers: { 'X-Requested-With': 'XMLHttpRequest' } })
            .then(response => { if (response.ok) { closeModal(); setTimeout(() => { showReportWaifu(); }, 300); } else { alert('Gagal lapor. Silakan coba lagi.'); } })
            .catch(error => { console.error('Error:', error); });
        }

        // --- AJAX RATING ---
        function submitRatingAjax() {
            const form = document.getElementById('ratingForm');
            const url = form.action;
            
            // 1. Cek Bintang
            const ratingInput = form.querySelector('input[name="rating"]:checked');
            if(!ratingInput) {
                // Panggil Waifu Bingung (Lupa Bintang)
                showStarWaifu(); 
                return;
            }

            fetch(url, { method: 'POST', body: new FormData(form), headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' } })
            .then(response => response.json()) 
            .then(data => {
                if (data.status === 'success') {
                    form.reset();
                    closeModal();
                    setTimeout(() => { showRatingWaifu(); }, 300);
                } else {
                    // Jika error (misal: sudah rating), panggil Waifu Marah
                    showAlreadyRatedWaifu();
                }
            })
            .catch(error => { console.error('Error:', error); });
        }

        function openModal(element) {
            const title = element.getAttribute('data-title');
            const version = element.getAttribute('data-version');
            const desc = element.getAttribute('data-desc');
            const install = element.getAttribute('data-install');
            const image = element.getAttribute('data-image');
            const screenshot = element.getAttribute('data-screenshot');
            const downloadUrl = element.getAttribute('data-download');
            const fileSize = element.getAttribute('data-filesize') || '-';
            const osSupport = element.getAttribute('data-ossupport') || 'Windows';
            const reportUrl = element.getAttribute('data-report');
            const rateUrl = element.getAttribute('data-rate-url');

            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalVersion').innerText = version;
            document.getElementById('modalDesc').innerText = desc;
            document.getElementById('modalInstall').innerText = install ? install : "Tidak ada panduan khusus.";
            document.getElementById('modalIcon').src = image;
            document.getElementById('modalScreenshot').src = screenshot ? screenshot : image;
            document.getElementById('modalDownloadBtn').href = downloadUrl;
            document.getElementById('modalFileSize').innerText = fileSize;
            document.getElementById('modalOS').innerText = osSupport;
            document.getElementById('reportForm').action = reportUrl;
            document.getElementById('ratingForm').action = rateUrl;

            if(modal) {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
                setTimeout(() => { modal.classList.remove('opacity-0'); if(modalPanel) modalPanel.classList.remove('scale-95', 'opacity-0'); }, 10);
            }
        }

        function closeModal() {
            if(modal) {
                modal.classList.add('opacity-0');
                if(modalPanel) modalPanel.classList.add('scale-95', 'opacity-0');
                setTimeout(() => { modal.classList.add('hidden'); document.body.style.overflow = 'auto'; }, 300);
            }
        }
    </script>
</body>
</html>