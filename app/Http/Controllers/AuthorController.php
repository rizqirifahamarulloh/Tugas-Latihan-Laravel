<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authorModel = new Author(); 
        $data_author = $authorModel->getAuthors(); 

        return view('authors', compact('data_author')); 
    }
}