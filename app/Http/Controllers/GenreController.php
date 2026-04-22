<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genreModel = new Genre(); 
        $data_genre = $genreModel->getGenres(); 

        return view('genres', compact('data_genre')); 
    }
}