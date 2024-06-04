@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-2">Data Perawat</h1>

                @if (Auth::user()->role == 'admin')
                    <a href="{{ route('perawat.create') }}" class="btn btn-primary mt-3">Tambah Data</a>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Perawat</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perawats as $perawat)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $perawat->nama }}</td>
                                <td>{{ $perawat->alamat }}</td>
                                <td>{{ $perawat->email }}</td>
                                <td>{{ $perawat->no_telp }}</td>
                                <td>
                                    @if (Auth::user()->role == 'admin')
                                        <a href="{{ route('perawat.edit', $perawat->id) }}" class="btn btn-success">Edit</a>
                                        <form action="{{ route('perawat.destroy', $perawat->id) }}" method="POST"
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
