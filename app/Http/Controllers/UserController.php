<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/admin.users.index', [
            'title' => 'PlayFilm',
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin.users.create', [
            'title' => 'Data User'
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
            'fullname' => 'max:255',
            'username' => 'unique:users|min:3|max:255',
            'email' => 'email|unique:users',
            'phone' => 'unique:users',
            'password' => 'min:5|max:255'
        ]);
        
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/datausers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('/admin.users.edit', [
            'title' => 'Data User',
            'user' => $user
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
        $user = User::find($id);

        $request->validate([
            'fullname' => 'max:255',
            'username' => 'unique:users|min:3|max:255',
            'email' => 'email|unique:users',
            'phone' => 'unique:users',
            'password' => 'min:5|max:255'
        ]);
        
        if($request->username != $user->username)
        $request->validate(['username' => 'required|unique:users']);

        $user->update([
            'username' => $request->username,
            'description' => $request->description,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
        ]);

        return redirect('/datausers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('/datausers')->with('success', 'Berhasil hapus data!');
    }
}
