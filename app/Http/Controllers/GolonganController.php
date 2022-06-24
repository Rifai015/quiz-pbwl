<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Golongan;


class GolonganController extends Controller
{
  
    public function index()
    {
        $rows = Golongan::all(); 
        return view('golongan.index', compact('rows')); 
    }

    public function create()
    {
        return view('golongan.create'); 
    }

    
    public function store(Request $request)
    {
        $request->validate(
            [
                'gol_kode' => 'bail|required|unique:tb_golongan',
                'gol_nama' => 'required'
            ],
            [
                'gol_kode.required' => 'Kode wajib diisi',
                'gol_kode.unique' => 'Kode sudah ada',
                'gol_nama.required' => 'Nama wajib diisi'
            ]);

            Golongan::create([
                'gol_kode' => $request->gol_kode,
                'gol_nama' => $request->gol_nama
            ]);
    
            return redirect('golongan');
    }

    public function show($id)
    {
       
    }

    public function edit($id)
    {
        $row = Golongan::findOrFail($id);
        return view('golongan.edit', compact('row'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'gol_kode' => 'bail|required',
                'gol_nama' => 'required'
            ],
            [
                'gol_kode.required' => 'Kode wajib diisi',
                'gol_nama.required' => 'Nama wajib diisi'
            ]
        );

        $row = Golongan::findOrFail($id);
        $row->update([
            'gol_kode' => $request->gol_kode,
            'gol_nama' => $request->gol_nama
        ]);

        return redirect('golongan');
    }

    public function destroy($id)
    {
        $row = Golongan::findOrFail($id);
        $row->delete();

        return redirect('golongan');
    }
}
