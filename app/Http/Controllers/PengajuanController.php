<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Penelitian;
use App\Models\Dokumen;

class PengajuanController extends Controller
{
    public function index()
    {
        $dosens = User::where('role', 'Dosen')->get();
        return view('mahasiswa/pengajuan', compact('dosens'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'dosen_nip' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $user = Auth::user();

        $penelitian = new Penelitian();
        $penelitian->mahasiswa_npm = $validatedData['npm'];
        $penelitian->dosen_nip = $validatedData['dosen_nip'];
        $penelitian->judul_penelitian = $validatedData['judul'];
        $penelitian->deskripsi = $validatedData['deskripsi'];
        $penelitian->tanggal_pengajuan = date('Y-m-d');
        $penelitian->status_persetujuan = 'Pending';
        $penelitian->tanggal_persetujuan = null;
        $penelitian->save();

        // simpan id_penelitian ke session
        $request->session()->put('id_penelitian', $penelitian->id);

        return redirect()->route('dokumen.create');
    }
}
