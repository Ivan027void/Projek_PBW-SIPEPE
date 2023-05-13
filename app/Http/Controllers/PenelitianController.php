<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penelitian;
use App\Models\Dokumen;

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
    $dokumen = Dokumen::where('id_penelitian', $id)->get();
    return view('mahasiswa/detailMahasiswa', compact('penelitian', 'dokumen'));
}

}
