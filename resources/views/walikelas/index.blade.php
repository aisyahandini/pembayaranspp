@extends('layouts.main')

@section('content')
    <div class="card mt-5">
        <h5 class="card-header text-white" style="background-color: #087990;">Walikels</h5>
        <div class="card-body">
            <!-- Tombol trigger modal -->
            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modeltambah">
                Tambah Data
            </button>

            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kelas</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($walikelas as $index => $data)
                        <tr>
                            <td>{{ $index + 1 }}</td> <!-- Nomor urut -->
                            <td>{{ $data->kelas }}</td> <!-- Data Kelas -->
                            <td>{{ $data->nama }}</td> <!-- Data Nama -->
                            <td>
                                <a href="{{ route('walikelas.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('walikelas.destroy', $data->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @push('modal')
        <!-- Modal -->
        <div class="modal fade" id="modeltambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('walikelas.store') }}" method="POST">
                            @csrf
                            <!-- Form Tambah Data -->
                            <div class="mb-3">
                                <label class="form-label">Kelas</label>
                                <input type="text"
                                    class="form-control @error('kelas')
                            is-invalid
                            @enderror"
                                    name="kelas" id="kelas" placeholder="Masukkan Kelas">
                                @error('kelas')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $messager }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text"
                                    class="form-control @error('nama')
                                  is-invalid
                                 @enderror"
                                    name="nama" id="nama" placeholder="Masukkan Nama">
                                @error('nama')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $messager }}
                                    </div>
                                @enderror
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endpush

    @push('modal')
        <!-- Modal Edit -->
        <div class="modal fade" id="modelkurang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="#">
                            @csrf
                            @method('PUT') <!-- Method PUT untuk update data -->

                            <div class="mb-3">
                                <label class="form-label">Kelas</label>
                                <input type="text" class="form-control" id="kelas" name="kelas" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endpush


@endsection
