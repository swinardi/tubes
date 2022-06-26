<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
    	$books = DB::table('books')->get();
    	return view('index',['books' => $books]);
    }
}
