@extends('layouts.app')

@section('title', 'akreditasi')

@section('css')
<link rel="stylesheet" href="{{ asset('css/fasilitas.css') }}">
@endsection

@section('content')
<!-- Hero Section -->
<!-- struktur organisasi -->
<div class="container struktur p-1">
    <div class="text-center my-3 mb-5">
        <hr class="w-50 d-inline-block align-middle me-2">
        <h2 class="text-center">Mesjid</h2>
        <!-- fitur breadcrumb  -->
        <nav class="d-flex align-item-center justify-content-center"
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../home.html" class="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Mesjid</li>
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

<!-- content mesjid -->
<div class="container mesjid mt-5">
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card border border-0">
                <div class="card-body">
                    <p class="card-text">Salah satu fasilitas utama yang disediakan di sekitar kampus Sekolah Tinggi
                        Teknologi Cipasung adalah Masjid yang terletak di lantai 2 Gedung C. Masjid ini menjadi
                        pusat kegiatan keagamaan dan rohani bagi seluruh civitas akademika, termasuk mahasiswa,
                        dosen, dan staf kampus. Selain digunakan untuk melaksanakan ibadah sehari-hari seperti salat
                        lima waktu dan salat Jumat, masjid ini juga menjadi tempat berbagai kegiatan rohani, seperti
                        pengajian rutin yang diadakan setiap Jumat. Pengajian ini merupakan agenda wajib yang
                        bertujuan untuk memperkuat nilai-nilai spiritual, moral, dan kebersamaan di antara seluruh
                        anggota komunitas kampus. <br>
                        Masjid ini dirancang dengan suasana yang nyaman dan bersih, sehingga memberikan ketenangan
                        bagi siapa pun yang beribadah di dalamnya. Selain itu, masjid ini juga menjadi tempat
                        penyelenggaraan berbagai kegiatan keagamaan lainnya, seperti ceramah agama, pelatihan
                        keislaman, diskusi keagamaan, dan kajian kitab. Dengan fasilitas yang memadai, masjid ini
                        dapat menampung banyak jamaah sekaligus, terutama saat salat Jumat atau acara keagamaan
                        besar lainnya. <br>
                        Keberadaan masjid di kampus tidak hanya memenuhi kebutuhan spiritual, tetapi juga menjadi
                        simbol dari semangat persatuan dan harmoni di lingkungan Sekolah Tinggi Teknologi Cipasung.
                        Masjid ini adalah salah satu wujud komitmen kampus dalam mendukung pengembangan karakter
                        religius dan keilmuan mahasiswa.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card border border-0">
                <div class="card-body">
                    <img src="../img/mesjid.jpeg" class="img-fluid" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- akhir content mesjid -->



@endsection