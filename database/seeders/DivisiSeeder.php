<?php

namespace Database\Seeders;

use App\Models\Divisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Divisi::create([
            'nama'=>'Futsal',
        ]);

        Divisi::create([
            'nama'=>'Basket',
        ]);

        Divisi::create([
            'nama'=>'Volly',
        ]);

        Divisi::create([
            'nama'=>'Badminton',
        ]);

        Divisi::create([
            'nama'=>'Karate',
        ]);

        Divisi::create([
            'nama'=>'Silat',
        ]);

        Divisi::create([
            'nama'=>'Catur',
        ]);

        Divisi::create([
            'nama'=>'Tarung Derajat',
        ]);

        Divisi::create([
            'nama'=>'E-Sport',
        ]);

        Divisi::create([
            'nama'=>'Tenis Meja',
        ]);

        Divisi::create([
            'nama'=>'Taekwondo',
        ]);
    }
}
