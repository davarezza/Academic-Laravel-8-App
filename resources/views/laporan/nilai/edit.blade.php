@extends('layouts.main')

@section('title')
    <title>Edit Data - {{ config('app.name') }}</title>
@endsection

@section('container')
    <br><br><br>
    <div class="container-fluid">
        <div class="row">

            @include('partials.sidebar')

            <!-- Konten Utama -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Edit Data</h1>
                </div>
                <!-- Isi konten utama Anda di sini -->

                <form method="post" action="/laporan/nilai/{{ $grade->id }}" enctype="multipart/form-data">
                    @method('put') <!-- Untuk menandai request sebagai metode PUT -->
                    @csrf

                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $grade->nama }}">
                        </div>
                        <div class="mb-3">
                            <label for="nilai" class="form-label">Nilai</label>
                            <input type="number" class="form-control" id="nilai" name="nilai" value="{{ $grade->nilai }}">
                        </div>
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                          <select class="form-select" name="jurusan_id">
                            @foreach ( $jurusans as $jurusan )
                            @if(old('jurusan_id', $jurusan->jurusan_id) == $jurusan->id)
                              <option value="{{ $jurusan->id }}" selected>{{ $jurusan->nama }}</option>
                            @else
                              <option value="{{ $jurusan->id }}">{{ $jurusan->nama }}</option>
                              @endif
                            @endforeach
                          </select>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto Siswa</label>
                            <input class="form-control" type="file" id="foto" name="foto" value="{{ $grade->foto }}">
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label"></label>
                            <img src="{{ asset('fotosiswa/' . $grade->foto) }}" alt="Foto Sekarang" width="100">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </main>
        </div>
    </div>
@endsection
