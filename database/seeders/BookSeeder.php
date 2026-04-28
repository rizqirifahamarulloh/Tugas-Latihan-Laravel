<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            ['author_id' => 1, 'genre_id' => 1, 'title' => 'Belajar Flutter', 'description' => 'Panduan Flutter', 'stock' => 10, 'cover_photo' => 'covers/flutter.jpg'],
            ['author_id' => 1, 'genre_id' => 2, 'title' => 'UI/UX Design Dasar', 'description' => 'Belajar Figma', 'stock' => 8, 'cover_photo' => 'covers/uiux.jpg'],
            ['author_id' => 2, 'genre_id' => 1, 'title' => 'Hujan', 'description' => 'Novel fiksi', 'stock' => 5, 'cover_photo' => 'covers/hujan.jpg'],
            ['author_id' => 3, 'genre_id' => 1, 'title' => 'Laskar Pelangi', 'description' => 'Kisah pendidikan', 'stock' => 7, 'cover_photo' => 'covers/laskar.jpg'],
            ['author_id' => 4, 'genre_id' => 1, 'title' => 'Perahu Kertas', 'description' => 'Kisah romansa', 'stock' => 6, 'cover_photo' => 'covers/perahu.jpg'],
        ];

        foreach ($books as $book) {
            \App\Models\Book::create($book);
        }
    }
}
