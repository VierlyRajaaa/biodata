<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BiodataController extends Controller
{
    public function index(): View
    {
        return view('welcome', [
            'biodata' => $this->getBiodata(),
        ]);
    }

    public function admin(): View
    {
        return view('admin', [
            'biodata' => $this->getBiodata(),
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'welcome_message' => 'required|string|max:100',
            'nama' => 'required|string|max:50',
            'profesi' => 'required|string|max:50',
            'alamat' => 'required|string|max:100',
            'tentang' => 'required|string|max:500',
        ]);

        session(['biodata' => $validated]);

        return redirect()->route('home')
            ->with('success', 'Konten biodata berhasil diperbarui!');
    }

    private function getBiodata(): array
    {
        return session('biodata', [
            'welcome_message' => 'Selamat Datang di Profil Biodata Saya!',
            'nama' => 'Vierly Raja',
            'profesi' => 'Pelajar / Web Developer Pemula',
            'alamat' => 'Surabaya, Jawa Timur',
            'tentang' => 'Saya sedang belajar membangun aplikasi web modern menggunakan framework Laravel.',
        ]);
    }
}
