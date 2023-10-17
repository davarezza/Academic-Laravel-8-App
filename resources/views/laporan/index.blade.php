@extends('layouts.main')

@section('title')
<title>Laporan - {{ config('app.name') }}</title>
@endsection

@section('container')
    <br><br><br>
    <div class="container-fluid">
        <div class="row">

            @include('partials.sidebar')

            <!-- Konten Utama -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Halaman Laporan</h1>
                </div>
                <!-- Isi konten utama Anda di sini -->
                <h1>Selamat Datang di halaman laporan</h1>
            </main>
        </div>
    </div>
@endsection