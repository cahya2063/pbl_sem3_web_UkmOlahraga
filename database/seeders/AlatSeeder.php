<?php

namespace Database\Seeders;

use App\Models\Alat;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alat::create([
        'nama_barang' => 'Bola Basket',
        'stok' => '10',
        'tggl_masuk' => Carbon::create(2024, 1, 14),
        ]);

        Alat::create([
            'nama_barang' => 'Bola Volly',
            'stok' => '10',
            'tggl_masuk' => Carbon::create(2024, 1, 14),
        ]);

        Alat::create([
            'nama_barang' => 'Bola Futsal',
            'stok' => '10',
            'tggl_masuk' => Carbon::create(2024, 1, 14),
        ]);

        Alat::create([
            'nama_barang' => 'Shutlecock',
            'stok' => '10',
            'tggl_masuk' => Carbon::create(2024, 1, 14),
        ]);

        Alat::create([
            'nama_barang' => 'Raket',
            'stok' => '10',
            'tggl_masuk' => Carbon::create(2024, 1, 14),
        ]);

        Alat::create([
            'nama_barang' => 'Net',
            'stok' => '10',
            'tggl_masuk' => Carbon::create(2024, 1, 14),
        ]);
    }
}
