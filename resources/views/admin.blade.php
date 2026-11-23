<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Management - Atur Biodata</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center p-6">

    <div class="max-w-xl w-full bg-white rounded-2xl shadow-lg overflow-hidden">
        <div class="bg-slate-800 p-6 text-white flex justify-between items-center">
            <div>
                <h1 class="text-xl font-bold">Admin Content Management</h1>
                <p class="text-xs text-slate-400 mt-1">Ubah konten yang tampil pada halaman utama (/)</p>
            </div>
            <a href="{{ route('home') }}" class="text-xs bg-slate-700 hover:bg-slate-600 px-3 py-2 rounded-lg">
                &larr; Kembali ke Public
            </a>
        </div>

        <form action="{{ route('admin.update') }}" method="POST" class="p-6 space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Welcome Message (Judul Utama)</label>
                <input type="text" name="welcome_message" value="{{ old('welcome_message', $biodata['welcome_message']) }}" required
                    class="w-full border border-slate-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Nama Lengkap</label>
                <input type="text" name="nama" value="{{ old('nama', $biodata['nama']) }}" required
                    class="w-full border border-slate-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Profesi / Status</label>
                    <input type="text" name="profesi" value="{{ old('profesi', $biodata['profesi']) }}" required
                        class="w-full border border-slate-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Domisili / Alamat</label>
                    <input type="text" name="alamat" value="{{ old('alamat', $biodata['alamat']) }}" required
                        class="w-full border border-slate-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Tentang Saya</label>
                <textarea name="tentang" rows="3" required
                    class="w-full border border-slate-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">{{ old('tentang', $biodata['tentang']) }}</textarea>
            </div>

            <div class="pt-2">
                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2.5 rounded-lg transition">
                    Simpan Perubahan ke Halaman Utama
                </button>
            </div>
        </form>
    </div>

</body>
</html>