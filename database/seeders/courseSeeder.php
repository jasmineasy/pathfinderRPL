<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class courseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menghapus data yang ada di tabel users
        DB::table('kursus')->truncate();

        // Memasukkan data menggunakan metode insert()
        DB::table('kursus')->insert([
            [
                'id_course' => '1',
                'course_name' => 'RevoU',
                'rating' => '5',
                'durasi' => '4 months',
                'topik' => 'Data Analyst',
                'stream' => 'DataScience'

            ],
            [
                'id_course' => '2',
                'course_name' => 'GreatEdu',
                'rating' => '4',
                'durasi' => '4 months',
                'topik' => 'Data Science Bootcamp',
                'stream' => 'DataScience'
            ],
            [
                'id_course' => '3',
                'course_name' => 'Mojadiapp',
                'rating' => '4 ',
                'durasi' => '5 months',
                'topik' => 'Data Scientist & Analyst' ,
                'stream' => 'DataScience'
            ],
            [
                'id_course' => '4',
                'course_name' => 'Sanber Foundation',
                'rating' => '5',
                'durasi' => '4 months',
                'topik' => 'UI/UX Designer',
                'stream' => 'InteractiveMedia'
            ],
            [
                'id_course' => '5',
                'course_name' => 'GreatEdu',
                'rating' => '5',
                'durasi' => '5 months',
                'topik' => 'UI/UX Bootcamp',
                'stream' => 'InteractiveMedia'
            ],
            [
                'id_course' => '6',
                'course_name' => 'Cakap',
                'rating' => '4',
                'durasi' => '5 months',
                'topik' => 'UI/UX Designer',
                'stream' => 'InteractiveMedia'
            ]

            
        ]);
    }
}
