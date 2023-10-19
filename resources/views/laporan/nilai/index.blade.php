@extends('layouts.main')

@section('title')
    <title>Data Siswa - {{ config('app.name') }}</title>
@endsection

@section('container')
    <br><br><br>
    <div class="container-fluid">
        <div class="row">

            @include('partials.sidebar')

            <!-- Konten Utama -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Data Siswa</h1>
                </div>
                <!-- Isi konten utama Anda di sini -->
                <a href="{{ route('nilai.create') }}" class="btn btn-info mb-3">Tambahkan Data</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Nilai Akhir</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($grades as $key => $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $data->nama }}</td>
                                <td>
                                  <img src="{{ asset('fotosiswa/'.$data->foto) }}" alt="" style="width: 70px;">
                                </td>
                                <td>{{ $data->jurusan }}</td>
                                <td>{{ $data->nilai }}</td>
                                <td>
                                    <button class="btn btn-danger">Delete</button>
                                    <button class="btn btn-info">Edit</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </main>
        </div>
    </div>
@endsection
