<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('/main.register.index', [
            'title' => 'Login & Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|max:255|unique:users',
            'username' => 'required|unique:users|min:3|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|unique:users',
            'password' => 'required|min:4|max:255'
        ]);
        
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login');
    }
}
