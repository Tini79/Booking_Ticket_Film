<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/main.login.index', [
            'title' => 'Login & Register'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|min:3|max:255',
            'email' => 'required|email',
            'password' => 'required|min:4|max:255'
        ]);

        if(Auth::attempt($credentials)) {
            if(auth()->user()->is_admin == 1) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            } else {
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
        } 
        return back(); 
    }
    
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
