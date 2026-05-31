<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Software - {{ $software->title }}</title>
</head>
<body class="bg-black text-white p-6 md:p-10 flex justify-center min-h-screen items-center">

    <div class="w-full max-w-3xl bg-zinc-900 p-8 rounded-xl border border-zinc-800 shadow-2xl">
        
        <div class="flex justify-between items-center mb-8 border-b border-zinc-800 pb-4">
            <div>
                <h2 class="text-2xl font-bold text-white">Edit Software</h2>
            </div>
            <a href="{{ route('admin.dashboard') }}" class="text-zinc-500 hover:text-white text-sm transition-colors flex items-center gap-1">
                &larr; Batal
            </a>
        </div>

        @if ($errors->any())
            <div class="bg-red-500/10 border border-red-500 text-red-500 p-4 rounded-lg mb-6">
                <strong class="font-bold">Gagal Menyimpan:</strong>
                <ul class="list-disc ml-5 text-sm mt-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('admin.update', $software->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block mb-2 text-sm font-medium text-zinc-400">Nama Software</label>
                <input type="text" name="title" value="{{ old('title', $software->title) }}" 
                       class="w-full p-3 bg-black border border-zinc-700 rounded-lg text-white focus:outline-none focus:border-white" required>
            </div>

            <div class="bg-zinc-950 p-4 rounded border border-zinc-800">
                <label class="block mb-3 text-sm font-medium text-zinc-400">Icon / Gambar Utama</label>
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-20 h-20 bg-zinc-800 rounded-lg border border-zinc-700 flex items-center justify-center overflow-hidden shrink-0">
                        <img src="{{ Str::startsWith($software->image_url, 'http') ? $software->image_url : asset($software->image_url) }}" 
                             alt="Current Icon" class="w-full h-full object-contain p-2">
                    </div>
                    <div class="text-sm text-zinc-500">
                        <p class="text-white font-medium">Gambar saat ini.</p>
                        <p>Upload baru jika ingin mengganti.</p>
                    </div>
                </div>
                <input type="file" name="image" class="w-full text-sm text-zinc-400 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-bold file:bg-zinc-800 file:text-white hover:file:bg-zinc-700 cursor-pointer" accept=".svg,.png,.jpg,.webp">
            </div>
            
            <div>
                <label class="block mb-2 text-sm font-medium text-zinc-400">Deskripsi</label>
                <textarea name="description" rows="4" class="w-full p-3 bg-black border border-zinc-700 rounded-lg text-white focus:outline-none focus:border-white" required>{{ old('description', $software->description) }}</textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label class="block mb-2 text-sm font-medium text-zinc-400">Kategori</label>
                    <select name="category" class="w-full p-3 bg-black border border-zinc-700 rounded-lg text-white focus:outline-none focus:border-white appearance-none">
                        <option value="Development" {{ $software->category == 'Development' ? 'selected' : '' }}>Development</option>
                        <option value="Multimedia" {{ $software->category == 'Multimedia' ? 'selected' : '' }}>Multimedia</option>
                        <option value="Office" {{ $software->category == 'Office' ? 'selected' : '' }}>Office</option>
                        <option value="Gaming" {{ $software->category == 'Gaming' ? 'selected' : '' }}>Gaming</option>
                        <option value="System" {{ $software->category == 'System' ? 'selected' : '' }}>System</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-zinc-400">Versi</label>
                    <input type="text" name="version" value="{{ old('version', $software->version) }}" class="w-full p-3 bg-black border border-zinc-700 rounded-lg text-white focus:outline-none focus:border-white" required>
                </div>
            </div>

            <div class="bg-zinc-950 p-4 rounded border border-zinc-800">
                <label class="block mb-3 text-sm font-medium text-zinc-400">Screenshot Aplikasi</label>
                
                @if($software->screenshot_url)
                <div class="mb-4">
                    <p class="text-xs text-zinc-500 mb-2">Screenshot saat ini:</p>
                    <img src="{{ Str::startsWith($software->screenshot_url, 'http') ? $software->screenshot_url : asset($software->screenshot_url) }}" 
                         alt="Screenshot" class="h-32 w-auto rounded border border-zinc-700 object-cover">
                </div>
                @endif
            
                <input type="file" name="screenshot" class="w-full text-sm text-zinc-400 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-bold file:bg-zinc-800 file:text-white hover:file:bg-zinc-700 cursor-pointer" accept=".png,.jpg,.jpeg,.webp">
                <p class="text-xs text-zinc-600 mt-2">*Biarkan kosong jika tidak ingin mengubah screenshot.</p>
            </div>

            <div>
                <label class="block mb-1 text-zinc-400 text-sm">Panduan Instalasi</label>
                <textarea name="install_instructions" rows="4" class="w-full p-3 bg-black border border-zinc-700 rounded text-white focus:outline-none focus:border-white">{{ old('install_instructions', $software->install_instructions) }}</textarea>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1 text-zinc-400 text-sm">Ukuran File</label>
                    <input type="text" name="file_size" value="{{ old('file_size', $software->file_size) }}" class="w-full p-3 bg-black border border-zinc-700 rounded text-white focus:outline-none focus:border-white">
                </div>
                <div>
                    <label class="block mb-1 text-zinc-400 text-sm">Support OS</label>
                    <input type="text" name="os_support" value="{{ old('os_support', $software->os_support) }}" class="w-full p-3 bg-black border border-zinc-700 rounded text-white focus:outline-none focus:border-white">
                </div>
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-zinc-400">Link Download</label>
                <input type="url" name="download_url" value="{{ old('download_url', $software->download_url) }}" class="w-full p-3 bg-black border border-zinc-700 rounded-lg text-white focus:outline-none focus:border-white" required>
            </div>

            <div class="flex items-center gap-3 p-4 border border-zinc-700 rounded bg-zinc-900/50 hover:bg-zinc-800 transition-colors">
                <input type="checkbox" name="is_featured" id="is_featured" value="1" class="w-5 h-5 accent-blue-600 cursor-pointer rounded" {{ $software->is_featured ? 'checked' : '' }}>
                <label for="is_featured" class="text-white font-medium cursor-pointer select-none">
                    Jadikan "Featured" (Tampil di Highlight Utama)
                </label>
            </div>

            <button type="submit" class="w-full bg-white text-black font-bold py-4 rounded-lg mt-6 hover:bg-zinc-200 hover:scale-[1.01] transition-all duration-200 shadow-lg">
                Update Software
            </button>
        </form>
    </div>

</body>
</html>