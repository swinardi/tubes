<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
    	$books = DB::table('books')->get();
        return view('buku.index',['books' => $books]);
    }

    public function tambah()
    {
        return view('buku.tambah');
    }

    public function store(Request $request)
    {
        DB::table('books')->insert([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'jumlah_buku' => $request->jumlah_buku,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'cover' => $request->cover,
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Phnom_Penh')->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Phnom_Penh')->toDateTimeString()
        ]);
        return redirect('/books');
    }

    public function edit($id)
    {

        $books = DB::table('books')->where('id',$id)->get();
        return view('buku.edit',['books' => $books]);

    }

    public function update(Request $request)
    {
        DB::table('books')->where('id',$request->id)->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'jumlah_buku' => $request->jumlah_buku,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'cover' => $request->cover,
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Phnom_Penh')->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Phnom_Penh')->toDateTimeString()
        ]);
        return redirect('/books');
    }

    public function hapus($id)
    {
        DB::table('books')->where('id',$id)->delete();
        return redirect('/books');
    }
}
