@extends('layouts.admin')

@section('tambah', 'Tambah dokter')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-2">Tambah Data Dokter</h1>
                <form method="POST" action="{{ route('dokter.store') }}">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="nama">Nama Dokter</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="spesialis">Spesialis</label>
                        <input type="text" class="form-control @error('spesialis') is-invalid @enderror" id="spesialis"
                            name="spesialis" value="{{ old('spesialis') }}">
                        @error('spesialis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="no_telp">No Telepon</label>
                        <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp"
                            name="no_telp" value="{{ old('no_telp') }}">
                        @error('no_telp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection
