@extends('app')

@section('title', 'Kontak')

@section('content')
<section class="page-hero">
    <div class="container">
        <h1>Hubungi Kami</h1>
        <p>Kirim pesan dan tim kami akan membalas dalam 1×24 jam kerja.</p>
    </div>
</section>

<section class="section">
    <div class="container grid grid--2">
        <div>
            <h2>Kirim Pesan</h2>

            @if (session('sukses'))
                <div class="alert alert--success" role="status">{{ session('sukses') }}</div>
            @endif

            <form method="POST" action="{{ route('contact.store') }}" class="form" novalidate>
                @csrf
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama') }}" class="@error('nama') is-invalid @enderror" required>
                @error('nama')<small class="error">{{ $message }}</small>@enderror

                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror" required>
                @error('email')<small class="error">{{ $message }}</small>@enderror

                <label for="pesan">Pesan</label>
                <textarea id="pesan" name="pesan" rows="6" class="@error('pesan') is-invalid @enderror" required>{{ old('pesan') }}</textarea>
                @error('pesan')<small class="error">{{ $message }}</small>@enderror

                <button type="submit" class="btn btn--green">Kirim Pesan</button>
            </form>
        </div>
        <aside class="card info">
            <h3>Informasi Kontak</h3>
            <p><strong>Alamat</strong><br>Jl. Jenderal Sudirman Kav. 52, Jakarta Selatan 12190</p>
            <p><strong>Email</strong><br>info@suryanusantaraenergi.co.id</p>
            <p><strong>Telepon</strong><br>(021) 5555 0123</p>
            <p><strong>Jam Kerja</strong><br>Senin–Jumat, 08.00–17.00 WIB</p>
        </aside>
    </div>
</section>
@endsection
