@extends('app')

@section('title', 'Layanan')

@section('content')
<section class="page-hero">
    <div class="container">
        <h1>Layanan Kami</h1>
        <p>Tiga layanan utama untuk membantu Anda beralih dan menghemat energi.</p>
    </div>
</section>

<section class="section">
    <div class="container grid grid--3">
        @foreach ($services as $slug => $service)
            <article class="card card--service">
                <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" loading="lazy">
                <div class="card__body">
                    <h3>{{ $service['title'] }}</h3>
                    <p>{{ $service['description'] }}</p>
                    <a href="{{ route('service.detail', ['slug' => $slug]) }}" class="link">Lihat detail →</a>
                </div>
            </article>
        @endforeach
    </div>
</section>

<section class="cta">
    <div class="container">
        <h2>Belum yakin layanan mana yang tepat?</h2>
        <p>Ceritakan kebutuhan Anda, tim kami siap membantu.</p>
        <a href="{{ route('contact') }}" class="btn btn--amber">Hubungi Kami</a>
    </div>
</section>
@endsection
