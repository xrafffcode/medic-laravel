@extends('layouts.admin')

@section('tambah', 'Tambah Ruangan')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-2">Tambah Data Ruangan</h1>
                <form method="POST" action="{{ route('ruangan.store') }}">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="no_ruangan">No Ruangan</label>
                        <input type="text" class="form-control @error('no_ruangan') is-invalid @enderror" id="no_ruangan"
                            name="no_ruangan" value="{{ old('no_ruangan') }}">
                        @error('no_ruangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="kelas">Kelas</label>
                        <select class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="kelas">
                            <option value="VVIP" {{ old('kelas') == 'VVIP' ? 'selected' : '' }}>VVIP</option>
                            <option value="VIP" {{ old('kelas') == 'VIP' ? 'selected' : '' }}>VIP</option>
                            <option value="Kelas 1" {{ old('kelas') == 'Kelas 1' ? 'selected' : '' }}>Kelas 1</option>
                            <option value="Kelas 2" {{ old('kelas') == 'Kelas 2' ? 'selected' : '' }}>Kelas 2</option>
                            <option value="Kelas 3" {{ old('kelas') == 'Kelas 3' ? 'selected' : '' }}>Kelas 3</option>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label for="lantai">Lantai</label>
                        <input type="text" class="form-control @error('lantai') is-invalid @enderror" id="lantai"
                            name="lantai" value="{{ old('lantai') }}">
                        @error('lantai')
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
