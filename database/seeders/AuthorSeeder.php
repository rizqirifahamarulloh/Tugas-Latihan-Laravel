<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $authors = [
        ['name' => 'Rizqi Rifah', 'bio' => 'Mahasiswa STT NF'],
        ['name' => 'Tere Liye', 'bio' => 'Penulis Novel Indonesia'],
        ['name' => 'Andrea Hirata', 'bio' => 'Penulis Laskar Pelangi'],
        ['name' => 'Dee Lestari', 'bio' => 'Penulis Filosofi Kopi'],
        ['name' => 'Fiersa Besari', 'bio' => 'Penulis dan Pemusik'],
    ];

    foreach ($authors as $author) {
        \App\Models\Author::create($author);
    }
}
}