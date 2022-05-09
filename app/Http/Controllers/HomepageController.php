<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class HomepageController extends Controller
{
    public function index() {
        return view('homepage.homepage', [
            'title' => 'Homepage',
            'films' => Film::all()
        ]);
    }
    public function show()
    {
        return view('homepage.homepage', [
            'title' => 'Homepage',
            'films' => Film::all()
        ]);
    }
}
