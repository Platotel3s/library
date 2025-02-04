<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukus=Buku::paginate(5);
        return view('buku.index',compact('bukus'));
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
        $request->validate([
            'judul'=>'required|string|max:255',
            'penulis'=>'required|string|max:255',
            'tahun'=>'required|string|max:4',
        ]);
        Buku::create($request->all());
        return redirect()->route('buku.create')->with('success','Berhasil menambah buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bukus=Buku::findOrFail($id);
        return view('buku.show',compact('bukus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bukus=Buku::findOrFail($id);
        return view('buku.edit',compact('bukus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul'=>'required|string|max:255',
            'penulis'=>'required|string',
            'tahun'=>'required|max:4',
        ]);
        $bukus=Buku::findOrFail($id);
        $bukus->update($request->all());
        return redirect()->route('buku.index')->with('success','Berhasil memperbarui data buku judul ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bukus=Buku::findOrFail($id);
        $bukus->delete();
        return redirect()->route('buku.index')->with('success','Berhasil menghapus buku '.$bukus->judul);
    }
}
