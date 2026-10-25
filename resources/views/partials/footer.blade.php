<footer class="footer">
    <div class="container footer__grid">
        <div>
            <a href="{{ route('home') }}" class="brand brand--light"><span class="brand__mark">☀</span><span>Surya Nusantara <strong>Energi</strong></span></a>
            <p>Mewujudkan masa depan energi bersih untuk rumah, bisnis, dan industri di seluruh Indonesia.</p>
        </div>
        <div>
            <h4>Navigasi</h4>
            <ul>
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                <li><a href="{{ route('services') }}">Layanan</a></li>
                <li><a href="{{ route('contact') }}">Kontak</a></li>
            </ul>
        </div>
        <div>
            <h4>Layanan</h4>
            <ul>
                <li><a href="{{ route('service.detail', ['slug' => 'instalasi-plts']) }}">Instalasi PLTS</a></li>
                <li><a href="{{ route('service.detail', ['slug' => 'konsultasi-energi']) }}">Konsultasi Energi</a></li>
                <li><a href="{{ route('service.detail', ['slug' => 'smart-metering']) }}">Smart Metering</a></li>
            </ul>
        </div>
        <div>
            <h4>Kontak</h4>
            <ul>
                <li>Jl. Jenderal Sudirman Kav. 52, Jakarta Selatan</li>
                <li>info@suryanusantaraenergi.co.id</li>
                <li>(021) 5555 0123</li>
            </ul>
        </div>
    </div>
    <div class="footer__bottom">© {{ date('Y') }} PT Surya Nusantara Energi. Hak cipta dilindungi.</div>
</footer>
