<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\User;
use App\Models\Genre;

class FilmUserController extends Controller
{
    public function index()
    {
        $films = Film::with('users')->whereName('id')->first();

        return view('admin.booking.index', compact('films'), [
            'title' => 'Film Booking',
        ]);
    }
    public function show(Film $film, User $user, $id)
    {
        $film = Film::find($id);
        $user = User::find($id);
        return view('admin.booking.show', compact('film', 'user'), [
            'title' => 'Dashboard Film',
            'film' => $film,
            'user' => $user
        ]);
    }
}