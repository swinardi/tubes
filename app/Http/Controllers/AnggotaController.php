<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
    	$anggotas = DB::table('anggotas')->get();
    	return view('anggota.index',['anggotas' => $anggotas]);
    }
    
    public function tambah()
    {
        return view('anggota.tambah');
    }

    public function store(Request $request)
    {
        DB::table('anggotas')->insert([
            'user_id' => $request->user_id,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Phnom_Penh')->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Phnom_Penh')->toDateTimeString()
        ]);
        return redirect('/anggotas');
    }

    public function edit($id)
    {

        $anggotas = DB::table('anggotas')->where('id',$id)->get();
        return view('anggota.edit',['anggotas' => $anggotas]);

    }

    public function update(Request $request)
    {
        DB::table('anggotas')->where('id',$request->id)->update([
            'user_id' => $request->user_id,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Phnom_Penh')->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Phnom_Penh')->toDateTimeString()
        ]);
        return redirect('/anggotas');
    }

    public function hapus($id)
    {
        DB::table('anggotas')->where('id',$id)->delete();
        return redirect('/anggotas');
    }
}
