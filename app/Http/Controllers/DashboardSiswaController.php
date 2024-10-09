<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //pangsen//
    public function index()
    {
         // Mengambil semua data dari tabel walikelass
         $siswa = Siswa::all();  // Pastikan model ini memanggil data dengan benar

         return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required'
        ]);

        $newData = Siswa::create($data);

        return redirect(route('siswa.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
        return 'tampilkan detail data';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        $siswa = siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validata([
            'nis' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',

        ]);
        $siswa ->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->nama,
            'alamat' => $request->alamat,
            'jurusan' => $request->jurusan,
        ]);


        return redirect()->route('siswa.index')
           ->with('success', 'Data wali kelas berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        //
        return 'hapus';
    }
}
