<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengembalian extends Model
{
    use HasFactory;
    
    protected $table = 'pengembalians';
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'nama',
        'nim',
        'prodi',
        'nama_barang',
        'jml_barang',
        'tggl_pinjam',
        'tggl_kembali',
        'bukti',
        'deskripsi',
    ];
}
