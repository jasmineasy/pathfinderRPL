<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class careerPath extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menghapus data yang ada di tabel users
        DB::table('career')->truncate();

        // Memasukkan data menggunakan metode insert()
        DB::table('career')->insert([
            [
                'idKarir' => '1',
                'stream' => 'DataScience',
                'namaKarir' => 'Data Analyst',
                'level1' => 'Understanding SQL for Beginner',
                'level2' => 'Pandas',
                'level3' => 'SQL Intermediate',
                'level4' => 'Tableau for Beginner',
                'level5' => 'Numpy for Intermediata'
            ],

            [
                'idKarir' => '2',
                'stream' => 'DataScience',
                'namaKarir' => 'Data Engineer',
                'level1' => 'Understanding SQL for Beginner',
                'level2' => 'Pandas',
                'level3' => 'SQL Intermediate',
                'level4' => 'Tableau for Beginner',
                'level5' => 'Numpy for Intermediata'
            ],

            [
                'idKarir' => '3',
                'stream' => 'InteractiveMedia',
                'namaKarir' => 'UI Researcher',
                'level1' => 'Understanding Design Thinking for Design',
                'level2' => 'Learning Figma for Beginner',
                'level3' => 'Understanding the Power of User Research',
                'level4' => 'Learning to Create Prototype',
                'level5' => 'Making a Documentation for the design'
            ],

            [
                'idKarir' => '4',
                'stream' => 'InteractiveMedia',
                'namaKarir' => 'UI Analyst',
                'level1' => 'Understanding Design Thinking for Design',
                'level2' => 'Learning Figma for Beginner',
                'level3' => 'Understanding the Power of User Research',
                'level4' => 'Learning to Create Prototype',
                'level5' => 'Making a Documentation for the design'
            ],
        ]);
    }
}
