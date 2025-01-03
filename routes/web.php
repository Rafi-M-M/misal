<?php
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('home', function () {
    return view('home');
});

Route::get('/profil/organisasi', function () {
    return view('profil.organisasi');
});
Route::get('/profil/akreditasi', function () {
    return view('profil.akreditasi');
});
Route::get('/profil/status', function () {
    return view('profil.status');
});
Route::get('/fasilitas/lab_komputer', function () {
    return view('fasilitas.lab_komputer');
});
Route::get('/fasilitas/mesjid', function () {
    return view('fasilitas.mesjid');
});
Route::get('/fasilitas/perpustakaan', function () {
    return view('fasilitas.perpustakaan');
});
Route::get('/fasilitas/sarana_olahraga', function () {
    return view('fasilitas.sarana_olahraga');
});
Route::get('/fasilitas/aula', function () {
    return view('fasilitas.aula');
});
Route::get('/layanan/pendaftaran', function () {
    return view('layanan.pendaftaran');
});

Route::post('/layanan', [PendaftaranController::class, 'store'])->name('layanan');
