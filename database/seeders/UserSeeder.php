<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'Admin Aplikasi',
        //     'nim' => '362258302111',
        //     'prodi' => 'TRPL',
        //     'role' => 'administator',
        //     'email' => 'admin@ukmolahraga.com',
        //     'password' => bcrypt('admin'),
        //     'remember_token' => Str::random(60),
        // ]);
        User::create([
            'name' => 'Admin Aplikasi',
            'nim' => '362258302111',
            'prodi' => 'TRPL',
            'role' => 'administator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(60),
        ]);
//         User::create([
//             'name' => 'Pembina UKM',
//             'nim' => '362258302111',
//             'prodi' => 'TRPL',
//             'role' => 'pembina',
//             'email' => 'pembina@ukmolahraga.com',
//             'password' => bcrypt('pembina'),
//             'remember_token' => Str::random(60),
//         ]);

//         User::create([
//             'name' => 'root',
//             'nim' => '362258302222',
//             'prodi' => 'TRPL',
//             'role' => 'user',
//             'email' => 'root@email.com',
//             'password' => bcrypt('root'),
//             'remember_token' => Str::random(60),
//         ]);
    }
}

