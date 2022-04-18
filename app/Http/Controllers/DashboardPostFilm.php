<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class DashboardPostFilm extends Controller
{
    public function index()
    {
        return view('/dashboard/filmpage', [
            'title' => 'Films',
            'films' => Film::all()
        ]);
    }
}
