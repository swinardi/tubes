<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['judul', 'penulis', 'penerbit', 'tahun_terbit', 'jumlah_buku', 'deskripsi', 'lokasi', 'cover'];
   
    public function Transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    use HasFactory;

    public $timestamp = true;
}
