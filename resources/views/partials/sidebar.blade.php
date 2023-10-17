            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block p-2 bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active text-dark" href="{{ route('laporan') }}">
                                Dashboard
                            </a> <hr>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('nilai.index') }}">
                                <i class='bx bxs-user'></i> Data Siswa
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <i class='bx bxs-user-plus'></i> Tambah Nilai
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="nav-link text-dark"><i class="bx bxs-log-out"></i> Logout</button>
                            </form>
                        </li>
                        <!-- Tambahkan menu lainnya sesuai kebutuhan -->
                    </ul>
                </div>
            </nav>