<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perpustakaan;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_buku = Perpustakaan::all()->sortByDesc('id');
        $no = 0;
        $jumlah_data = Perpustakaan::count('id');
        $total_harga = Perpustakaan::sum('harga');
        return view('index', compact('data_buku', 'no', 'jumlah_data', 'total_harga'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Perpustakaan::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tgl_terbit' => $request->tgl_terbit,
            'harga' => $request->harga
        ]);
        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $buku = Perpustakaan::find($id);
        return view('buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $buku = Perpustakaan::find($id);
        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tgl_terbit' => $request->tgl_terbit,
            'harga' => $request->harga
        ]);
        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = Perpustakaan::find($id);
        $buku->delete();
        return redirect('/buku');
    }
}
