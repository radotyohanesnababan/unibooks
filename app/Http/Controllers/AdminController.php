<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books;
use App\Models\publisher;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    public function index(){
        $books = books::all();
        $publisher = publisher::all();
        return view('admin', compact('books','publisher'));
    }
    public function indexpengadaan(){
        $books = books::with('publisher')
            ->orderBy('stok', 'asc')
            ->get();
        return view('pengadaan', compact('books'));
    }

    //addbooks
    public function store(Request $request)
    {
           
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'nama_penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer',
            'genre' => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'stok' => 'required|integer',
            'isbn' => 'required|string|max:13'
        ]);
        // Temukan penerbit berdasarkan nama_penerbit dari request
        $publisher = publisher::where('nama_penerbit', $request->input('nama_penerbit'))->first();
        $books = new books();
        $books->judul = $request->judul;
        $books->penulis = $request->penulis;
        $books->id_penerbit = $publisher->id_penerbit;
        $books->tahun_terbit = $request->tahun_terbit;
        $books->genre = $request->genre;
        $books->deskripsi = $request->deskripsi;
        $books->stok = $request->stok;
        $books->isbn = $request->isbn;
        $books->save();
        return redirect()->route('get_books')->with(['success'=>'Buku Berhasil Disimpan']);
        //return response()->json(['message' => 'Data buku berhasil disimpan'], 201);
    }

    public function destroy( $id_buku){
        $books = books::findOrFail($id_buku);
        $books->delete(); 
        
        //return response()->json(['message' => 'Book deleted successfully.'],200);
        return redirect()->route('get_books')->with(['success'=>'Data berhasil dihapus!']);
    }

    public function show($id_buku){
        $books = books::findOrFail($id_buku);
        return response()->json(($books));
    }

    


}