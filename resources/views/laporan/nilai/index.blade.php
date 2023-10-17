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
                <button class="btn btn-info mb-3">Tambahkan Nilai</button>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Mapel</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>dava.jpg</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <button class="btn btn-danger">Delete</button>
                            <button class="btn btn-info">Edit</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </main>
        </div>
    </div>
@endsection