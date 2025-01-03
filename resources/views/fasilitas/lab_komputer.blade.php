@extends('layouts.app')

@section('title', 'Labkom')

@section('css')
<link rel="stylesheet" href="{{ asset('css/fasilitas.css') }}">
@endsection

@section('content')
<!-- Hero Section -->
<!-- struktur organisasi -->
<div class="container struktur p-4 rounded">
    <div class="text-center my-3 mb-5">
        <hr class="w-50 d-inline-block align-middle me-2">
        <h2 class="text-center">Lab komputer</h2>
        <!-- fitur breadcrumb  -->
        <nav class="d-flex align-item-center justify-content-center"
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../home.html" class="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lab komputer</li>
            </ol>
        </nav>
        <hr class="w-50 d-inline-block align-middle me-2">
    </div>
    <!-- akhir fitur breadcrumb -->
<!-- fitur Modal pada boostrap untuk fitur kontak pada navbar-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="height: 80vh; position: relative;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Hubungi Admin</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Silakan hubungi admin untuk bantuan lebih lanjut!</p>
                </div>
                <div class="modal-footer position-absolute bottom-0 w-100">
                    <div class="container-fluid">
                        <form action="" method="POST" autocomplete="off">
                            <div class="input-group">
                                <input class="form-control" type="search" placeholder="Ketik pesan di sini..."
                                    aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- akhir fitur Modal pada boostrap untuk fitur kontak pada navbar  -->

<!-- Floating Chat dan tooltips -->
<a href="#" class="btn btn-primary btn-lg rounded-circle position-fixed bottom-0 end-0 m-4 shadow"
    data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-bs-placement="top" title="Hubungi Admin" style="z-index: 1050;">
    <i class="bi bi-chat-dots-fill"></i>
</a>
<!-- akhir Floating Chat dan tooltips -->

<!-- content labkom -->
<div class="container mesjid mt-5">
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card border border-0">
                <div class="card-body">
                    <p class="card-text">Sekolah Tinggi Teknologi Cipasung memiliki beberapa fasilitas laboratorium,
                        salah satunya adalah laboratorium komputer yang didesain dengan ruangan yang nyaman dan
                        kondusif. Laboratorium ini dilengkapi dengan fasilitas penunjang seperti AC, proyektor, dan
                        koneksi internet yang stabil untuk mendukung kelancaran proses belajar mengajar. Komputer
                        yang tersedia memiliki spesifikasi tinggi, sehingga mampu memenuhi kebutuhan praktikum
                        mahasiswa, seperti pengolahan data, pemrograman, desain grafis, hingga simulasi teknik.
                        Selain itu, laboratorium ini juga sering digunakan untuk pelatihan, seminar, dan kegiatan
                        lainnya yang berhubungan dengan teknologi informasi. Fasilitas ini diharapkan dapat
                        memberikan pengalaman belajar yang optimal bagi para mahasiswa dan dosen.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card border border-0">
                <div class="card-body">
                    <img src="../img/lab.jpeg" class="img-fluid" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- akhir content lab kom -->



@endsection