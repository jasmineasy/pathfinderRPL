<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {

        // Menghapus data yang ada di tabel users
        DB::table('users')->truncate();

        // Memasukkan data menggunakan metode insert()
        DB::table('users')->insert([
            [
                'namePengguna' => 'User Pertama',
                'idPengguna' => 'user1',
                'password' => Hash::make('user1'),
                'kategori' => 'User'
            ],
            [
                'namePengguna' => 'Admin Pertama',
                'idPengguna' => 'admin1',
                'password' => Hash::make('admin1'),
                'kategori' => 'Admin'
            ],
            // Tambahkan data lain sesuai kebutuhan Anda
        ]);


    }
}
