{{-- oke kita isi dengan memanggil file utamanya yaitu admin blade di file tersebut isinya kan sudah ada file file footer, sidebar dll menggunakan include ya..

jadi kita cukup memanggil file adminnya saja menggunakan  --}}

@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-2">Data Dokter</h1>
                @if (Auth::user()->role == 'admin')
                    <a href="{{ route('dokter.create') }}" class="btn btn-primary my-3">Tambah Data Dokter</a>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Dokter</th>
                            <th scope="col">Spesialis</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dokters as $dokter)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $dokter->nama }}</td>
                                <td>{{ $dokter->spesialis }}</td>
                                <td>{{ $dokter->email }}</td>
                                <td>{{ $dokter->no_telp }}</td>
                                <td>
                                    @if (Auth::user()->role == 'admin')
                                        <a href="{{ route('dokter.edit', $dokter->id) }}" class="btn btn-success">Edit</a>
                                        <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST"
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
{{-- nah sekarang kita akan membuat file baru di folder dokter dengan nama create.blade.php --}}

{{-- isi file tersebut dengan --}}
