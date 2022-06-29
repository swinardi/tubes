<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
    	$transaksis = DB::table('transaksis')->get();
    	return view('index',['transaksis' => $transaksis]);
    }
}
