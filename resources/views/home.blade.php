@extends('layouts.main')

@section('title')
  <title>Home - {{ config('app.name') }}</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('container')

<style>
  #toast-container {
  top: 75px; /* Sesuaikan dengan nilai yang sesuai untuk menggeser toast ke bawah */
  opacity: 1;
}
</style>

<head>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<div class="row">
  <div class="col-md-12">
    <div class="position-relative">
      <img src="img/nusa1.jpg" class="img-fluid" alt="Gambar" style="max-height: 450px; width: 100%; filter: brightness(45%);">
      <div class="text-center position-absolute top-50 start-50 translate-middle">
        <h5 class="text-white">Aplikasi Informasi Akademik</h5>
        <h5 class="text-white">SMKN 1 PURWOSARI</h5>
        <p class="text-white">Membangun Generasi Unggul melalui Pendidikan Berkualitas<br>sekaligus Mendidik serta Mempersiapkan Siswa untuk Meraih Kesuksesan</p> <br>
        <button type="button" class="btn btn btn-danger tombol"><a href="#data" style="text-decoration: none; color: #FFF;">Mulai Jelajah</a></button>
      </div>
    </div>
  </div>
</div> <br> <br>

<h2 class="text-center"><b>Tentang Sekolah</b></h2>
<hr class="mx-auto" style="width: 22%; border-width: 2px;">
<div class="container my-5">
  <div class="p-4 text-center bg-body-secondary rounded-3">
    <img src="img/logosmk.png" alt="Smkn 1 Purwosari" class="bi mt-4 mb-3" width="100" height="100">
    <h1 class="text-body-emphasis">SMKN 1 PURWOSARI</h1>
    <p class="col-lg-8 mx-auto fs-5 text-muted">
    SMKN 1 Purwosari adalah lembaga pendidikan kejuruan yang berkomitmen untuk memberikan pengalaman belajar yang unggul dan relevan dengan dunia industri. Melalui pendekatan kurikulum...
    </p>
    <div class="d-inline-flex gap-2 mb-5">
      <a href="{{ route('about') }}" class="btn btn-danger tombol">Read More...</a>
    </div>
  </div>
</div>

<section id="data">
<h2 class="text-center"><b>Data Siswa</b></h2>
<hr class="mx-auto" style="width: 12%; border-width: 2px;">
<hr class="mx-auto" style="width: 6%; border-width: 2px;"> <br>
<div class="d-flex justify-content-center">
@foreach ($grades as $key => $data)
  
  <div class="card mx-4" style="width: 18rem;">
    <img src="{{ asset('fotosiswa/'.$data->foto) }}" class="card-img-top" alt="gambar">
    <div class="card-body">
      <h5 class="card-title">{{ $data->nama }}</h5>
      <p class="card-text">Siswa ini berjurusan <b>{{ $data->jurusan }}</b> di SMKN 1 Purwosari dan memiliki nilai akhir <b>{{ $data->nilai }}</b></p>
      <a href="{{ route('laporan') }}" class="btn btn-primary">Show More</a>
    </div>
  </div>
  @endforeach
</div> <br> <br>
</section>

<h2 class="text-center"><b>Berita Terbaru</b></h2>
<hr class="mx-auto" style="width: 18%; border-width: 2px;"> <br>
<div class="card mb-3 mx-auto" style="width: 90%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/uaslara.jpg" class="img-fluid rounded-start w-100" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Perubahan Jadwal Ujian Akhir Semester</h5>
        <p class="card-text">Kami senang mengumumkan bahwa jadwal mata pelajaran untuk tahun ajaran 2023/2024 sudah tersedia di website sekolah. Dengan akses mudah ke jadwal ini, siswa dapat merencanakan waktu belajar dan mengatur kegiatan sehari-hari dengan lebih baik. Pastikan untuk memeriksa jadwal mata pelajaranmu secara berkala untuk tetap up-to-date dengan setiap perubahan.
        </p>
        <a href="#" class="btn btn-danger">Baca Selengkapnya...</a>
    </div>
       </div>
    </div>
</div>
<div class="card mb-4 mx-auto" style="width: 90%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/jadwallara.png" class="img-fluid rounded-start w-100" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Cek Jadwal Mata Pelajaran Tahun 2023/2024</h5>
        <p class="card-text">Perhatian, semua siswa! Terjadi perubahan pada jadwal ujian akhir semester. Ujian yang sebelumnya dijadwalkan akan diadakan pada tanggal 10-15 Juni kini mengalami perubahan. Kami mohon agar semua siswa memeriksa jadwal ujian terbaru yang sudah diunggah di website sekolah. Pastikan kamu sudah menyesuaikan rencana belajar dan persiapanmu dengan jadwal yang baru. Terima kasih atas perhatiannya.
        </p>
        <a href="#" class="btn btn-danger">Baca Selengkapnya...</a>
    </div>
       </div>
    </div>
</div> <br>

@include('partials.footer')

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
      @if (Session::has('success'))
      toastr.options = {
          "positionClass": "toast-top-right", // Atur posisi ke kanan atas
      };
      toastr.success("{{ Session::get('success') }}");
      @endif
  </script>

@endsection