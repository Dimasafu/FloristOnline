@extends('layouts.app') <!-- ganti dengan layout milikmu jika berbeda -->

@section('content')
<div class="container py-5">

    {{-- SECTION 1: Sejarah Toko --}}
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h2>Tentang Kami</h2>
            <p class="lead">
                Toko bunga kami telah berdiri sejak tahun 2018 di Semarang. Berawal dari usaha keluarga kecil,
                kami tumbuh menjadi salah satu penyedia rangkaian bunga terpercaya untuk berbagai acara spesial seperti pernikahan, ulang tahun, dan lainnya.
                Kami berkomitmen untuk memberikan pelayanan terbaik dan kualitas bunga yang segar kepada setiap pelanggan.
            </p>
        </div>
        <div class="col-md-6">
            <img src="/images/toko.jpg" alt="Foto Toko" class="img-fluid rounded shadow">
        </div>
    </div>

    {{-- SECTION 2: Review Pelanggan --}}
    <div class="mb-5">
        <h2 class="text-center mb-4">Apa Kata Klien Kami</h2>
        <div class="row g-4">
            @for ($i = 1; $i <= 6; $i++)
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Client {{ $i }}</h5>
                            <p class="text-warning mb-2">
                                ★★★★☆ {{-- bisa juga gunakan loop nanti kalau dinamis --}}
                            </p>
                            <p class="card-text">Pelayanan sangat ramah dan bunga yang dikirim sangat segar. Sangat direkomendasikan!</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    {{-- SECTION 3: Carousel Logo Klien --}}
    <div class="mb-5">
        <h2 class="text-center mb-4">Klien Perusahaan Kami</h2>
        <div id="logoCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner d-flex align-items-center">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-around">
                        <img src="/images/client1.png" class="img-fluid" style="max-height: 60px;" alt="Client 1">
                        <img src="/images/client2.png" class="img-fluid" style="max-height: 60px;" alt="Client 2">
                        <img src="/images/client3.png" class="img-fluid" style="max-height: 60px;" alt="Client 3">
                        <img src="/images/client4.png" class="img-fluid" style="max-height: 60px;" alt="Client 4">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-around">
                        <img src="/images/client5.png" class="img-fluid" style="max-height: 60px;" alt="Client 5">
                        <img src="/images/client6.png" class="img-fluid" style="max-height: 60px;" alt="Client 6">
                        <img src="/images/client7.png" class="img-fluid" style="max-height: 60px;" alt="Client 7">
                        <img src="/images/client8.png" class="img-fluid" style="max-height: 60px;" alt="Client 8">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

{{-- Auto move carousel --}}
<script>
    const carousel = document.querySelector('#logoCarousel');
    const bsCarousel = new bootstrap.Carousel(carousel, {
        interval: 3000,
        ride: 'carousel'
    });
</script>
@endsection