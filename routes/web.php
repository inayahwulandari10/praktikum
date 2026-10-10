<?php

use Illuminate\Support\Facades\Route;

// Profil
Route::get('/profil', function () {
    return "Nama: Inayah<br>NIM: 242520009<br>Kelas: TI A";
});

// Parameter wajib
Route::get('/profil/{nama}', function (string $nama) {
    return "Halo, {$nama}!";
});

// Parameter opsional - Kategori
Route::get('/kategori/{nama?}', function (?string $nama = 'semua') {
    return "Nama: Inayah<br>NIM: 242520009<br>Kategori: {$nama}";
});


// Lebih dari satu parameter - Kelas
Route::get('/kelas/{kode}/mahasiswa/{nim}', function (string $kode, string $nim) {
    return "Nama: Inayah<br>NIM: {$nim}<br>Kelas: {$kode}";
});

Route::get('/artikel/{id}', function (int $id) {
return "Artikel nomor {$id}";
})->whereNumber('id');
Route::get('/pengguna/{username}', function (string $username) {
return "Pengguna: {$username}";
})->whereAlpha('username');
Route::get('/kode/{kode}', function (string $kode) {
return "Kode: {$kode}";
})->where('kode', '[A-Z]{3}[0-9]{2}');




// Route::view tidak memerlukan closure
Route::view('/tentang', 'tentang')->name('tentang');

// Route kontak
Route::get('/kontak', function () {
    return view('kontak', [
        'email' => 'info@kampus.ac.id'
    ]);
})->name('kontak');


Route::prefix('admin')->name('admin.')->group(function () {
Route::get('/dashboard', fn () => 'Dashboard Admin')
->name('dashboard'); // URL: /admin/dashboard, nama: admin.dashboard

Route::get('/pengaturan', fn () => 'Pengaturan Admin')
->name('pengaturan'); // URL: /admin/pengaturan, nama: admin.pengaturan
});

Route::redirect('/beranda', '/'); // Dieksekusi bila tidak ada route yang cocok (letakkan paling bawah) Route::fallback(function () { return response('Halaman tidak ditemukan (kustom).', 404); });