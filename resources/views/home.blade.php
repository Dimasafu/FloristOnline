@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<div class="bg-light p-5 rounded text-center">
    <h1 class="display-4">Kirim Bunga Spesial untuk Orang Tersayang</h1>
    <p class="lead">Pesan bunga segar dan indah langsung dari toko kami!</p>
    <a href="{{ route ('product.index') }}" class="btn btn-primary btn-lg">Lihat Katalog</a>
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
<div class="text-end mt-3">
    <a href="{{ route('product.index') }}">Lihat Produk Lain</a>
</div>
<div class="row">
    @forelse ($latestProducts as $product)
    <div class="col-md-3">
        <div class="card mb-4">
            <img src="{{ asset($product->image) }}" class="img-fluid " alt="{{ $product->name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <p class="card-text fw-bold">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                <a href="#" class="btn btn-sm btn-success">Beli</a>
            </div>
        </div>
    </div>
    @empty
    <p class="text-center">Belum ada produk tersedia.</p>
    @endforelse
</div>



@endsection
