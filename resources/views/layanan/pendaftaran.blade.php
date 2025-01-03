@extends('layouts.app')

@section('title', 'Pendaftaran')

@section('css')
<link rel="stylesheet" href="{{ asset('css/fasilitas.css') }}">
@endsection

@section('content')
<!-- Hero Section -->
<!-- struktur organisasi -->
<div class="container struktur p-4 rounded">
    <div class="text-center my-3 mb-5">
        <hr class="w-50 d-inline-block align-middle me-2">
        <h2 class="text-center">Pendaftaran</h2>
        <!-- fitur breadcrumb  -->
        <nav class="d-flex align-item-center justify-content-center"
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../home.html" class="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pendaftaran</li>
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



<!-- content Pendaftaran -->
<div class="container">
    <div class="container mt-5 w-50 border rounded border-1 border-black p-5 bg-white">
        <hr class="w-25 d-inline-block align-middle me-2">
        <span class=" fw-bold mb-5">Pendaftaran Mahasiswa</span>
        <hr class="w-25 d-inline-block align-middle ms-2">
        <form action="{{ route('layanan') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="mb-3 col-md-6">
        <label for="nama_depan" class="form-label">Nama Depan</label>
        <input type="text" class="form-control" id="nama_depan" name="nama_depan" placeholder="Nama Depan" required>
    </div>
    <div class="mb-3 col-md-6">
        <label for="nama_belakang" class="form-label">Nama Belakang</label>
        <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" placeholder="Nama Belakang" required>
    </div>
    <div class="mb-3 col-md-6">
        <label for="no_hp" class="form-label">Nomor HP</label>
        <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan Nomor HP" required>
    </div>
    <div class="mb-3 col-md-6">
        <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
        <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Masukkan Asal Sekolah" required>
    </div>
    <div class="mb-3 col-md-6">
        <label for="poto_ktp" class="form-label">Poto KTP</label>
        <input type="file" class="form-control" id="poto_ktp" name="poto_ktp" required>
    </div>
    <div class="mb-3 col-md-6">
        <label for="poto_kk" class="form-label">Poto KK</label>
        <input type="file" class="form-control" id="poto_kk" name="poto_kk" required>
    </div>
    <div class="mb-3">
        <label for="jurusan" class="form-label">Jurusan</label>
        <select class="form-select" id="jurusan" name="jurusan" required>
            <option value="" disabled selected>Pilih Jurusan</option>
            <option value="Informatika">Informatika</option>
            <option value="Industri">Industri</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary w-100" name="submit">Daftar</button>
</form>

    </div>

</div>

<!-- akhir content Pendaftaran -->



@endsection