<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri - {{ $biodata['nama'] }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-950 via-teal-950 to-slate-900 text-slate-100 flex items-center justify-center p-6">

    <main class="w-full max-w-3xl">
        @if(session('success'))
            <div class="mb-6 rounded-2xl border border-emerald-400/30 bg-emerald-500/10 px-5 py-4 text-sm text-emerald-200 shadow-lg shadow-emerald-950/20">
                {{ session('success') }}
            </div>
        @endif

        <section class="overflow-hidden rounded-3xl border border-white/10 bg-white/5 shadow-2xl shadow-black/30 backdrop-blur">
            <div class="relative border-b border-white/10 px-8 py-10">
                <div class="absolute inset-0 bg-gradient-to-r from-teal-500/20 via-cyan-500/10 to-transparent"></div>
                <div class="relative flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
                    <div class="flex items-center gap-5">
                        <div class="flex h-20 w-20 items-center justify-center rounded-2xl bg-gradient-to-br from-teal-400 to-cyan-500 text-2xl font-bold text-slate-950 shadow-lg shadow-teal-900/40">
                            {{ collect(explode(' ', trim($biodata['nama'])))->filter()->take(2)->map(fn ($part) => mb_strtoupper(mb_substr($part, 0, 1)))->implode('') ?: 'P' }}
                        </div>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.25em] text-teal-300/80">Profil Biodata</p>
                            <h1 class="mt-2 text-3xl font-bold tracking-tight text-white">{{ $biodata['nama'] }}</h1>
                            <p class="mt-1 text-sm text-slate-300">{{ $biodata['profesi'] }}</p>
                        </div>
                    </div>
                    <a href="{{ route('admin.index') }}" class="inline-flex items-center justify-center rounded-xl border border-teal-300/30 bg-teal-400/10 px-4 py-2.5 text-sm font-semibold text-teal-100 transition hover:bg-teal-400/20">
                        Kelola Konten
                    </a>
                </div>
                <p class="relative mt-8 max-w-2xl text-lg leading-relaxed text-slate-200">
                    {{ $biodata['welcome_message'] }}
                </p>
            </div>

            <div class="grid gap-6 px-8 py-8 sm:grid-cols-3">
                <div class="rounded-2xl border border-white/10 bg-slate-950/40 p-5 sm:col-span-1">
                    <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">Domisili</p>
                    <p class="mt-3 text-base font-medium text-white">{{ $biodata['alamat'] }}</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-slate-950/40 p-5 sm:col-span-2">
                    <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">Tentang Saya</p>
                    <p class="mt-3 leading-relaxed text-slate-200">{{ $biodata['tentang'] }}</p>
                </div>
            </div>

            <div class="flex flex-col gap-3 border-t border-white/10 bg-black/20 px-8 py-5 text-sm text-slate-400 sm:flex-row sm:items-center sm:justify-between">
                <span>Halaman publik biodata pribadi</span>
                <span class="font-mono text-xs text-slate-500">Route: /</span>
            </div>
        </section>
    </main>

</body>
</html>