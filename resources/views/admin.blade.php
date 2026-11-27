<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Kelola Biodata</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-950 via-teal-950 to-slate-900 px-6 py-10 text-slate-100">

    <main class="mx-auto w-full max-w-3xl">
        <section class="overflow-hidden rounded-3xl border border-white/10 bg-white/5 shadow-2xl shadow-black/30 backdrop-blur">
            <div class="flex flex-col gap-4 border-b border-white/10 bg-gradient-to-r from-teal-500/20 via-cyan-500/10 to-transparent px-8 py-7 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.25em] text-teal-300/80">Admin Panel</p>
                    <h1 class="mt-2 text-2xl font-bold tracking-tight text-white">Kelola Konten Biodata</h1>
                    <p class="mt-1 text-sm text-slate-300">Perbarui informasi yang ditampilkan pada halaman utama.</p>
                </div>
                <a href="{{ route('home') }}" class="inline-flex items-center justify-center rounded-xl border border-white/15 bg-white/5 px-4 py-2.5 text-sm font-semibold text-slate-100 transition hover:bg-white/10">
                    &larr; Lihat Halaman Publik
                </a>
            </div>

            <form action="{{ route('admin.update') }}" method="POST" class="space-y-6 px-8 py-8">
                @csrf

                @if ($errors->any())
                    <div class="rounded-2xl border border-rose-400/30 bg-rose-500/10 px-5 py-4 text-sm text-rose-100">
                        <p class="font-semibold">Periksa kembali input Anda:</p>
                        <ul class="mt-2 list-disc space-y-1 pl-5 text-rose-200">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div>
                    <label for="welcome_message" class="mb-2 block text-sm font-medium text-slate-200">Pesan Sambutan</label>
                    <input id="welcome_message" type="text" name="welcome_message" value="{{ old('welcome_message', $biodata['welcome_message']) }}" required
                        class="w-full rounded-xl border border-white/10 bg-slate-950/50 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-teal-400/60 focus:ring-2 focus:ring-teal-400/30">
                </div>

                <div>
                    <label for="nama" class="mb-2 block text-sm font-medium text-slate-200">Nama Lengkap</label>
                    <input id="nama" type="text" name="nama" value="{{ old('nama', $biodata['nama']) }}" required
                        class="w-full rounded-xl border border-white/10 bg-slate-950/50 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-teal-400/60 focus:ring-2 focus:ring-teal-400/30">
                </div>

                <div class="grid gap-6 sm:grid-cols-2">
                    <div>
                        <label for="profesi" class="mb-2 block text-sm font-medium text-slate-200">Profesi / Status</label>
                        <input id="profesi" type="text" name="profesi" value="{{ old('profesi', $biodata['profesi']) }}" required
                            class="w-full rounded-xl border border-white/10 bg-slate-950/50 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-teal-400/60 focus:ring-2 focus:ring-teal-400/30">
                    </div>
                    <div>
                        <label for="alamat" class="mb-2 block text-sm font-medium text-slate-200">Domisili</label>
                        <input id="alamat" type="text" name="alamat" value="{{ old('alamat', $biodata['alamat']) }}" required
                            class="w-full rounded-xl border border-white/10 bg-slate-950/50 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-teal-400/60 focus:ring-2 focus:ring-teal-400/30">
                    </div>
                </div>

                <div>
                    <label for="tentang" class="mb-2 block text-sm font-medium text-slate-200">Tentang Saya</label>
                    <textarea id="tentang" name="tentang" rows="5" required
                        class="w-full rounded-xl border border-white/10 bg-slate-950/50 px-4 py-3 leading-relaxed text-slate-100 placeholder-slate-500 outline-none transition focus:border-teal-400/60 focus:ring-2 focus:ring-teal-400/30">{{ old('tentang', $biodata['tentang']) }}</textarea>
                </div>

                <div class="flex flex-col-reverse gap-3 border-t border-white/10 pt-6 sm:flex-row sm:items-center sm:justify-end">
                    <a href="{{ route('home') }}" class="inline-flex items-center justify-center rounded-xl px-4 py-3 text-sm font-medium text-slate-300 transition hover:text-white">Batal</a>
                    <button type="submit" class="inline-flex items-center justify-center rounded-xl bg-gradient-to-r from-teal-400 to-cyan-500 px-5 py-3 text-sm font-semibold text-slate-950 transition hover:from-teal-300 hover:to-cyan-400">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </section>
    </main>

</body>
</html>