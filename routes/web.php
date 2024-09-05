 <?php

use Illuminate\Support\Facades\Route;

Route::get('halo', function () {
    return 'halo selamat datang  saya rezezi axcel dari smkn 21';
});

Route::get('haloblog', function () {
    return view('blog');
});

Route::get('profil', function () {
    return ('');
});

Route::get('profil', function () {
    return 'Nama: Rezezi Axcel<br>' .
           'Tempat Lahir: Jakarta<br>' .
           'Tanggal Lahir: 1-november-2007<br>' .
           'Alamat: Jln lagoa - tanjung priok<br>' .
           'No HP: 0878-7825-4877<br>';
});

Route::get('produk', function () {
    return 'produk:1<br>' .
           ' merk: store home <br>'.
           'Stok: 50 unit<br>' .
           'Harga Satuan: Rp 1.000.000';
});

Route::get('kontak', function () {
    return 'Nama: Rezezi Axcel<br>' .
           'Website: rezezi.example.com<br>' .
           'YouTube: axcelrezezi.youtube.com/example<br>' .
           'Instagram: axcel-sec.instagram.com/example<br>' .
           'Email: axcelrezezi@example.com<br>' .
           'No HP: 0878-7825-4877';
});

Route::get('vhome', function () {
    return view('home');
});

Route::get('vprofil', function () {
    return view('profil');
});

Route::get('vproduk', function () {
    return view('produk');
});

Route::get('vkontak', function () {
    return view('kontak');
});






