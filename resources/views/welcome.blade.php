<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri - {{ $biodata['nama'] }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center p-6">

    <div class="max-w-xl w-full bg-white rounded-2xl shadow-lg overflow-hidden">
        <!-- Header / Welcome Message -->
        <div class="bg-indigo-600 p-6 text-white text-center">
            <p class="text-sm uppercase tracking-wider text-indigo-200 font-semibold">Public Profile</p>
            <h1 class="text-2xl font-bold mt-1">{{ $biodata['welcome_message'] }}</h1>
        </div>

        <!-- Notifikasi Sukses setelah update dari Admin -->
        @if(session('success'))
            <div class="bg-emerald-100 border-l-4 border-emerald-500 text-emerald-700 p-4 text-sm">
                {{ session('success') }}
            </div>
        @endif

        <!-- Konten Biodata -->
        <div class="p-6 space-y-4">
            <div>
                <span class="text-xs text-slate-400 uppercase font-bold">Nama Lengkap</span>
                <p class="text-lg font-semibold text-slate-800">{{ $biodata['nama'] }}</p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <span class="text-xs text-slate-400 uppercase font-bold">Profesi / Status</span>
                    <p class="text-slate-700">{{ $biodata['profesi'] }}</p>
                </div>
                <div>
                    <span class="text-xs text-slate-400 uppercase font-bold">Domisili</span>
                    <p class="text-slate-700">{{ $biodata['alamat'] }}</p>
                </div>
            </div>
            <div>
                <span class="text-xs text-slate-400 uppercase font-bold">Tentang Saya</span>
                <p class="text-slate-600 leading-relaxed mt-1">{{ $biodata['tentang'] }}</p>
            </div>
        </div>

        <!-- Navigasi ke Route Management / Admin -->
        <div class="bg-slate-50 px-6 py-4 border-t border-slate-100 flex justify-between items-center">
            <span class="text-xs text-slate-400">Root Path: <code>/</code></span>
            <a href="{{ route('admin.index') }}" class="text-sm bg-slate-800 hover:bg-slate-700 text-white px-4 py-2 rounded-lg transition">
                Kelola Konten (Admin) &rarr;
            </a>
        </div>
    </div>

</body>
</html>