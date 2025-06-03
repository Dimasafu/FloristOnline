@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">Produk Kami</h2>
    <div class="row">

        {{-- Produk 1 --}}
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="https://source.unsplash.com/300x200/?flower,bouquet" class="card-img-top" alt="Bunga Mawar">
                <div class="card-body">
                    <h5 class="card-title">Bouquet Mawar Merah</h5>
                    <span class="badge bg-primary mb-2">Romantis</span>
                    <p class="card-text">Bouquet elegan berisi 12 mawar merah, cocok untuk menyatakan cinta.</p>
                </div>
            </div>
        </div>

        {{-- Produk 2 --}}
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="https://source.unsplash.com/300x200/?flower,lily" class="card-img-top" alt="Lily">
                <div class="card-body">
                    <h5 class="card-title">Lily Putih Simpati</h5>
                    <span class="badge bg-secondary mb-2">Duka Cita</span>
                    <p class="card-text">Rangkaian bunga lily putih untuk menyampaikan belasungkawa dengan elegan.</p>
                </div>
            </div>
        </div>

        {{-- Produk 3 --}}
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="https://source.unsplash.com/300x200/?sunflower" class="card-img-top" alt="Sunflower">
                <div class="card-body">
                    <h5 class="card-title">Sunshine Bouquet</h5>
                    <span class="badge bg-warning text-dark mb-2">Ucapan Selamat</span>
                    <p class="card-text">Campuran bunga matahari dan warna cerah untuk momen penuh sukacita.</p>
                </div>
            </div>
        </div>

        {{-- Produk 4 --}}
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="https://source.unsplash.com/300x200/?flowerbox" class="card-img-top" alt="Flower Box">
                <div class="card-body">
                    <h5 class="card-title">Luxury Flower Box</h5>
                    <span class="badge bg-success mb-2">Premium</span>
                    <p class="card-text">Kotak bunga eksklusif dengan mawar dan anggrek, cocok untuk hadiah spesial.</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection