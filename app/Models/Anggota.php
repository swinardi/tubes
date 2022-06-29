<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggotas';
    protected $fillable = ['user_id', 'nim', 'nama', 'tempat_lahir', 'tgl_lahir', 'gender', 'prodi'];
    
    public function Transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}

