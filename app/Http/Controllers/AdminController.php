<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('admin/home');
        }
    	return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password', 'type');

        if (Auth::attempt($credentials)) {
            return redirect('admin/home');
        }

        return redirect('/admin');
    }

    public function home()
    {
    	return view('admin.home');
    }
}
