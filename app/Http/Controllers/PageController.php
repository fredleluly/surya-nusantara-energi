<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    private function servicesData(): array
    {
        return [
            'instalasi-plts' => [
                'title' => 'Instalasi Panel Surya (PLTS Rooftop)',
                'short' => 'Instalasi PLTS atap untuk rumah, bisnis, dan industri dengan desain presisi dan garansi jangka panjang.',
                'description' => 'Kami merancang, memasang, dan mengomisioning sistem PLTS rooftop dari survei lokasi hingga sistem siap beroperasi. Setiap proyek memakai modul tier-1 dan inverter bergaransi, sesuai standar keselamatan kelistrikan Indonesia.',
                'icon' => '☀',
                'image' => 'https://images.unsplash.com/photo-1509391366360-2e959784a276?w=1200&q=80',
                'features' => [
                    'Survei lokasi dan analisis potensi radiasi matahari',
                    'Desain sistem on-grid, off-grid, dan hybrid',
                    'Pemasangan oleh teknisi bersertifikat',
                    'Pengurusan perizinan dan interkoneksi PLN',
                ],
                'benefits' => [
                    'Tagihan listrik turun hingga 60% per bulan',
                    'Balik modal rata-rata 4–6 tahun',
                    'Mengurangi emisi karbon secara nyata',
                ],
            ],
            'konsultasi-energi' => [
                'title' => 'Konsultasi Efisiensi Energi',
                'short' => 'Audit dan strategi penghematan energi untuk menekan biaya operasional bangunan dan pabrik Anda.',
                'description' => 'Tim auditor energi kami memetakan pola konsumsi listrik Anda, menemukan pemborosan, lalu menyusun rencana perbaikan yang terukur, lengkap dengan estimasi penghematan dan waktu balik modal.',
                'icon' => '⚡',
                'image' => 'https://images.unsplash.com/photo-1497435334941-8c899ee9e8e9?w=1200&q=80',
                'features' => [
                    'Audit energi menyeluruh pada gedung dan fasilitas produksi',
                    'Analisis beban dan profil konsumsi listrik',
                    'Rekomendasi peralatan hemat energi',
                    'Pendampingan sertifikasi bangunan hijau',
                ],
                'benefits' => [
                    'Biaya operasional lebih rendah dan terprediksi',
                    'Keputusan investasi berbasis data',
                    'Kinerja keberlanjutan perusahaan meningkat',
                ],
            ],
            'smart-metering' => [
                'title' => 'Smart Metering & Monitoring Energi',
                'short' => 'Pantau produksi dan konsumsi energi secara real-time lewat dasbor yang mudah dibaca.',
                'description' => 'Sistem smart meter kami mengumpulkan data listrik setiap menit dan menampilkannya di dasbor web. Anda dapat melihat performa PLTS, mendeteksi anomali, dan menerima laporan otomatis.',
                'icon' => '📊',
                'image' => 'https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?w=1200&q=80',
                'features' => [
                    'Pemantauan produksi dan konsumsi real-time',
                    'Notifikasi otomatis saat terjadi anomali',
                    'Laporan bulanan dan ekspor data',
                    'Integrasi dengan sistem PLTS dan gedung yang sudah ada',
                ],
                'benefits' => [
                    'Gangguan terdeteksi lebih cepat',
                    'Transparansi penuh atas penggunaan energi',
                    'Perawatan sistem lebih efisien',
                ],
            ],
        ];
    }

    public function home(): View
    {
        return view('pages.beranda', ['services' => $this->servicesData()]);
    }

    public function about(): View
    {
        return view('pages.tentang');
    }

    public function services(): View
    {
        return view('pages.layanan', ['services' => $this->servicesData()]);
    }

    public function serviceDetail(string $slug): View
    {
        $services = $this->servicesData();

        if (! isset($services[$slug])) {
            abort(404);
        }

        return view('pages.layanan-detail', [
            'slug' => $slug,
            'service' => $services[$slug],
            'others' => array_diff_key($services, [$slug => true]),
        ]);
    }

    public function contact(): View
    {
        return view('pages.kontak');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'pesan' => ['required', 'string', 'min:10', 'max:2000'],
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'pesan.required' => 'Pesan wajib diisi.',
            'pesan.min' => 'Pesan minimal 10 karakter.',
        ]);

        session()->flash('sukses', 'Terima kasih! Pesan Anda sudah kami terima dan akan segera kami balas.');

        return redirect()->route('contact');
    }
}
