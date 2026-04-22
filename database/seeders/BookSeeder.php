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
        ['author_id' => 1, 'title' => 'Belajar Flutter', 'description' => 'Panduan Flutter', 'price' => 75000],
        ['author_id' => 1, 'title' => 'UI/UX Design Dasar', 'description' => 'Belajar Figma', 'price' => 85000],
        ['author_id' => 2, 'title' => 'Hujan', 'description' => 'Novel fiksi', 'price' => 90000],
        ['author_id' => 3, 'title' => 'Laskar Pelangi', 'description' => 'Kisah pendidikan', 'price' => 95000],
        ['author_id' => 4, 'title' => 'Perahu Kertas', 'description' => 'Kisah romansa', 'price' => 80000],
    ];

    foreach ($books as $book) {
        \App\Models\Book::create($book);
    }
}
}