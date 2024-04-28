<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', App\Livewire\login::class)->name('login')->middleware('guest');
Route::get('/register', App\Livewire\Register::class)->name('register');
Route::get('/register_pegawai', App\Livewire\RegisterPegawai::class)->name('registerPegawai');
Route::get('/register_siswa', App\Livewire\RegisterSiswa::class)->name('registerSiswa');
Route::get('/register_guru', App\Livewire\RegisterGuru::class)->name('registerGuru');
Route::get('/register_kepsek', App\Livewire\RegisterKepalaSekolah::class)->name('registerKepalaSekolah');
//Route::get('/logout', App\Http\Controllers\LogoutController::class)->name('logout')->middleware('auth');

Route::prefix('admin')->middleware('auth:web')->group(function () {

    Route::get('/', App\Livewire\Dashboard\Index::class)->name('dashboard');
    Route::get('/profile', App\Livewire\Profile::class)->name('profile');

    // Admin-Siswa
    Route::get('/daftar_siswa', App\Livewire\Dashboard\Siswa\DaftarSiswa::class)->name('daftarSiswa');
    Route::get('/presensi_siswa', App\Livewire\Dashboard\Siswa\PresensiSiswa::class)->name('presensiSiswa');
    Route::get('/rekap_siswa', App\Livewire\Dashboard\Siswa\RekapSiswa::class)->name('rekapSiswa');
    Route::get('/detail_siswa', App\Livewire\Dashboard\Siswa\DetailSiswa::class)->name('detailSiswa');

    // Guru
    Route::get('/data_guru', App\Livewire\Dashboard\Guru\DaftarGuru::class)->name('dataGuru');
    Route::get('/rekap_guru', App\Livewire\Dashboard\Guru\RekapGuru::class)->name('rekapGuru');
    Route::get('/detail_guru', App\Livewire\Dashboard\Guru\DetailGuru::class)->name('detaiGuru');

    //Pegawai
    Route::get('/daftar_pegawai', App\Livewire\Dashboard\Pegawai\DaftarPegawai::class)->name('daftarPegawai');
    Route::get('/rekap_pegawai', App\Livewire\Dashboard\Pegawai\RekapPegawai::class)->name('rekapPegawai');
});

Route::prefix('guru')->middleware('auth:guru, ')->group(function () {
    Route::get('/', App\Livewire\DashboardGuru\Index::class)->name('dashboardGuru');
    Route::get('/rekap_guru', App\Livewire\DashboardGuru\Guru\RekapGuru::class)->name('guruRekapGuru');
    Route::get('/presensi_siswa', App\Livewire\DashboardGuru\Siswa\PresensiSiswa::class)->name('guruPresensiSiswa');
    Route::get('/rekap_siswa', App\Livewire\DashboardGuru\Siswa\RekapSiswa::class);
    Route::get('/profile', App\Livewire\DashboardGuru\Profile::class);
});
