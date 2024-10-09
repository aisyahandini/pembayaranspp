@extends('layouts.main')


@section('content')
    <div class="card mt-5">
        <h5 class="card-header text-white" style="background-color: #087990;">Siswa</h5>
        <div class="card-body">
            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modeltambah">
                Tambah data
            </button>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>kelas</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $index => $data)
                        <tr>
                            <td>{{ $index + 1 }}</td> <!-- Nomor urut -->
                            <td>{{ $data->nis }}</td> <!-- Data Kelas -->
                            <td>{{ $data->nama }}</td> <!-- Data Nama -->
                            <td>{{ $data->kelas }}</td> <!-- Data Nama -->
                            <td>{{ $data->alamat }}</td> <!-- Data Nama -->
                            <td>{{ $data->jurusan }}</td> <!-- Data Nama -->
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#modelkurang">
                                    Edit
                                </button>
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

            @push('model')
                <!-- awal Modal -->
                <div class="modal fade" id="modeltambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fs-5" id="staticBackdropLabel">From Tambah Data Siswa</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <!--bagian from atau tambahkan data siswa-->
                            <form method="POST" action="{{ route('siswa.store') }}">
                                @csrf
                                <div class="modal-body">
                                    <!---feom tambah data --->
                                    <div class="mb-3">
                                        <label class="form-label">Nis</label>
                                        <input type="text" class="form-control" name="nis"
                                            placeholder="masukan   NIS Anda!">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama"
                                            placeholder="Masukan Nama Lengkap Anda!">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Alamat</label>
                                        <textarea class="form-control" name="alamat" rows="3"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Kelas</label>
                                        <select class="from-select" name="kelas">
                                            <option></option>
                                            <option value="X"> X </option>
                                            <option value="XI"> XI </option>
                                            <option value="XII"> XII </option>

                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Jurusan</label>
                                        <select class="from-select" name="jurusan">
                                            <option></option>
                                            <option value="Nautika Kapal Penangkap Ikan"> Nautika Kapal Penangkap Ikan </option>
                                            <option value="Teknika Kapal Penangkap Ikan"> Teknika Kapal Penangkap Ikan </option>
                                            <option value="Agribisnis Perikanan Air Tawar"> Agribisnis Perikanan Air Tawar
                                            </option>
                                            <option value="Rekayasa Perangkat Lunak ">Rekayasa Perangkat Lunak </option>
                                            <option value="Teknik Pendinginan dan Tata Udara">Teknik Pendinginan dan Tata Udara
                                            </option>
                                            <option value="eknik Komputer dan Jaringan"> Teknik Komputer dan Jaringan </option>

                                        </select>
                                    </div>

                                    <!--bagiaan akhir-->
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
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
                                    <label class="form-label">NIS</label>
                                    <input type="text" class="form-control" id="kelas" name="kelas" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">NAMA</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">KELAS</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">JURUSAN</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">ALAMAT</label>
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
