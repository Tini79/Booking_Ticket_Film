<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\User;
use App\Models\FilmBooking;

class DashboardPostFilm extends Controller
{
    public function show($id)
    {
        $film = Film::find($id);

        return view('/dashboard.filmpage', [
            'title' => 'Film',
            'film' => $film
        ]);
    }

    public function booking($id)
    {
        $film = Film::find($id);
        $user = User::find($id);
        $booking = FilmBooking::find($id);

        return view('/dashboard.booking', [
            'title' => 'Film',
            'film' => $film,
            'user' => $user,
            'booking' => $booking
        ]);
    }

    public function payment() {

    }
}
