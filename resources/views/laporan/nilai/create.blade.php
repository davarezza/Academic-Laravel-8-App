@extends('layouts.main')

@section('title')
<title>Tambah Data - {{ config('app.name') }}</title>
@endsection

@section('container')
    <br><br><br>
    <div class="container-fluid">
        <div class="row">

            @include('partials.sidebar')

            <!-- Konten Utama -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Tambah Data</h1>
                </div>
                <!-- Isi konten utama Anda di sini -->

                <form method="post" action="/laporan/nilai" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nilai" class="form-label">Nilai</label>
                        <input type="number" class="form-control" id="nilai" name="nilai">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Mata Pelajaran</label>
                        <select class="form-select" id="jurusan" name="jurusan">
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                            <option value="Teknik Mekatronika">Teknik Mekatronika</option>
                            <!-- Tambahkan mata pelajaran lain sesuai kebutuhan -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto Siswa</label>
                        <input class="form-control" type="file" id="foto" name="foto">
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                </main>
        </div>
    </div>
@endsection