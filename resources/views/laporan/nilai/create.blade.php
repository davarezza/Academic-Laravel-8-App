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

                <form>
                    <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nilai" class="form-label">Nilai</label>
                        <input type="text" class="form-control" id="nilai" name="nilai">
                    </div>
                    <div class="mb-3">
                        <label for="mapel" class="form-label">Mata Pelajaran</label>
                        <select class="form-select" id="mapel" name="mapel">
                            <option value="Matematika">Matematika</option>
                            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                            <option value="Mapel Keahlian Khusus">Mapel Keahlian Khusus</option>
                            <!-- Tambahkan mata pelajaran lain sesuai kebutuhan -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Foto Siswa</label>
                        <input class="form-control" type="file" id="image">
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                </main>
        </div>
    </div>
@endsection