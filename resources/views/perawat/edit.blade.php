@extends('layouts.admin')

@section('edit', 'Edit perawat')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-2">Edit Data Perawat</h1>
                <form method="POST" action="{{ route('perawat.update', $perawat->id) }}">
                    @csrf
                    @method('put')
                    <div class="form-group mt-3">
                        <label for="nama">Nama Perawat</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" value="{{ $perawat->nama }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                            name="alamat" value="{{ $perawat->alamat }}">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" value="{{ $perawat->email }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="no_telp">No Telepon</label>
                        <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp"
                            name="no_telp" value="{{ $perawat->no_telp }}">
                        @error('no_telp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Edit Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection
