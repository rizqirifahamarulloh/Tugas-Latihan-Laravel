<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'id' => 1,
            'name' => 'Tere Liye',
            'photo' => 'tereliye.jpg',
            'bio' => 'Penulis aktif yang dikenal dengan berbagai genre novel best seller.'
        ],
        [
            'id' => 2,
            'name' => 'Andrea Hirata',
            'photo' => 'andrea.jpg',
            'bio' => 'Penulis fenomenal yang memopulerkan sastra melalui Laskar Pelangi.'
        ],
        [
            'id' => 3,
            'name' => 'Pramoedya Ananta Toer',
            'photo' => 'pramoedya.jpg',
            'bio' => 'Tokoh sastra penting Indonesia dengan karya yang mendunia.'
        ],
        [
            'id' => 4,
            'name' => 'Dee Lestari',
            'photo' => 'dee.jpg',
            'bio' => 'Penulis sekaligus penyanyi yang sukses lewat seri Supernova.'
        ],
        [
            'id' => 5,
            'name' => 'Sapardi Djoko Damono',
            'photo' => 'sapardi.jpg',
            'bio' => 'Pujangga legendaris yang karya puisinya sangat menyentuh hati.'
        ],
    ];

    public function getAuthors()
    {
        return $this->authors;
    }
}