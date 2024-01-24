<?php

namespace Database\Seeders;

use App\Models\Anggota;
use App\Models\Pendaftaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pendaftaran::create([
            'nama'=>'Admin Aplikasi',
            'nim'=>'362258302111',
            'prodi'=>'TRPL',
            'email'=>'admin@ukmolahraga.com',
            'semester'=>'3',
            'no_telp'=>'086232714051',
            'divisi_1'=>'Futsal',
            'divisi_2'=>'Basket',
            'status'=>'terima',
            // 'jenis_kelamin'=>'laki laki',
        ]);


        Pendaftaran::create([
            'nama'=>'Muhamad Cahya Yunizar',
            'nim'=>'362258302063',
            'prodi'=>'TRPL',
            'email'=>'cahya@gmail.com',
            'semester'=>'3',
            'no_telp'=>'085964209070',
            'divisi_1'=>'Futsal',
        ]);

        Pendaftaran::create([
            'nama'=>'M. Alvian Ari Nugroho',
            'nim'=>'362258302189',
            'prodi'=>'TRPL',
            'email'=>'alvian@gmail.com',
            'semester'=>'3',
            'no_telp'=>'0859642091111',
            'divisi_1'=>'Basket',
            'divisi_2'=>'Badminton',
        ]);

        Pendaftaran::create([
            'nama'=>'Lisa Ayu Anjani',
            'nim'=>'362258302105',
            'prodi'=>'TRPL',
            'email'=>'lisa@gmail.com',
            'semester'=>'3',
            'no_telp'=>'0859642090000',
            'divisi_1'=>'Badminton',
        ]);

        Pendaftaran::create([
            'nama'=>'M. Rouf Mubarok',
            'nim'=>'362258302195',
            'prodi'=>'TRPL',
            'email'=>'rouf@gmail.com',
            'semester'=>'3',
            'no_telp'=>'085964209122',
            'divisi_1'=>'Karate',
            'divisi_2'=>'Silat',
        ]);

        Pendaftaran::create([
            'nama'=>'Moh. Kosim',
            'nim'=>'362258302007',
            'prodi'=>'TRPL',
            'email'=>'rouf@gmail.com',
            'semester'=>'3',
            'no_telp'=>'085964209212',
            'divisi_1'=>'Volly',
            'divisi_2'=>'Catur',
        ]);
        Pendaftaran::create([
            'nama'=>'Moh. arya dewangga',
            'nim'=>'362258302010',
            'prodi'=>'TRPL',
            'email'=>'dewa@gmail.com',
            'semester'=>'3',
            'no_telp'=>'0859642090',
            'divisi_1'=>'Taekwondo',
            'divisi_2'=>'Tarung Drajat',
        ]);
        Pendaftaran::create([
            'nama'=>'Reza Maulana',
            'nim'=>'362258302011',
            'prodi'=>'TRM',
            'email'=>'reza@gmail.com',
            'semester'=>'1',
            'no_telp'=>'0859642092093',
            'divisi_1'=>'Esport',
            'divisi_2'=>'Tenis Meja',
        ]);
        Pendaftaran::create([
            'nama'=>'Ardian Maulana',
            'nim'=>'362258302012',
            'prodi'=>'MBP',
            'email'=>'ardi@gmail.com',
            'semester'=>'1',
            'no_telp'=>'0859642090938',
            'divisi_1'=>'Taekwondo',
            'divisi_2'=>'Catur',
        ]);
        Pendaftaran::create([
            'nama'=>'Nisa Laura',
            'nim'=>'362258302013',
            'prodi'=>'MBP',
            'email'=>'nisa@gmail.com',
            'semester'=>'3',
            'no_telp'=>'08596420923984',
            'divisi_1'=>'Taekwondo',
            'divisi_2'=>'Silat',
        ]);
        Pendaftaran::create([
            'nama'=>'gilang Rahardian',
            'nim'=>'362258302014',
            'prodi'=>'TRM',
            'email'=>'gilang@gmail.com',
            'semester'=>'3',
            'no_telp'=>'0859642093232',
            'divisi_1'=>'Tenis Meja',
            'divisi_2'=>'Karate',
        ]);
        Pendaftaran::create([
            'nama'=>'Feby Putri',
            'nim'=>'362258302015',
            'prodi'=>'MBP',
            'email'=>'feby@gmail.com',
            'semester'=>'3',
            'no_telp'=>'0859642098382',
            'divisi_1'=>'Basket',
            'divisi_2'=>'Volly',
        ]);


    }
}
