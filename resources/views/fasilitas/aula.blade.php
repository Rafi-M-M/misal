@extends('layouts.app')

@section('title', 'Aula')

@section('css')
<link rel="stylesheet" href="{{ asset('css/fasilitas.css') }}">
@endsection

@section('content')
<!-- Hero Section -->
<!-- struktur organisasi -->
<div class="container struktur p-4 rounded">
    <div class="text-center my-3 mb-5">
        <hr class="w-50 d-inline-block align-middle me-2">
        <h2 class="text-center">Aula</h2>
        <!-- fitur breadcrumb  -->
        <nav class="d-flex align-item-center justify-content-center"
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../home.html" class="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Aula</li>
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

<!-- content aula -->
<div class="container mesjid mt-5">
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card border border-0">
                <div class="card-body">
                    <p class="card-text">Di Sekolah Tinggi Teknologi Cipasung juga terdapat Aula yang menjadi salah
                        satu fasilitas unggulan untuk mendukung berbagai kegiatan akademik dan non-akademik. Aula
                        ini dirancang dengan ruang yang luas, nyaman, dan dilengkapi fasilitas modern untuk
                        menunjang kelancaran acara. Selain digunakan oleh mahasiswa dan dosen untuk kegiatan seperti
                        seminar, workshop, serta pelatihan, aula ini juga sering menjadi tempat penyelenggaraan
                        acara formal kampus, seperti wisuda, pelantikan, dan diskusi panel.
                        <br>
                        Tidak hanya itu, aula ini juga dapat digunakan untuk kegiatan kemahasiswaan seperti rapat
                        organisasi, pentas seni, dan pameran. Lingkungan yang kondusif serta fasilitas pendukung
                        seperti sistem audio-visual dan pendingin ruangan menjadikan aula ini pilihan utama untuk
                        berbagai jenis acara. Keberadaan aula ini menunjukkan komitmen kampus dalam memberikan
                        sarana yang memadai guna mendukung kreativitas dan produktivitas mahasiswa, dosen, serta
                        seluruh civitas akademika.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card border border-0">
                <div class="card-body">
                    <img src="../img/aula.jpeg" class="img-fluid" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- akhir content aula -->

@endsection