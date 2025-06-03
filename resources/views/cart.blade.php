@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4"><i class="bi bi-cart3 me-2"></i>Keranjang Belanja</h2>

    {{-- Card list produk di keranjang --}}
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-2">
                <img src="https://source.unsplash.com/200x150/?bouquet" class="img-fluid rounded-start" alt="Bouquet Mawar">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title">Bouquet Mawar Merah</h5>
                    <p class="card-text mb-1">Harga: Rp 150.000</p>
                    <p class="card-text mb-1">Quantity: 2</p>
                    <p class="card-text"><strong>Total: Rp 300.000</strong></p>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-center">
                <div class="d-flex flex-column gap-2">
                    <button class="btn btn-outline-secondary btn-sm">Update Qty</button>
                    <button class="btn btn-outline-danger btn-sm">Hapus</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Produk lain (dummy) --}}
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-2">
                <img src="https://source.unsplash.com/200x150/?flowerbox" class="img-fluid rounded-start" alt="Flower Box">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title">Luxury Flower Box</h5>
                    <p class="card-text mb-1">Harga: Rp 250.000</p>
                    <p class="card-text mb-1">Quantity: 1</p>
                    <p class="card-text"><strong>Total: Rp 250.000</strong></p>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-center">
                <div class="d-flex flex-column gap-2">
                    <button class="btn btn-outline-secondary btn-sm">Update Qty</button>
                    <button class="btn btn-outline-danger btn-sm">Hapus</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Ringkasan total belanja --}}
    <div class="card bg-light p-4 mb-4">
        <h5>Total Belanja: <strong>Rp 550.000</strong></h5>
    </div>

    {{-- Tombol Bayar --}}
    <div class="text-end">
        <a href="#" class="btn btn-success btn-lg">Bayar Sekarang</a>
    </div>
</div>
@endsection
