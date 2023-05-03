<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
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
