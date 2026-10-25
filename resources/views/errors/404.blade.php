@extends('app')

@section('title', '404 - Halaman Tidak Ditemukan')

@section('content')
<section class="notfound">
    <div class="container">
        <div class="notfound__code">404</div>
        <h1>Halaman Tidak Ditemukan</h1>
        <p>Maaf, halaman yang Anda cari tidak ada atau sudah dipindahkan.</p>
        <a href="{{ route('home') }}" class="btn btn--amber">Kembali ke Beranda</a>
    </div>
</section>
@endsection
