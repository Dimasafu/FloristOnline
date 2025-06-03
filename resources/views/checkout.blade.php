@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4"><i class="bi bi-credit-card-fill me-2"></i>Checkout</h2>

    {{-- Informasi Pengiriman --}}
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Informasi Pengiriman</h5>
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Penerima</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan nama penerima">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Pengiriman</label>
                    <textarea class="form-control" id="alamat" rows="3" placeholder="Alamat lengkap"></textarea>
                </div>
                <div class="mb-3">
                    <label for="telp" class="form-label">No. Telepon</label>
                    <input type="text" class="form-control" id="telp" placeholder="08xxxxxxxxxx">
                </div>
            </form>
        </div>
    </div>

    {{-- Ringkasan Belanja --}}
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Ringkasan Belanja</h5>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between">
                    <span>Bouquet Mawar Merah x2</span>
                    <strong>Rp 300.000</strong>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Luxury Flower Box x1</span>
                    <strong>Rp 250.000</strong>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span><strong>Total</strong></span>
                    <strong>Rp 550.000</strong>
                </li>
            </ul>
        </div>
    </div>

    {{-- Tombol Konfirmasi --}}
    <div class="text-end">
        <button class="btn btn-success btn-lg">Konfirmasi & Bayar</button>
    </div>
</div>
@endsection
