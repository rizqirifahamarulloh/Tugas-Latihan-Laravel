<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        [
            'id' => 1,
            'name' => 'Fiksi',
            'description' => 'Buku yang berisi cerita rekaan atau imajinatif dari penulis.'
        ],
        [
            'id' => 2,
            'name' => 'Horor',
            'description' => 'Buku yang bertujuan memicu emosi ketakutan atau ngeri pada pembaca.'
        ],
        [
            'id' => 3,
            'name' => 'Edukasi',
            'description' => 'Buku yang mengandung materi pembelajaran dan ilmu pengetahuan.'
        ],
        [
            'id' => 4,
            'name' => 'Sejarah',
            'description' => 'Buku yang membahas peristiwa dan fakta masa lalu secara sistematis.'
        ],
        [
            'id' => 5,
            'name' => 'Komik',
            'description' => 'Cerita bergambar yang umumnya disajikan dalam panel-panel menarik.'
        ],
    ];

    public function getGenres()
    {
        return $this->genres;
    }
}