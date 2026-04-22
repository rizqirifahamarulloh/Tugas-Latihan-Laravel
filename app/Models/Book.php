<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    private $books = [
        [
            'title' => 'Pulang',
            'description' => ' Petualangan seorang anak yang merantau ke kota besar untuk mencari pekerjaan, namun akhirnya memutuskan untuk kembali ke kampung halamannya.',
            'price' => 50000,
            'stock' => 10,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1,
        ],
        [
            'title' => 'Laskar Pelangi',
            'description' => ' Kisah inspiratif tentang sekelompok anak-anak di sebuah pulau kecil yang berjuang untuk mendapatkan pendidikan dan meraih impian mereka.',
            'price' => 75000,
            'stock' => 15,
            'cover_photo' => 'laskar_pelangi.jpg',
            'genre_id' => 2,
            'author_id' => 2,
        ],
        [
            'title' => 'Bumi Manusia',
            'description' => ' Novel sejarah yang menggambarkan kehidupan masyarakat Indonesia pada masa penjajahan Belanda, dengan fokus pada kisah cinta dan perjuangan seorang pemuda.',
            'price' => 60000,
            'stock' => 20,
            'cover_photo' => 'bumi_manusia.jpg',
            'genre_id' => 3,
            'author_id' => 3,
        ],
    ];

    public function getBooks()
    {
        return $this->books;
    }
}