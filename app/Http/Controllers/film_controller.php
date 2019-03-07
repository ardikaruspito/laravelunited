<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class film_controller extends Controller
{
    public function index()
    {
        $datafilm = Film::all();
        return view('Film', compact('datafilm'));

    }

}
