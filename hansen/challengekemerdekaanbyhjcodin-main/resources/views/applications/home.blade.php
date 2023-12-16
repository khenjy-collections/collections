@extends('layout.app')

@section('content')

<div class="jumbotron jumbotron-fluid bg-danger text-white  pt-5 min-vh-100 d-flex justify-center align-items-center" style="height:400px;">
    <div class="container text-center">
      <h1 class="fs-4">Selamat Datang di Challenge Kemerdekaan By HJ Codin</h1>
      <h3 class="lead fs-2">Challenge yang dibuat dalam rangka menyambut  Hari Kemerdekaan Negara Indonesia</h3>
      <p class="fs-2 fw-bold ">Ikuti Challenge dan Menangkan Saldo Shopeepay Sebesar 20.000 untuk 2 orang pemenang yang terpilih. Masing - masing Rp10.000 di Instagram dan Tiktok.</p>
      <a href="/daftar" class="border border-lg border-white py-2 px-4 text-white rounded-lg text-decoration-none">Daftarkan Challenge Anda disini!</a>
    </div>
  </div>

  <div class="container mt-2">
    <h1 class="text-center">Syarat dan Ketentuan</h1>
    <h4 class="text-center">Bagi Peserta yang ingin mengikuti challenge wajib mengikuti syarat dan ketentuan sebagai berikut!</h4>
    <ol class="d-flex justify-content-center  flex-column ms-5">
        <li>Peserta Wajib Mendaftarkan Akun di Website</li>
        <li>Peserta wajib mengikuti akun @hjcodin di Tiktok dan @hjcodin.tech di Instagram</li>
        <li>Peserta yang mengikuti wajib membuat karya dengan tema Kemerdekaan Negara Indonesia yang Ke - 78 ,</li>
        <li>Peserta wajib menggunakan warna Merah dan Putih </li>
        <li>Peserta wajib memberikan keterangan terhadap karya yang dibuat</li>
        <li>Peserta wajib mengupload karyanya di sosial media seperti Tiktok , Instagram , dll</li>
        <li>Peserta wajib memasukkan tagar sebagai berikut : #hjcodin , #hjcodinchallenge, #dirgahayu , #kemerdekaan</li>
        <li>Peserta yang mengikuti wajib tag di antara dua akun sosial media berikut .Tag Akun @hjcodin di postingan Tiktok , dan Tag Akun @hjcodin.tech di Postingan Instagram.</li>
    </ol>
  </div>

  <div class="container">
    <h2 class="text-center">Cara Menentukan Pemenang</h2>
    <h4 class="text-center">Berikut merupakan cara menentukan pemenang di challenge kemerdekaan by HJ Codin.</h4>

    <p class="fs-4">- Pemenang akan ditentukan dengan jumlah like terbanyak di postingan instagram dan tiktok.</p>
    <p class="fs-4">- Bagi Pemenang yang terpilih harus terbukti mengikuti syarat dan ketentuan di atas. Jika tidak , maka akan diambil ke like kedua terbanyak</p>


  </div>

@endsection