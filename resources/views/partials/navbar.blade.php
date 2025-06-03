<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">🌸 TokoBunga</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('product') }}">Produk</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Kontak</a></li>
                <li class="nav-item"><a class="nav-link btn btn-outline-primary" href="#">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
