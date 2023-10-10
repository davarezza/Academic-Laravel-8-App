@extends('layouts.main')

@section('title')
<title>Home - {{ config('app.name') }}</title>
@endsection

@section('container')
<div class="row">
  <div class="col-md-12">
    <div class="position-relative">
      <img src="img/nusa1.jpg" class="img-fluid" alt="Gambar" style="max-height: 450px; width: 100%; filter: brightness(45%);">
      <div class="text-center position-absolute top-50 start-50 translate-middle">
        <h5 class="text-white">Aplikasi Informasi Akademik</h5>
        <h5 class="text-white">SMKN 1 PURWOSARI</h5>
        <p class="text-white">Membangun Generasi Unggul melalui Pendidikan Berkualitas<br>sekaligus Mendidik serta Mempersiapkan Siswa untuk Meraih Kesuksesan</p> <br>
        <button type="button" class="btn btn btn-danger tombol"><a href="#sekolah" style="text-decoration: none; color: #FFF;">Mulai Jelajah</a></button>
      </div>
    </div>
  </div>
</div> <br> <br>

<section id="sekolah">
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
</section>

<h2 class="text-center"><b>Keunggulan</b></h2>
<hr class="mx-auto" style="width: 12%; border-width: 2px;">
<hr class="mx-auto" style="width: 6%; border-width: 2px;"> <br>
<div class="d-flex justify-content-center">
  <div class="card mx-4" style="width: 18rem;">
    <img src="img/kurlara.webp" class="card-img-top" style="max-width: 100%;" alt="gambar">
    <div class="card-body">
      <h5 class="card-title">Kurikulum berstandar Industri</h5>
      <p class="card-text">Kurikulum SMKN 1 Purwosari disusun dengan berlandaskan pada perkembangan teknologi dan tren terkini di dunia industri...</p>
      <a href="#" class="btn btn-primary">Read More...</a>
    </div>
  </div>
  <div class="card mx-4" style="width: 18rem;">
    <img src="img/prak.jpg" class="card-img-top" style="max-width: 100%;" alt="gambar">
    <div class="card-body">
      <h5 class="card-title">Praktek Kerja Industri</h5>
      <p class="card-text">Siswa memiliki kesempatan untuk mengaplikasikan pengetahuan yang mereka peroleh di lingkungan nyata industri...</p>
      <a href="#" class="btn btn-primary">Read More...</a>
    </div>
  </div>
  <div class="card mx-4" style="width: 18rem;">
    <img src="img/fasilitaslara.jpg" class="card-img-top" style="max-width: 100%;" alt="gambar">
    <div class="card-body">
      <h5 class="card-title">Fasilitas Lengkap</h5>
      <p class="card-text">SMKN 1 Purwosari memiliki fasilitas lengkap yang mendukung proses pembelajaran dan pelatihan siswa. Mulai dari laboratorium modern, ...</p>
      <a href="#" class="btn btn-primary">Read More...</a>
    </div>
  </div>
  <div class="card mx-4" style="width: 18rem;">
    <img src="img/growthlara.jpg" class="card-img-top" style="max-width: 100%;" alt="gambar">
    <div class="card-body">
      <h5 class="card-title">Pengembangan Karakter</h5>
      <p class="card-text"> Selain fokus pada aspek akademik dan keterampilan teknis, SMKN 1 Purwosari juga memberikan perhatian khusus pada pengembangan karakter siswa...</p>
      <a href="#" class="btn btn-primary">Read More...</a>
    </div>
  </div>
</div> <br> <br>

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

@endsection