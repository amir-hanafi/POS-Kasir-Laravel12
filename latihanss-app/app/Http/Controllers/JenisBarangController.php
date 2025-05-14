<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\JenisBarang;

class JenisBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = JenisBarang::get();
        return response()->json($data,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'jns_brg_kode' => 'required|string|max:5|unique:jenis_barang,jns_brg_kode',
            'jns_brg_nama' => 'required|string|max:50',
        ]);

        // Masukkan data ke database
        DB::table('jenis_barang')->insert([
            'jns_brg_kode' => $request->jns_brg_kode,
            'jns_brg_nama' => $request->jns_brg_nama,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $data = JenisBarang::create($request->all());
        dd($request->all());

        // Respon JSON
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil ditambahkan',
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = JenisBarang::find($id);
        return response()->json([
            'status'=>true,
            'data'=>$data
        ],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = JenisBarang::find($id);
        $data->update($request->all());
        return response()->json([
            'status'=>true,
            'message'=>'update berhasil',
            'data'=>$data
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = JenisBarang::find($id);
        $data->delete();
        return response()->json([
            'status'=>true,
            'message'=>'delete berhasil',
        ],200); 

    }
}
