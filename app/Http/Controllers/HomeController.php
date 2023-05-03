<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role;

        if ($role== 'Mahasiswa'){

            return view('home');
        }

        if ($role== 'Dosen'){

            return view('homeP');
        }

        else{
            return view('admin');
        }
    }
}
