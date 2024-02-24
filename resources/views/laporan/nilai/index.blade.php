@extends('layouts.main')

@section('title')
    <title>Data Siswa - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('container')

<style>
    #toast-container {
    top: 75px; /* Sesuaikan dengan nilai yang sesuai untuk menggeser toast ke bawah */
}
</style>

    <br><br><br>
    <div class="container-fluid">
        <div class="row">

            @include('partials.sidebar')

            <!-- Konten Utama -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Data Siswa</h1>
                </div>
                <!-- Isi konten utama Anda di sini -->
                @if (auth()->check() && auth()->user()->role == 'guru')
                <a href="{{ route('nilai.create') }}" class="btn btn-info mb-3">Tambahkan Data</a>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Nilai Akhir</th>
                            @if (auth()->check() && auth()->user()->role == 'guru')
                            <th scope="col">Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($grades as $key => $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $data->nama }}</td>
                                <td>
                                  <img src="{{ asset('fotosiswa/'.$data->foto) }}" alt="" style="width: 70px;">
                                </td>
                                <td>{{ $data->jurusans->nama }}</td>
                                <td>{{ $data->nilai }}</td>
                                @if (auth()->check() && auth()->user()->role == 'guru')
                                <td>
                                    <a href="{{ route('nilai.edit', $data->id) }}" class="btn btn-info">Edit</a>
                                    <form action="{{ route('nilai.destroy', $data->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </main>
        </div>
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
    </script>    
@endsection
