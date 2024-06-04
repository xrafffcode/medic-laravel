@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-2">Data Ruangan</h1>

                @if (Auth::user()->role == 'admin')
                    <a href="{{ route('ruangan.create') }}" class="btn btn-primary mt-3">Tambah Data</a>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">No Ruangan</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Lantai</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ruangans as $ruangan)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $ruangan->no_ruangan }}</td>
                                <td>{{ $ruangan->kelas }}</td>
                                <td>{{ $ruangan->lantai }}</td>
                                <td>
                                    @if (Auth::user()->role == 'admin')
                                        <a href="{{ route('ruangan.edit', $ruangan->id) }}" class="btn btn-success">Edit</a>
                                        <form action="{{ route('ruangan.destroy', $ruangan->id) }}" method="POST"
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
