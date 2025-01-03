@extends('layouts.app')

@section('title', 'organisasi')

@section('css')
<link rel="stylesheet" href="{{ asset('css/fasilitas.css') }}">
@endsection

@section('content')
<!-- Hero Section -->
<!-- struktur organisasi -->
<div class="container struktur p-4 rounded">
    <div class="text-center my-3 mb-5">
        <hr class="w-50 d-inline-block align-middle me-2">
        <h2 class="text-center">Struktur Organisasi</h2>
        <!-- fitur breadcrumb  -->
        <nav class="d-flex align-item-center justify-content-center"
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../home.html" class="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Organisasi</li>
            </ol>
        </nav>
        <hr class="w-50 d-inline-block align-middle me-2">
    </div>
    <!-- akhir fitur breadcrumb -->

    <!-- fitur Modal pada boostrap untuk fitur kontak pada navbar-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ">
                    <h1 class="modal-title fs-5 text-black" id="staticBackdropLabel">Hubungi Admin</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" autocomplete="off">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-black">Nama : </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Masukan Nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-black">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Masukan Email" required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-black">No HP :</label>
                            <input type="number" class="form-control" id="exampleInputPassword1"
                                placeholder="Masukan No HP" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-black">Pesan :</label>
                            <div class="form-floating">
                                <textarea class="form-control" id="exampleInputPassword1"
                                    placeholder="Masukan Keterangan Pesan" id="floatingTextarea2" style="height: 100px"
                                    required></textarea>
                                <label for="floatingTextarea2">Comments</label>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-primary" type="submit" name="submit">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- akhir fitur Modal pada boostrap untuk fitur kontak pada navbar  -->

<!-- gambar dan isi struktur organisasi -->
<div class="container mt-5">
    <img src="../img/struktur_organisasi.PNG" class="img-fluid w-100" alt="...">

    <div class="container overflow-hidden text-center">
        <div class="row gx-5">
            <div class="col">
                <div class="text-center my-3 mb-5">
                    <hr class="w-25 d-inline-block align-middle me-2">
                    <span class="fs-2 fw-bold mb-5">Ringkasan Dari gambar di atas</span>
                    <hr class="w-25 d-inline-block align-middle ms-2">
                </div>
                <div class="p-3">
                    <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="card border border-0">
                                <div class="card-body text-start">
                                    <h5 class="card-title">Yayasan Pondok Pesantren Cipasung</h5>
                                    <p class="card-text">
                                    <ul class="list-group">
                                        <li class="list-group-item border border-0">Pembina : KH. Koko Komarudin
                                        </li>
                                        <li class="list-group-item border border-0">Pengawas : KH. Ubaidillah Ruhiat
                                        </li>
                                        <li class="list-group-item border border-0">Ketua : KH. Drs. Acep Adang
                                            Ruhiat, MSi.</li>
                                        <li class="list-group-item border border-0">Sekretaris : KH. Drs. Abdul
                                            Chobir, M.T.</li>
                                        <li class="list-group-item border border-0">Bendahara: H. Agus Syaiful
                                            Bahri, SPdI.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card border border-0">
                                <div class="card-body text-start">
                                    <h5 class="card-title">Sekolah Tinggi Teknologi Cipasung</h5>
                                    <p class="card-text">
                                    <ul class="list-group">
                                        <li class="list-group-item border border-0">Ketua : Ahmad Zamakhsyari Sidiq,
                                            M.T</li>
                                        <li class="list-group-item border border-0">Wakil Ketua I: Mamik M. Fuadi,
                                            M.T.</li>
                                        <li class="list-group-item border border-0">Wakil Ketua II : Ajeng Sabarini
                                            Muslimah, M.T</li>
                                        <li class="list-group-item border border-0">Ketua LPPM : Ahmad Said, M.Sc.
                                        </li>
                                        <li class="list-group-item border border-0">Ketua Prodi Teknik Industri:
                                            Mamik M. Fuadi, M.T.</li>
                                        <li class="list-group-item border border-0">Sekretaris Prodi Teknik Industri
                                            : Ernawati, M.T</li>
                                        <li class="list-group-item border border-0">Ketua Prodi Informatika :
                                            Mohammad Sabar Jamil, M.T.</li>
                                        <li class="list-group-item border border-0">Sekretaris Prodi Informatika :
                                            Riezan Syauqi Fanhas, M.T</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- akhir gambar dan isi struktur organisasi -->


@endsection