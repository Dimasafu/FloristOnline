<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">🌸 TokoBunga</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
    <li class="nav-item"><a class="nav-link" href="{{ route('product.index') }}">Produk</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Kontak</a></li>

    @auth
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="nav-item">
            <!-- Logout Form -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="nav-link btn btn-link" type="submit">Logout</button>
            </form>
        </li>
    @endauth

    @guest
        <li class="nav-item">
            <a class="nav-link btn btn-outline-primary me-2" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn btn-outline-primary me-2" href="{{ route('register') }}">Daftar</a>
        </li>
    @endguest
</ul>

        </div>
    </div>

</nav>
