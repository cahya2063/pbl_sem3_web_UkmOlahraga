<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jadwal;
class Divisi extends Model
{
    use HasFactory;

    protected $table = 'divisis';
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'nama'
    ];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
