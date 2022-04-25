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
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // if(Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        // return redirect()->intended('/datafilms');
        // }

        // return back();

        if(Auth::attempt($credentials)) {
            if(auth()->user()->is_admin == 1) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboardadmin');
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
