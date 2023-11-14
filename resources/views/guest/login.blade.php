@extends('layouts.main')

@section('title')
<title>Login - {{ config('app.name') }}</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('container')
<head>
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head> <br> <br> <br> <br>

<div class="box">
  <form action="/login" method="post">
    @csrf
    <h2>Log In</h2>
    <div class="inputBox">
      <input type="email" name="email" id="email" value="{{ old('email') }}">
      <span>Email Address</span>
      <i></i>
  </div>
  @error('email')
      <div class="alert alert-danger pesan">{{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  @enderror
    <div class="inputBox">
      <input type="password" name="password" id="password" >
      <span>Enter Password</span>
      <i></i>
    </div>
    @error('password')
      <div class="alert alert-danger pesan">{{ $message }}
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    @if (Session::has('success'))
    toastr.options = {
        "positionClass": "toast-top-right", // Atur posisi ke kanan atas
    };
    toastr.success("{{ Session::get('success') }}");
    @endif

    @if (Session::has('loginError'))
    toastr.options = {
        "positionClass": "toast-top-right", // Atur posisi ke kanan atas
    };
    toastr.error("{{ Session::get('loginError') }}");
    @endif
</script>

@endsection