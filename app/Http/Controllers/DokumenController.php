<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penelitian;
use App\Models\Dokumen;

class DokumenController extends Controller
{

    public function create(Request $request)
{
    // ambil id_penelitian dari session
    $id_penelitian = $request->session()->get('id_penelitian');

    // jika id_penelitian tidak ada, redirect kembali ke halaman pengajuan
    if (!$id_penelitian) {
        return redirect()->route('pengajuan.index');
    }

    // lewatkan id_penelitian ke view upload dokumen
    return view('mahasiswa.uploadDokumen', compact('id_penelitian'));
}


    public function store(Request $request)
{
    $validatedData = $request->validate([
        'id_penelitian' => 'required',
        'dokumen' => 'required|mimes:pdf|max:2048',
    ]);

    $penelitian = Penelitian::findOrFail($validatedData['id_penelitian']);

    $file = $request->file('dokumen');
    $fileName = $file->getClientOriginalName();
    $path = $file->storeAs('public/dokumen', $fileName);


    $dokumen = new Dokumen();
    $dokumen->nama_file = $fileName;
    $dokumen->path_file = $path;
    $dokumen->id_penelitian = $penelitian->id;
    $dokumen->save();

    return redirect()->route('home')->with('success', 'Dokumen berhasil diupload.');
}

public function deleteDokumen(Request $request)
{
    $id = $request->input('id');
    $dokumen = Dokumen::findOrFail($id);
    
    // hapus file dari storage
    Storage::delete($dokumen->path);
    
    // hapus record dokumen dari database
    $dokumen->delete();
    
    return redirect()->back()->with('success', 'Dokumen berhasil dihapus.');
}


}
