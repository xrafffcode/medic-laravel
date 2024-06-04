@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-2">Data Pasien</h1>
                @if (Auth::user()->role == 'admin')
                    <a href="{{ route('pasien.create') }}" class="btn btn-primary my-3">Tambah Data Pasien</a>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pasiens as $pasien)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $pasien->nama }}</td>
                                <td>{{ $pasien->alamat }}</td>
                                <td>{{ $pasien->jenis_kelamin }}</td>
                                <td>{{ $pasien->no_telp }}</td>
                                <td>
                                    @if (Auth::user()->role == 'admin')
                                        <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-success">Edit</a>
                                        <form action="{{ route('pasien.destroy', $pasien->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                                        </form>
                                    @endif

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
