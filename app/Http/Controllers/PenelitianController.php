<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penelitian;

class PenelitianController extends Controller
{
    public function index()
    {
        $penelitian = Penelitian::all();
        return view('mahasiswa/detailMahasiswa', compact('penelitian'));
    }

    public function show($id)
{
    $penelitian = Penelitian::find($id);
    $dokumen = $penelitian->dokumen;
    return view('mahasiswa/detailMahasiswa', compact('penelitian', 'dokumen'));
}

}
