<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->role;

        if ($role == 'Mahasiswa') {
            return view('mahasiswa/home');
        } elseif ($role == 'Dosen') {
            return view('dosen/home');
        } elseif ($role == 'Admin') {
            return view('admin/dashboard');
        } else {
            return view('dashboard');
        }
    }
}
