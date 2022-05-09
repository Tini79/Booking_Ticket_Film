<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Status;
use App\Models\FilmBooking;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'fullname' => 'Ni Komang Artini',
            'username' => 'Tini',
            'email' => 'mtinink@gmail.com',
            'phone' => '081980000273',
            'password' => bcrypt('user'),
            'is_admin' => 0
        ]);
        User::create([
            'fullname' => 'Iluh Ayu',
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '081980000778',
            'password' => bcrypt('admin'),
            'is_admin' => 1
        ]);
        Genre::create([
            'name' => 'Adventure'
        ]);
        Genre::create([
            'name' => 'Fantasy'
        ]);
        Genre::create([
            'name' => 'Animation'
        ]);
        Genre::create([
            'name' => 'Horror'
        ]);
        Status::create([
            'status' => 'Up Coming'
        ]);
        Status::create([
            'status' => 'Premiere'
        ]);
        Status::create([
            'status' => 'Now Showing'
        ]);
        FilmBooking::create([
            'user_id' => 1,
            'film_id' => 1,
            'bookAmount' => 1
        ]);
    }
}
