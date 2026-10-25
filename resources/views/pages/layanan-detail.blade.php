@extends('app')

@section('title', $service['title'])

@section('content')
<section class="page-hero">
    <div class="container">
        <p class="crumb"><a href="{{ route('services') }}">Layanan</a> / {{ $service['title'] }}</p>
        <h1>{{ $service['title'] }}</h1>
    </div>
</section>

<section class="section">
    <div class="container grid grid--2 grid--center">
        <div>
            <h2>Gambaran Layanan</h2>
            <p>{{ $service['description'] }}</p>
            <div class="btn-group"><a href="{{ route('contact') }}" class="btn btn--amber">Minta Penawaran</a></div>
        </div>
        <img class="rounded" src="{{ $service['image'] }}" alt="{{ $service['title'] }}">
    </div>
</section>

<section class="section section--tint">
    <div class="container grid grid--2">
        <article class="card">
            <h3>Fitur Layanan</h3>
            <ul class="ticks">@foreach ($service['features'] as $f)<li>{{ $f }}</li>@endforeach</ul>
        </article>
        <article class="card">
            <h3>Manfaat untuk Anda</h3>
            <ul class="ticks">@foreach ($service['benefits'] as $b)<li>{{ $b }}</li>@endforeach</ul>
        </article>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section__head"><h2>Layanan Lainnya</h2></div>
        <div class="grid grid--2">
            @foreach ($others as $otherSlug => $other)
                <article class="card">
                    <h3>{{ $other['title'] }}</h3>
                    <p>{{ $other['short'] }}</p>
                    <a href="{{ route('service.detail', ['slug' => $otherSlug]) }}" class="link">Lihat detail →</a>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection
