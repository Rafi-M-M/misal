@extends('layouts.app')

@section('title', 'akreditasi')

@section('css')
<link rel="stylesheet" href="{{ asset('css/fasilitas.css') }}">
@endsection

@section('content')
<!-- Hero Section -->
<!-- struktur organisasi -->
<div class="container struktur p-4 rounded">
    <div class="text-center my-3 mb-5">
        <hr class="w-50 d-inline-block align-middle me-2">
        <h2 class="text-center">Sarana Olahraga</h2>
        <!-- fitur breadcrumb  -->
        <nav class="d-flex align-item-center justify-content-center"
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../home.html" class="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sarana Olahraga</li>
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


<!-- content Sarana Olahraga -->
<div class="container mt-5">
    <p class="fst-italic">“Didalam tubuh yang sehat, terdapat jiwa yang kuat”</p>
    <p style="text-align: justify;">Peribahasa tersebut biasa kita dengar untuk menggambarkan sangat pentingnya
        olahraga. Maka dari itu Sekolah
        Tinggi Teknologi Cipassung menyediakan berbagai sarana olahraga yang dapat dimanfaatkan oleh mahasiswa,
        dosen maupun staff Sekolah Tinggi Teknologi Cipasung untuk menyalurkan hobby sekaligus menjaga kebugarannya
        berupa <span class="fw-bold">Lapangan Bola Voli, GOR Badminton dan Lapangan Futsal</span></p>

    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body sarana_olahraga">
                        <h5 class="card-title mt-3 mb-5">Bola Voli</h5>
                        <img src="../img/sarana.jpeg" alt="" class="w-100" srcset="">
                        <p class="card-text mt-5">Sekolah Tinggi Teknologi Cipasung menyediakan fasilitas lapangan
                            bola
                            voli yang dapat dimanfaatkan oleh mahasiswa dan dosen untuk berbagai aktivitas olahraga.
                            Lapangan ini dirancang dengan standar yang baik, dilengkapi dengan permukaan yang rata
                            dan net berkualitas, sehingga mendukung kenyamanan saat bermain. Lokasinya yang
                            strategis di area kampus membuat lapangan ini mudah diakses oleh seluruh civitas
                            akademika. Selain digunakan untuk kegiatan olahraga rutin, lapangan ini juga sering
                            menjadi tempat penyelenggaraan turnamen antar mahasiswa, baik dalam lingkup internal
                            maupun eksternal. Fasilitas ini bertujuan untuk mendorong gaya hidup sehat, kerja sama
                            tim, dan pengembangan potensi di bidang olahraga.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body sarana_olahraga">
                        <h5 class="card-title mt-3 mb-5">GOR Futsal</h5>
                        <img src="../img/gor_putsal.jpeg" alt="" class="w-100" srcset="">
                        <p class="card-text mt-5">Sekolah Tinggi Teknologi Cipasung memiliki GOR Futsal yang menjadi
                            salah satu fasilitas olahraga unggulan di kampus. GOR ini dirancang dengan standar
                            kualitas tinggi, memiliki lantai yang aman dan nyaman untuk bermain, serta dilengkapi
                            dengan pencahayaan yang memadai sehingga dapat digunakan pada siang maupun malam hari.
                            GOR Futsal sering digunakan untuk aktivitas olahraga rutin, kompetisi futsal antar
                            mahasiswa, maupun acara olahraga lainnya. Selain itu, fasilitas ini juga mendukung
                            pengembangan bakat mahasiswa di bidang olahraga, menciptakan suasana yang kondusif untuk
                            membangun kerja sama tim, semangat sportivitas, dan gaya hidup sehat di kalangan civitas
                            akademika.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0 mt-5">
                <div class="card">
                    <div class="card-body sarana_olahraga">
                        <h5 class="card-title mt-3 mb-5">GOR Badminton</h5>
                        <img src="../img/gor_batminton.jpg" alt="" class="w-100" srcset="">
                        <p class="card-text mt-5">Sekolah Tinggi Teknologi Cipasung menyediakan GOR Badminton yang
                            menjadi fasilitas olahraga favorit bagi mahasiswa dan dosen. GOR ini dirancang khusus
                            dengan lapangan berstandar internasional, dilengkapi lantai yang aman dan pencahayaan
                            optimal untuk mendukung kenyamanan saat bermain. GOR Badminton sering digunakan untuk
                            latihan rutin, turnamen antar mahasiswa, dan kegiatan olahraga lainnya. Fasilitas ini
                            bertujuan untuk mendukung pengembangan minat dan bakat di bidang bulu tangkis, sekaligus
                            menjadi sarana menjaga kesehatan dan kebugaran. Dengan suasana yang nyaman dan kondusif,
                            GOR Badminton mendorong semangat kompetitif, kerja sama tim, serta menjalin kebersamaan
                            di antara civitas akademika kampus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- akhir content Sarana Olahraga -->



@endsection