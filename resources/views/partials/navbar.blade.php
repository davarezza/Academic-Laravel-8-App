<style>
    .navbar {
    z-index: 1000; /* Sesuaikan dengan nilai yang sesuai */
}
</style>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <img src="{{ asset('img/logosmk.png') }}" class="rounded mx-auto d-block px-2" alt="..." height="50px">
        <a class="navbar-brand" href="{{ route('home') }}">Aplikasi Akademik</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($active ==="home") ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active ==="about") ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active ==="laporan") ? 'active' : '' }}" href="{{ route('laporan') }}">Laporan</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ ($active ==="laporan") ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Laporan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('laporanA') }}">Nilai Akademik</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('laporanB') }}">Nilai Sikap</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('laporanC') }}">Nilai Ekstrakulikuler</a></li>
                    </ul>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "contact" || $active === "message") ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mx-5">
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ ($active ==="laporan") ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                    <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i> Logout</button>
                    </form>
                    </li>
                </ul>
            </li>
            @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link {{ ($active ==="login" || $active ==="register") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>