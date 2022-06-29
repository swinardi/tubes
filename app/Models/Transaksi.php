<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';
    protected $fillable = ['kode_transaksi', 'anggota_id', 'books_id', 'tgl_pinjam', 'tgl_kembali', 'status', 'ket'];
    
    public function Anggota()
    {
        return $this->belongsTo(Anggota::class);
    }

    public function Buku()
    {
        return $this->belongsTo(Buku::class);
    }

    use HasFactory;
}
