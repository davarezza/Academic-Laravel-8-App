@extends('layouts.main')

@section('title')
<title>Login - {{ config('app.name') }}</title>
@endsection

@section('container')
<head>
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head> <br> <br> <br> <br>

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ session('loginError') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="box">
  <form action="/login" method="post">
    @csrf
    <h2>Log In</h2>
    <div class="inputBox">
      <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus>
      <span>Email Address</span>
      <i></i>
  </div>
  @error('email')
      <div class="alert alert-danger">{{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  @enderror
    <div class="inputBox">
      <input type="password" name="password" id="password" required>
      <span>Enter Password</span>
      <i></i>
    </div>
    @error('password')
      <div class="alert alert-danger">{{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  @enderror
    <input type="submit" value="Login">
    <div class="links">
      <a href="#">Not Registered?</a>
      <a href="{{ route('register') }}">Register</a>
    </div>
  </form>
</div>

@endsection