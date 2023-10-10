@extends('layouts.main')

@section('title')
<title>About - {{ config('app.name') }}</title>
@endsection

@section('container')
<head>
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>
<div class="about">
<div class="about-img">
            <img src="{{ asset('img/nusa2.jpg') }}" alt="">
        </div>

        <div class="about-content">
            <h2 class="heading">Tentang <span>SMK NUSA</span></h2>
            <h3>SMKN 1 PURWOSARI</h3>
            <p>SMKN 1 Purwosari, sebagai lembaga pendidikan kejuruan, memiliki visi dan misi yang kuat untuk menciptakan pengalaman belajar yang unggul dan relevan dengan dunia industri. SMKN 1 Purwosari telah membuktikan diri sebagai sekolah menengah kejuruan terbaik dalam mempersiapkan siswa untuk dunia kerja. Dengan kurikulum yang cermat dan pendekatan holistik, sekolah ini memberikan pelatihan teknis yang komprehensif, didukung oleh kerjasama erat dengan industri dan penekanan pada pengembangan soft skills. Mereka juga mengajarkan nilai-nilai etika dan profesionalisme, menjadikan lulusan SMKN 1 Purwosari sebagai profesional yang lengkap, siap untuk berkontribusi dalam berbagai industri, dan memberikan dampak positif dalam pembangunan masyarakat setempat. </p>
            <a href="https://www.smkn1purwosari.sch.id/public/" class="btn" target="_blank">Visit Official School Website</a>
        </div>
    </div>
    <h2 class="text-center"><b>Tentang <span>Aplikasi</span></b></h2>
<hr class="mx-auto" style="width: 20%; border-width: 2px;">
<div class="about">
        <div class="about-content">
            <h3>Akses Informasi Akademik Secara Online</h3>
            <p>Website Aplikasi Akademik SMKN 1 Purwosari menyediakan akses mudah dan cepat ke informasi akademik bagi siswa, orang tua, dan staf sekolah. Pengguna dapat dengan mudah melihat jadwal pelajaran, nilai, presensi, dan informasi akademik lainnya secara online. Hal ini memungkinkan para pemangku kepentingan untuk terus memantau perkembangan akademik siswa secara real-time.</p>
        </div>
        <div class="about-img">
            <img src="{{ asset('img/nusa1.jpg') }}" alt="">
        </div>
    </div>
<div class="about">
    <div class="about-img">
        <img src="{{ asset('img/nusa4.jpg') }}" alt="">
    </div>
        <div class="about-content">
            <h3>Pengelolaan Data Siswa yang Efisien</h3>
            <p>Website ini berperan dalam pengelolaan data siswa yang lebih efisien. Staf sekolah dapat mengelola data pribadi dan akademik siswa dengan lebih baik, mencatat kehadiran, memasukkan nilai, dan menghasilkan laporan akademik dengan mudah melalui platform ini. Ini membantu dalam meningkatkan efisiensi administratif sekolah dan memberikan layanan yang lebih baik kepada siswa.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
          <div class="position-relative">
            <img src="img/nusa1.jpg" class="img-fluid" alt="Gambar" style="max-height: 350px; width: 100%; filter: brightness(45%);">
            <div class="text-center position-absolute top-50 start-50 translate-middle">
              <h5 class="text-white">CREATOR WEBSITE</h5>
              <h5 class="text-white">M Dava Al Rezza</h5>
              <p class="text-white">Cari tahu lebih banyak tentang apa yang bisa saya lakukan dan mulailah perjalananmu dalam membangun situs web yang keren!</p> <br>
              <a href="{{ route('aboutme') }}" class="btn1 btn-danger">Check Creator Profile</a>
            </div>
          </div>
        </div>
      </div> <br>

    @include('partials.footer')
    
@endsection