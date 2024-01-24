<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'hari',
        'waktu_mulai',
        'waktu_selesai',
        'divisi_id'
    ];
    
    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }
}
