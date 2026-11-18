<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    // Menampilkan seluruh data mata kuliah
    public function index()
    {
        $mata_kuliahs = MataKuliah::all();
        return view('mata_kuliah.index', compact('mata_kuliahs'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('mata_kuliah.create');
    }

    // Menyimpan data mata kuliah
    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required|unique:mata_kuliahs,kode_matakuliah',
            'nama_matakuliah' => 'required',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        MataKuliah::create($request->only([
            'kode_matakuliah',
            'nama_matakuliah',
            'sks'
        ]));

        return redirect()->route('mata-kuliah.index')
            ->with('success', 'Data mata kuliah berhasil ditambahkan.');
    }

    // Menampilkan detail mata kuliah
    public function show($id)
    {
        $mata_kuliah = MataKuliah::findOrFail($id);
        return view('mata_kuliah.show', compact('mata_kuliah'));
    }
}
