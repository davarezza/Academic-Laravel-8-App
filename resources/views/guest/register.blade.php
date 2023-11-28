@extends('layouts.main')

@section('title')
<title>Register - {{ config('app.name') }}</title>
@endsection

@section('container')
<head>
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head> <br> <br> <br> <br>
<div class="box">
  <form action="{{ route('register') }}" method="post">
    @csrf
    <h2>Register</h2>
    <div class="inputBox">
      <input type="text" name="name" id="name" value="{{ old('name') }}">
      <span>Name</span>
      <i></i>
    </div>
    @error('name')
      {{-- <div class="alert alert-danger pesan">{{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> --}}
      <p class="text-danger">{{ $message }}</p>
  @enderror
    <div class="inputBox">
      <input type="password" name="password" id="password">
      <span>Password</span>
      <i></i>
  </div>
  @error('password')
      {{-- <div class="alert alert-danger pesan">{{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> --}}
      <p class="text-danger">{{ $message }}</p>
  @enderror
  
  <div class="inputBox">
      <input type="email" name="email" id="email" value="{{ old('email') }}">
      <span>Email Address</span>
      <i></i>
  </div>
  @error('email')
      {{-- <div class="alert alert-danger pesan">{{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> --}}
      <p class="text-danger">{{ $message }}</p>
  @enderror
  
    <input type="submit" value="Register">
    <div class="links">
      <a href="#">Already Registered?</a>
      <a href="{{ route('login') }}">Login</a>
    </div>
  </form>
</div>

@endsection