<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Assegno alla variabile $movies tutti i film presenti nella tabella "movies" del database "laravel_model_controller":
        $movies = Movie::all();
        dd($movies);    // test presenza tutti record della tabella
        return view('home', compact('movies'));
    }
}
