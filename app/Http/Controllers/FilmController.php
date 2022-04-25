<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
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
            'films' => Film::latest()->filter(request(['search']))->paginate(10)
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
            'title' => 'Data Film'
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
            'title' => 'required',
            'description' => 'required',
            'img' => 'image|file|max:1024',
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
    public function show(Film $film, $id)
    {
        $film = Film::find($id);

        return view('admin.films.show', [
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
            'film' => $film
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
            'title' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);
        
        if($request->title != $film->title)
        $request->validate(['title' => 'required|unique:films']);

        $film->update([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
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
