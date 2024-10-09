<?php

namespace App\Http\Controllers;

use App\Models\Walikelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Validation\ValidatesRequests;
use PhpParser\Node\Stmt\Return_;

class DashboardWalikelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Mengambil semua data dari tabel walikelass
         $walikelas = Walikelas::all();  // Pastikan model ini memanggil data dengan benar

         return view('walikelas.index', compact('walikelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'kelas' => 'required'
        ]);

        $newData = Walikelas::create($data);

        return redirect(route('walikelas.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Walikelas $siswa)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $walikelas = Walikelas::findOrFail($id);
        return view('walikelas.edit', compact('walikelas'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $walikelas = Walikelas::findOrFail($id);

        // Validasi dan update data
        $request->validate([
            'kelas' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
        ]);

        $walikelas->update([
            'kelas' => $request->kelas,
            'nama' => $request->nama,
        ]);

        return redirect()->route('walikelas.index')
            ->with('success', 'Data wali kelas berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $walikelas = Walikelas::findOrFail($id);

        $walikelas -> delete();

        return redirect()->route('walikelas.index')->with('success', 'Data berhasil dihapus.');
    }
}
