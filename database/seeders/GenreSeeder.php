<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Fiction',
            'description' => 'Genre yang berisi cerita imajinatif dan tidak nyata.',
        ]);
        
        Genre::create([
            'name' => 'Non-Fiction',
            'description' => 'Genre yang berisi fakta dan informasi nyata.',
        ]);

        Genre::create([
            'name' => 'Science Fiction',
            'description' => 'Genre yang berisi cerita tentang teknologi dan masa depan.',
        ]);
    }
}