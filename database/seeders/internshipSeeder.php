<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class internshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menghapus data yang ada di tabel users
        DB::table('intern')->truncate();

        // Memasukkan data menggunakan metode insert()
        DB::table('intern')->insert([
            [
                'id_internship' => '1',
                'perusahaan' => 'Astra',
                'role' => 'Data Analyst Intern',
                'durasi' => '4 months',
                'lokasi' => 'Jakarta Selatan',
                'stream' => 'DataScience'
            ],
            [
                'id_internship' => '2',
                'perusahaan' => 'Telkom',
                'role' => 'Data Engineering Intern',
                'durasi' => '4 months',
                'lokasi' => 'Jakarta Selatan',
                'stream' => 'DataScience'
            ],
            [
                'id_internship' => '3',
                'perusahaan' => 'Grab',
                'role' => 'Data Scientist Intern',
                'durasi' => '4 months',
                'lokasi' => 'Jakarta Selatan',
                'stream' => 'DataScience'  
            ],
            [
                'id_internship' => '4',
                'perusahaan' => 'Traveloka',
                'role' => 'UI/UX Intern',
                'durasi' => '4 months',
                'lokasi' => 'Jakarta Timur',
                'stream' => 'InteractiveMedia'
            ],
            [
                'id_internship' => '5',
                'perusahaan' => 'Tiket.com',
                'role' => 'UX Researcher',
                'durasi' => '4 months',
                'lokasi' => 'Jakarta Pusat',
                'stream' => 'InteractiveMedia'
            ],
            [
                'id_internship' => '6',
                'perusahaan' => 'Bank BCA',
                'role' => 'UI/UX Designer',
                'durasi' => '4 months',
                'lokasi' => 'Jakarta Pusat',
                'stream' => 'InteractiveMedia' 
            ]

            
        ]);
    }
}
