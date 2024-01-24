<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jadwal::create([
            'hari'=>'Senin',
            'waktu_mulai' => Carbon::createFromTime(15, 30, 0), // Mengatur waktu jam:menit:detik
            'waktu_selesai' => Carbon::createFromTime(17, 00, 0),
            'divisi_id' => 1,
        ]);

        Jadwal::create([
            'hari'=>'Kamis',
            'waktu_mulai' => Carbon::createFromTime(16, 00, 0), // Mengatur waktu jam:menit:detik
            'waktu_selesai' => Carbon::createFromTime(17, 30, 0),
            'divisi_id' => 1,
        ]);

        Jadwal::create([
            'hari'=>'Selasa',
            'waktu_mulai' => Carbon::createFromTime(16, 00, 0), // Mengatur waktu jam:menit:detik
            'waktu_selesai' => Carbon::createFromTime(17, 30, 0),
            'divisi_id' => 2,
        ]);

        Jadwal::create([
            'hari'=>'Sabtu',
            'waktu_mulai' => Carbon::createFromTime(16, 00, 0), // Mengatur waktu jam:menit:detik
            'waktu_selesai' => Carbon::createFromTime(17, 30, 0),
            'divisi_id' => 2,
        ]);

        Jadwal::create([
            'hari'=>'Rabu',
            'waktu_mulai' => Carbon::createFromTime(16, 00, 0), // Mengatur waktu jam:menit:detik
            'waktu_selesai' => Carbon::createFromTime(17, 30, 0),
            'divisi_id' => 3,
        ]);

        Jadwal::create([
            'hari'=>'Jumat',
            'waktu_mulai' => Carbon::createFromTime(16, 00, 0), // Mengatur waktu jam:menit:detik
            'waktu_selesai' => Carbon::createFromTime(17, 30, 0),
            'divisi_id' => 3,
        ]);
    }
}
