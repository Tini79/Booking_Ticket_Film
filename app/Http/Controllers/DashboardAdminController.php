<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use  Illuminate\Support\Facades\Hash;

class DashboardAdminController extends Controller
{
    public function index()
    {
        return view('/admin.dashboard.index', [
            'title' => 'Dashboard Admin',
            'admins' => Admin::latest()->filter(request(['search']))->paginate(1)
        ]);
    }

    public function create()
    {
        return view('admin.dashboard.create', [
            'title' => 'Dashboard Admin'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'fName' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required'
        ]);

        Admin::create([
            'fName' => $request->fName,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),            
        ]);

        return redirect('/dashboardadmin');
    }

    public function destroy($id)
    {
        Admin::destroy($id);

        return redirect('/dashboardadmin')->with('success', 'Berhasil hapus data!');
    }

}
