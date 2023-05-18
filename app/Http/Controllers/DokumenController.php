<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Penelitian;
use App\Models\Dokumen;

class DokumenController extends Controller
{


    public function create(Request $request)
{
    // Ambil id_penelitian dari parameter URL
    $id_penelitian = $request->input('id_penelitian');

    // Jika id_penelitian tidak ada, redirect kembali ke halaman pengajuan
    if (!$id_penelitian) {
        return redirect()->route('pengajuan.index');
    }

    // Lewatkan id_penelitian ke view upload dokumen
    return view('mahasiswa.uploadDokumen', compact('id_penelitian'));
}


    public function store(Request $request)
{
    $validatedData = $request->validate([
        'id_penelitian' => 'required',
        'dokumen' => 'required|max:2048|mimes:pdf',
    ]);

    $dokumen = new Dokumen();
    $dokumen->nama_file = $request->file('dokumen');
    $dokumen->id_penelitian = $validatedData['id_penelitian'];
    $dokumen->save();

    return redirect()->route('home')->with('success', 'Dokumen berhasil diupload.');
}



public function deleteDokumen($id)
{
    $dokumen = Dokumen::findOrFail($id);

    // Delete the document file from storage
    Storage::delete('public/' . $dokumen->path_file);

    // Delete the document record from the database
    $dokumen->delete();

    return redirect()->back()->with('success', 'Dokumen berhasil dihapus.');
}

}
