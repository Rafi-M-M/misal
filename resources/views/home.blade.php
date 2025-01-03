@extends('layouts.app')

@section('title', 'Home')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
<!-- Hero Section -->
<!-- Hero Section -->

<div class="container-fluid p-0 mt-5">
    <div class="hero-card mt-5 w-100">
        <img src="img/latar.jpg" alt="Background Image" class="d-block w-100 full-width-image">
        <div class="hero-overlay">

        </div>
    </div>
</div>
<!-- End of Hero Section -->

<!-- fitur nav&tabs -->
<ul class="nav nav-underline mb-3 mt-5 container" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active cursor-pointer" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
            role="tab" aria-controls="pills-home" aria-selected="true">INFORMATIKA</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" role="tab"
            aria-controls="pills-profile" aria-selected="false">INDUSTRI</a>
    </li>
</ul>

<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
        tabindex="0">
        <div class="container px-4 text-center">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-3">
                        <img src="{{ asset('img/wisuda-5.jpg') }}" class="w-100 img-fluid" alt="" srcset="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam, eum!</div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
        <div class="container px-4 text-center">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-3">
                        <img src="{{ asset('img/wisuda-5.jpg') }}" class="w-100 img-fluid" alt="" srcset="">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam, eum!</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- akhir fitur nav&tabs -->

<!-- berita dan kegiatan -->
<div class="container mt-5">
    <div class="text-center my-3 mb-5">
        <hr class="w-25 d-inline-block align-middle me-2">
        <span class="fs-2 fw-bold mb-5">Kegiatan</span>
        <hr class="w-25 d-inline-block align-middle ms-2">
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
                <img src="img/lab.jpeg" class="card-img-top hover-zoom" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="img/mesjid.jpeg" class="card-img-top hover-zoom" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="img/sarana.jpeg" class="card-img-top hover-zoom" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional
                        content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="img/status.jpeg" class="card-img-top hover-zoom" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center my-3 mb-5">
        <hr class="w-25 d-inline-block align-middle me-2">
        <span class="fs-2 fw-bold mb-5">Berita</span>
        <hr class="w-25 d-inline-block align-middle ms-2">
    </div>
</div>
<!-- akhir berita dan kegiatan -->

<!-- Floating Chat dan tooltips -->
<a href="#" class="btn btn-primary btn-lg rounded-circle position-fixed bottom-0 end-0 m-4 shadow"
    data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-bs-placement="top" title="Hubungi Admin">
    <i class="bi bi-chat-dots-fill"></i>
</a>
<!-- akhir Floating Chat dan tooltips -->
<!-- Modal -->
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

<!-- akhir modal -->
@endsection