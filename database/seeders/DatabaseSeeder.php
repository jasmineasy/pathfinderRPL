<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(internshipSeeder::class);
        $this->call(courseSeeder::class);
        $this->call(userSeeder::class);
        $this->call(careerPath::class);

    }
}
