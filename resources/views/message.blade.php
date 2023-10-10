@extends('layouts.main')

@section('title')
<title>Pesan - {{ config('app.name') }}</title>
@endsection

@section('container')
<head>
    <link rel="stylesheet" href="{{ asset('css/message.css') }}">
</head>
    <br><br><br>
    <h1>Pesan Kamu</h1>
    @if (session()->has('data'))
        <div class="data-success bg-body-secondary">
        <p>Nama: {{ session('data.nama') }}</p>
        <p>Email: {{ session('data.email') }}</p>
        <p>Pesan: {{ session('data.pesan') }}</p>
        </div>
    @endif
@endsection