@extends('layouts.main')

@section('title')
<title>Contact - {{ config('app.name') }}</title>
@endsection

@section('container')
<head>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>
<br><br><br>
<div class="contact-section">
    <div class="contact-form">
      <h2>Hubungi Kami</h2>
      @if (session()->has('data'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
         Pesan berhasil dikirim
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <form class="contact" action="/contact" method="post">
        @csrf
        <div class="form-group">
          <label for="name" class="label-left">Nama</label>
          <input type="text" id="name" name="name" class="text-box" placeholder="Masukkan nama anda" autofocus value="{{ old('name') }}">
          @error('name')
            <div class="alert alert-danger alert-dismissible fade show">
              {{ $message }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="email" class="label-left">Email</label>
          <input type="email" id="email" name="email" value="{{ old('email') }}" class="text-box" placeholder="Masukkan email anda">
          @error('email')
            <div class="alert alert-danger alert-dismissible fade show">
              {{ $message }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="message" class="label-left">Pesan</label>
          <textarea id="message" name="message" rows="5" placeholder="Tuliskan pesan anda" >{{ old('message') }}</textarea>
          @error('message')
            <div class="alert alert-danger alert-dismissible fade show">
              {{ $message }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @enderror
        </div>
        <div class="form-group">
          <input type="submit"  name="submit" class="send-btn" value="Kirim">
        </div>
      </form>
    </div>
    <div class="contact-info">
      <div><i class='bx bx-map'></i>Purwosari, Pasuruan, Indonesia</div>
      <div><i class="bx bx-door-open"></i>Senin - Jumat 6:45 WIB to 17:00 WIB</div>
    </div>
  </div>
@endsection
