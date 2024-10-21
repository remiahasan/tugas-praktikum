<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        return Buku::all();
    }

    /**
     *
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $buku = new Buku();
    $buku->judul = $request->judul;
    $buku->penulis = $request->penulis;
    $buku->harga = $request->harga;
    $buku->stok = $request->stok;
    $buku->kategori_id = $request->kategori_id;
    $buku->save();

    return response()->json(['message' => 'Buku berhasil disimpan']);
}

    public function search(string $id)
    {
        $buku = Buku::findOrFail($id);

        return response()->json($buku);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buku = Buku::findOrFail($id);

        return response()->json($buku);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
    }
}
