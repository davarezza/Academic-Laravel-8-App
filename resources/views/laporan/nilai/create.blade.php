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
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nilai" class="form-label">Nilai</label>
                        <input type="number" class="form-control @error('nilai') is-invalid @enderror" id="nilai" name="nilai">
                        @error('nilai')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                      <select class="form-select" name="jurusan_id">
                        @foreach ( $jurusans as $jurusan )
                        @if(old('jurusan_id') == $jurusan->id)
                          <option value="{{ $jurusan->id }}" selected>{{ $jurusan->nama }}</option>
                        @else
                          <option value="{{ $jurusan->id }}">{{ $jurusan->nama }}</option>
                          @endif
                        @endforeach
                      </select>`
                        @error('foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto Siswa</label>
                        <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" name="foto" aria-describedby="fotoHelp">
                        <div id="fotoHelp" class="form-text">Usahakan menggunakan gambar/foto 1:1</div>
                        @error('foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>

                </main>
        </div>
    </div>
@endsection