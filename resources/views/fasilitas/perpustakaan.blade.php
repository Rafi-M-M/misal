@extends('layouts.app')

@section('title', 'Perpustakaan')

@section('css')
<link rel="stylesheet" href="{{ asset('css/fasilitas.css') }}">
@endsection

@section('content')
<!-- Hero Section -->
<!-- struktur organisasi -->
<div class="container struktur p-4 rounded">
    <div class="text-center my-3 mb-5">
        <hr class="w-50 d-inline-block align-middle me-2">
        <h2 class="text-center">Perpustakaan</h2>
        <!-- fitur breadcrumb  -->
        <nav class="d-flex align-item-center justify-content-center"
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../home.html" class="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Perpustakaan</li>
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
    data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-bs-placement="top" title="Hubungi Admin">
    <i class="bi bi-chat-dots-fill"></i>
</a>
<!-- akhir Floating Chat dan tooltips -->


<!-- content Sarana perpustakaan -->
<div class="container text-center mt-5">
    <div class="row gx-5">
        <div class="col-sm-6">
            <div class="p-3"><img src="../img/perpustakaan1.jpeg" alt="" class="img-fluid"></div>
        </div>
        <div class="col-sm-6">
            <div class="p-3"><img src="../img/perpustakaan2.jpeg" alt="" class="img-fluid"></div>
        </div>
        <p style="text-align: justify;">Salah satu fasilitas pendukung pembelajaran di Kampus Sekolah Tinggi
            Teknologi Cipasung adalah
            perpustakaan. Saat ini, perpustakaan Sekolah Tinggi Teknologi Cipasung telah memiliki jumlah
            koleksi buku yang cukup lengkap dari berbagai penerbit dengan judul buku yang relevan dengan
            program studi yang ada di Sekolah Tinggi Teknologi Cipasung yaitu Teknik Industri, Informatika.
            Perpustakaan Sekolah Tinggi Teknologi Cipasung juga dilengkapi dengan Sistem Informasi
            Perpustakaan yang bertujuan untuk mempermudah petugas perpustakaan dalam mengelola suatu
            perpustakaan. Sistem tersebut mengelola data transaksi peminjaman buku dan pengembalian buku
            sehingga pelacakan buku dan ketersediaan buku yang ada dapat dengan mudah diidentifikasi. Sistem
            Informasi Perpustakaan dilengkapi dengan konsol sebagai client yang diperuntukkan bagi mahasiswa
            atau dosen untuk mencari lokasi buku disimpan. <br><br> Selain dilengkapi Sistem Informasi, Perpustakaan
            Sekolah Tinggi
            Teknologi Cipasung juga memiliki
            hotspot area yang dapat digunakan mahasiswa atau dosen untuk mengakses internet yang dapat
            memenuhi kebutuhan civitas akademika untuk mencari berbagai referensi tambahan.</p>
    </div>
</div>

<!-- akhir content perpustakaan -->



@endsection