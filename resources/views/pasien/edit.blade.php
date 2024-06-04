@extends('layouts.admin')

@section('edit', 'Edit Pasien')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-2">Edit Data Pasien</h1>
                <form method="POST" action="{{ route('pasien.update', $pasien->id) }}">
                    @csrf
                    @method('put')
                    <div class="form-group mt-3">
                        <label for="nama">Nama Perawat</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" value="{{ $pasien->nama }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                            name="alamat" value="{{ $pasien->alamat }}">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin"
                            name="jenis_kelamin">
                            <option value="L" {{ $pasien->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ $pasien->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="no_telp">No Telepon</label>
                        <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp"
                            name="no_telp" value="{{ $pasien->no_telp }}">
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
