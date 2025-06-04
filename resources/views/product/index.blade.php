@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">Produk Kami</h2>
    <div class="row">
        @forelse ($products as $product)
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <span class="badge bg-primary mb-2">
                        {{ $product->category->name ?? 'Kategori' }}
                    </span>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text fw-bold">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>
        @empty
        <p class="text-center">Belum ada produk tersedia.</p>
        @endforelse
    </div>

    <div class="d-flex justify-content-center">
        {{ $products->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
