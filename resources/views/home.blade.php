@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<div class="bg-light p-5 rounded text-center">
    <h1 class="display-4">Kirim Bunga Spesial untuk Orang Tersayang</h1>
    <p class="lead">Pesan bunga segar dan indah langsung dari toko kami!</p>
    <a href="{{ route ('product') }}" class="btn btn-primary btn-lg">Lihat Katalog</a>
</div>

<!-- Kategori -->
<h2 class="mt-5">Kategori Bunga</h2>
<div class="row text-center">
    <div class="col-md-3"><div class="card p-3">💐 Buket</div></div>
    <div class="col-md-3"><div class="card p-3">🌹 Mawar</div></div>
    <div class="col-md-3"><div class="card p-3">🏵️ Papan Ucapan</div></div>
    <div class="col-md-3"><div class="card p-3">🎁 Hadiah</div></div>
</div>

<!-- Produk Unggulan -->
<h2 class="mt-5">Produk Terbaru</h2>
<div class="row">
    @for($i = 0; $i < 4; $i++)
    <div class="col-md-3">
        <div class="card mb-4">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Bunga">
            <div class="card-body">
                <h5 class="card-title">Nama Produk</h5>
                <p class="card-text">Rp 150.000</p>
                <a href="#" class="btn btn-sm btn-success">Beli</a>
            </div>
        </div>
    </div>
    @endfor
</div>

@endsection
