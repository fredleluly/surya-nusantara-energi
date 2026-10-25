<header class="navbar">
    <div class="container navbar__inner">
        <a href="{{ route('home') }}" class="brand">
            <span class="brand__mark">☀</span>
            <span>Surya Nusantara <strong>Energi</strong></span>
        </a>
        <input type="checkbox" id="nav-toggle" class="nav-toggle" aria-label="Buka menu">
        <label for="nav-toggle" class="nav-burger" aria-hidden="true"><span></span></label>
        <nav class="nav">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Tentang Kami</a>
            <a href="{{ route('services') }}" class="{{ request()->routeIs('services', 'service.detail') ? 'active' : '' }}">Layanan</a>
            <a href="{{ route('contact') }}" class="btn btn--amber btn--sm">Kontak</a>
        </nav>
    </div>
</header>
