@extends('app')

@section('title', 'Energi Surya untuk Indonesia')

@section('content')
<section class="hero" style="background-image:linear-gradient(120deg,rgba(6,60,35,.92),rgba(6,60,35,.55)),url('https://images.unsplash.com/photo-1509391366360-2e959784a276?w=1200&q=80')">
    <div class="container hero__content">
        <span class="eyebrow">Energi terbarukan Indonesia</span>
        <h1>PT Surya Nusantara Energi</h1>
        <p class="hero__tagline">Energi bersih dari matahari, untuk masa depan yang lebih hemat dan berkelanjutan.</p>
        <div class="btn-group">
            <a href="{{ route('services') }}" class="btn btn--amber">Lihat Layanan</a>
            <a href="{{ route('contact') }}" class="btn btn--outline">Hubungi Kami</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section__head">
            <span class="eyebrow eyebrow--dark">Mengapa Kami</span>
            <h2>Keunggulan Surya Nusantara Energi</h2>
        </div>
        <div class="grid grid--4">
            <article class="card card--center"><div class="icon">🏅</div><h3>Berpengalaman</h3><p>Lebih dari 9 tahun dan ratusan proyek PLTS di seluruh Indonesia.</p></article>
            <article class="card card--center"><div class="icon">🛡</div><h3>Garansi Panjang</h3><p>Garansi performa modul hingga 25 tahun dan layanan purna jual.</p></article>
            <article class="card card--center"><div class="icon">🔧</div><h3>Teknisi Bersertifikat</h3><p>Dikerjakan tim ahli yang mengutamakan keselamatan dan kualitas.</p></article>
            <article class="card card--center"><div class="icon">💰</div><h3>Hemat Biaya</h3><p>Solusi dengan hitungan ROI yang jelas dan transparan sejak awal.</p></article>
        </div>
    </div>
</section>

<section class="section section--tint">
    <div class="container">
        <div class="section__head">
            <span class="eyebrow eyebrow--dark">Layanan Kami</span>
            <h2>Solusi Energi Terpadu</h2>
        </div>
        <div class="grid grid--3">
            @foreach ($services as $slug => $service)
                <article class="card card--service">
                    <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" loading="lazy">
                    <div class="card__body">
                        <h3>{{ $service['title'] }}</h3>
                        <p>{{ $service['short'] }}</p>
                        <a href="{{ route('service.detail', ['slug' => $slug]) }}" class="link">Pelajari selengkapnya →</a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <h2>Siap beralih ke energi surya?</h2>
        <p>Konsultasikan kebutuhan Anda dan dapatkan estimasi penghematan secara gratis.</p>
        <a href="{{ route('contact') }}" class="btn btn--amber">Hubungi Kami Sekarang</a>
    </div>
</section>
@endsection
