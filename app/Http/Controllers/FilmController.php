<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Status;
use App\Models\Genre;
use Illuminate\Support\Str;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/admin.films.index', [
            'title' => 'Data Film',
            'films' => Film::latest()->filter(request(['search']))->paginate(10),
            'statuses' => Status::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin.films.create', [
            'title' => 'Data Film',
            'statuses' => Status::all() 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:225',
            'img' => 'image|file|max:3000',
            'description' => 'required|min:100|max:10000',
            'ticketAvailable' => 'required',
            'seatAvailable' => 'required',
            'status_id' => 'required',
            'date' => 'required',
            'time' => 'required',
            'price' => 'required'
        ]);

        if($request->file('img')) {
            $validatedData['img'] = $request->file('img')->store('post-image');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->description), 100);

        Film::create($validatedData);

        return redirect('/datafilms');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film, Genre $genre, $id)
    {
        $film = Film::find($id);

        return view('admin.films.show', compact('film', 'genre'), [
            'title' => 'Dashboard Film',
            'film' => $film

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film, $id)
    {
        $film = Film::find($id);

        return view('/admin.films.edit', [
            'title' => 'Data Film',
            'film' => $film,
            'statuses' => Status::all() 
        ]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $film = Film::find($id);

        $request->validate([
            'title' => 'max:225',
            'img' => 'image|file|max:3000',
            'description' => 'min:100|max:10000',
            'ticketAvailable' => '',
            'seatAvailable' => '',
            'status_id' => '',
            'date' => '',
            'time' => '',
            'price' => ''
        ]);
        
        if($request->title != $film->title)
        $request->validate(['title' => 'required']);

        if($request->file('img')) {
            $request->file('img')->store('post-image');
        }

        $request['excerpt'] = Str::limit(strip_tags($request->description), 100);

        $film->update([
            'title' => $request->title,
            'img' => $request->img,
            'description' => $request->description,
            'ticketAvailable' => $request->ticketAvailable,
            'seatAvailable' => $request->seatAvailable,
            'status_id' => $request->status_id,
            'date' => $request->date,
            'time' => $request->time,
            'price' => $request->price
        ]);

        return redirect('/datafilms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Film::destroy($id);

        return redirect('/datafilms')->with('success', 'Berhasil hapus data!');
    }
}
