@extends('layouts.main')

@section('content')
    <div class="card mt-5">
        <h5 class="card-header text-white" style="background-color: #087990;">Edit Walikelas</h5>
        <div class="card-body">
            <form action="{{ route('walikelas.update', $walikelas->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- Method PUT untuk update data -->

                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas"
                        value="{{ $walikelas->kelas }}" required>
                    @error('kelas')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                        value="{{ $walikelas->nama }}" required>
                    @error('nama')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="modal-footer">
                    <a href="{{ route('walikelas.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
