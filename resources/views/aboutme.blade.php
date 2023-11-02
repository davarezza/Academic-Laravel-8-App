@extends('layouts.main')

@section('container')
<head>
<link rel="stylesheet" href="{{ asset('css/aboutme.css') }}">
</head>
<div class="home">
<div class="home-content mt-4">
            <h3>Hello, It's Me</h3>
            <h1>Dava Rezza</h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <p> I'm all about making the digital gears turn smoothly. As a backend developer, I'm passionate about crafting robust APIs, and other.</p>
            <div class="social-media">
                <a href="#" class="text-white"><i class='bx bxl-facebook' ></i></a>
                <a href="#" class="text-white"><i class='bx bxl-youtube'></i></a>
                <a href="#" class="text-white"><i class='bx bxl-instagram-alt'></i></a>
            </div>
            <a href="https://github.com/davarezza" class="btn text-white"><i class='bx bxl-github'></i> Github</a>
        </div>

        <div class="home-img">
            <img src="{{ asset('img/davaril.png') }}" alt="">
        </div>
    </div>
@endsection