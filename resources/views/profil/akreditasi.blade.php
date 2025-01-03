@extends('layouts.app')

@section('title', 'akreditasi')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profil.css') }}">
@endsection

@section('content')
<!-- Hero Section -->
<!-- struktur organisasi -->
<div class="container struktur p-2 mb-5 rounded akreditasi">
    <div class="text-center my-3 mb-5">
        <hr class="w-50 d-inline-block align-middle me-2">
        <h2 class="text-center">Akreditasi</h2>
        <!-- fitur breadcrumb  -->
        <nav class="d-flex align-item-center justify-content-center"
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../home.html" class="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Akreditasi</li>
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
<a href="#" class="btn btn-primary btn-lg rounded-circle position-fixed bottom-0 end-0 m-4 shadow pesan_admin"
    data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-bs-placement="top" title="Hubungi Admin">
    <i class="bi bi-chat-dots-fill"></i>
</a>
<!-- akhir Floating Chat dan tooltips -->

<!-- content akreditasi -->
<div class="row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center pb-5">Akreditasi Institusi</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">kreditasi C (BAN PT No.
                    345/SK/BAN-PT/Akred/PT/XII/2018)</h6>
                <p class="card-text">Download Sertifikat dan SK Akreditasi Institusi STT Cipasung <br> <br>
                    <a href="https://drive.google.com/file/d/1Dz93vL4h584fuGtgENJYKO0AY6fuJGGk/view"
                        class="text-success text-decoration-none">Sertifikat</a> | SK Akreditasi
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center pb-5">Akreditasi Program Studi</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">S1 Teknik Industri</h6>
                <p class="card-text">Akreditasi Baik (LAM Teknik No. 0034/SK/LAM Teknik/AS/PT/VIII/2022)

                    Download Sertifikat dan SK Akreditasi Institusi STT Cipasung <br><br>

                    <a href="https://drive.google.com/file/d/1F7VuhL_Q_wAa7SsHmGykEZCCelxqmowD/view"
                        class="text-success text-decoration-none">Sertifikat & SK Akreditasi</a>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container px-4 text-center">
        <div class="row gx-5">
            <div class="col">
                <div class="p-3">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body text-start">
                            <h5 class="card-title text-center pb-5">Akreditasi Institusi</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">kreditasi C (BAN PT No.
                                345/SK/BAN-PT/Akred/PT/XII/2018)</h6>
                            <p class="card-text">Download Sertifikat dan SK Akreditasi Institusi STT Cipasung <br> <br>
                                <a href="https://drive.google.com/file/d/1Dz93vL4h584fuGtgENJYKO0AY6fuJGGk/view"
                                    class="text-success text-decoration-none">Sertifikat</a> | SK Akreditasi
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body text-start">
                            <h5 class="card-title text-center pb-5">Akreditasi Program Studi</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">S1 Teknik Industri</h6>
                            <p class="card-text">Akreditasi Baik (LAM Teknik No. 0034/SK/LAM Teknik/AS/PT/VIII/2022)

                                Download Sertifikat dan SK Akreditasi Institusi STT Cipasung <br><br>

                                <a href="https://drive.google.com/file/d/1F7VuhL_Q_wAa7SsHmGykEZCCelxqmowD/view"
                                    class="text-success text-decoration-none">Sertifikat & SK Akreditasi</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- akhir content akreditasi -->

@endsection