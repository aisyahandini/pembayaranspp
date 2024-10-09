@extends('layouts.main')


@section('content')
<div class="card mt-5">
    <h5 class="card-header text-white" style="background-color: #087990;">Siswa</h5>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>No.</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>kelas</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>

            <tr>
                <td>1</td>
                <td>19.223.4648</td>
                <td>Aisyah Andini</td>
                <td>Tanjung Harapan </td>
                <td>x</td>
                <td>Rekayasa Perangkat Lunak</td>
                <td>
                    <a href="#" class="btn btn-warning">Ubah</a>
                    <a href="#" class="btn btn-danger">Hapus</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modeltambah">
                        Tambah data
                    </button>
                </td>
            </tr>
        </table>

@endsection
