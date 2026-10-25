@extends('app')

@section('title', 'Tentang Kami')

@section('content')
<section class="page-hero">
    <div class="container">
        <h1>Tentang Kami</h1>
        <p>Mengenal PT Surya Nusantara Energi, perjalanan, dan nilai yang kami pegang.</p>
    </div>
</section>

<section class="section">
    <div class="container grid grid--2 grid--center">
        <div>
            <span class="eyebrow eyebrow--dark">Sejarah Singkat</span>
            <h2>Berawal dari Satu Atap</h2>
            <p>PT Surya Nusantara Energi didirikan pada 2015 oleh sekelompok insinyur yang percaya bahwa energi surya harus terjangkau bagi semua. Proyek pertama kami adalah PLTS atap sebuah sekolah di Jawa Barat.</p>
            <p>Kini kami melayani rumah tangga, perkantoran, hingga pabrik di berbagai provinsi, dengan fokus pada kualitas pemasangan dan layanan jangka panjang.</p>
        </div>
        <img class="rounded" src="https://images.unsplash.com/photo-1497435334941-8c899ee9e8e9?w=1200&q=80" alt="Panel surya di atap gedung" loading="lazy">
    </div>
</section>

<section class="section section--tint">
    <div class="container grid grid--2">
        <article class="card"><h3>Visi</h3><p>Menjadi mitra energi terbarukan terpercaya yang mempercepat transisi Indonesia menuju energi bersih.</p></article>
        <article class="card">
            <h3>Misi</h3>
            <ul class="ticks">
                <li>Menyediakan solusi energi surya berkualitas dan terjangkau.</li>
                <li>Mendorong efisiensi energi di setiap sektor.</li>
                <li>Mengembangkan talenta lokal di bidang energi terbarukan.</li>
            </ul>
        </article>
    </div>
</section>

<section class="stats">
    <div class="container grid grid--4">
        <div><strong>2015</strong><span>Tahun berdiri</span></div>
        <div><strong>350+</strong><span>Proyek selesai</span></div>
        <div><strong>25 MWp</strong><span>Kapasitas terpasang</span></div>
        <div><strong>18.000 ton</strong><span>CO₂ dihindari per tahun</span></div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section__head">
            <span class="eyebrow eyebrow--dark">Tim Kami</span>
            <h2>Orang-orang di Balik Layar</h2>
        </div>
        <div class="grid grid--3">
            @foreach ([
                ['Andi Prasetyo', 'Direktur Utama', 'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=1200&q=80'],
                ['Maya Kusumawati', 'Kepala Teknik', 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=1200&q=80'],
                ['Rizky Hidayat', 'Manajer Proyek', 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=1200&q=80'],
            ] as [$nama, $jabatan, $foto])
                <article class="card card--center team">
                    <img src="{{ $foto }}" alt="Foto {{ $nama }}" loading="lazy">
                    <h3>{{ $nama }}</h3>
                    <p>{{ $jabatan }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="section section--tint">
    <div class="container">
        <div class="section__head">
            <span class="eyebrow eyebrow--dark">Nilai Perusahaan</span>
            <h2>Yang Kami Pegang Teguh</h2>
        </div>
        <div class="grid grid--4">
            <article class="card card--center"><div class="icon">🌱</div><h3>Berkelanjutan</h3><p>Setiap keputusan mempertimbangkan dampak bagi bumi.</p></article>
            <article class="card card--center"><div class="icon">🤝</div><h3>Integritas</h3><p>Jujur dalam proposal, harga, dan hasil.</p></article>
            <article class="card card--center"><div class="icon">💡</div><h3>Inovasi</h3><p>Terus mengadopsi teknologi energi terbaru.</p></article>
            <article class="card card--center"><div class="icon">⭐</div><h3>Kualitas</h3><p>Standar tinggi pada material dan pemasangan.</p></article>
        </div>
    </div>
</section>
@endsection
