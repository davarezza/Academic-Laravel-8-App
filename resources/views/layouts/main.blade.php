<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @yield('title')
    <link rel="icon" type="image/x-icon" href="{{ asset('davicon.ico') }}" />
</head>
<body>
  <style>

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700;800;900&display=swap');

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    border: none;
    outline: none;
    scroll-behavior: smooth;
    list-style: none;
    border-collapse: none;
    font-family: 'Poppins', sans-serif;
    }
    html {
      overflow-x: hidden;
    }

    .tombol {
      transition: .3s;
    }

    .tombol:hover {
      transform: scale(1.1);
    }
  </style>

@include('partials.navbar')

@yield('container')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script>
      const typed = new Typed('.multiple-text', {
    strings: ['Backend Developer', 'Laravel Developer', 'Data Analystic'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 100,
    loop: true
});
    </script>
</body>
</html>