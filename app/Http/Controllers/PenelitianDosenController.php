<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Penelitian;
use App\Models\Dokumen;
use Carbon\Carbon;

class PenelitianDosenController extends Controller
{
    public function index()
{
    $penelitian = Penelitian::all();
    return view('dosen/penelitian', compact('penelitian'));
}


    public function show($id)
    {
        $penelitian = Penelitian::find($id);
        $dokumen = Dokumen::where('id_penelitian', $id)->get();
        return view('dosen/penelitian', compact('penelitian','dokumen'));
    }

    public function update(Request $request, $id)
{
    $penelitian = Penelitian::where('id', $id)->firstOrFail();

    $penelitian->status_persetujuan = $request->status_persetujuan;
    $penelitian->tanggal_persetujuan = Carbon::now();
    $penelitian->save();

    return redirect()->route('penelitian-dosen.show', $id)
        ->with('status', 'Status penelitian berhasil diupdate.');
}


    public function destroy($id)
    {
        $penelitian = Penelitian::findOrFail($id);

        $penelitian->delete();

        return redirect()->route('penelitian-dosen.index')->with('status', 'Penelitian berhasil dihapus.');
    }
}
