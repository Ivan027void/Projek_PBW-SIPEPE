<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Penelitian;

class HomeController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;

        if ($role == 'Mahasiswa') {
            $npm = auth()->user()->npm; // ambil npm dari user yang sedang login
            $penelitian = Penelitian::with('dosen')
                ->where('mahasiswa_npm', $npm)
                ->orderBy('tanggal_pengajuan', 'desc')
                ->get();
            return view('mahasiswa/home', compact('penelitian'));
        } elseif ($role == 'Dosen') {
            return view('dosen/home');
        } elseif ($role == 'Admin') {
            return view('/home');
        } else {
            return view('dashboard');
        }
    }
}
