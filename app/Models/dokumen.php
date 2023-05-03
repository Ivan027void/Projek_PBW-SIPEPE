<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

class Dokumen extends Model
{
    use HasFactory;

    protected $table = 'dokumen';

    protected $fillable = [
        'penelitian_id',
        'nama_file',
        'path_file',
    ];

    public function penelitian(): BelongsTo
    {
        return $this->belongsTo(Penelitian::class);
    }

    public function getPathFile()
    {
        return storage_path('app/' . $this->path_file);
    }



    public function storeFile($file)
    {
        $path = $file->store('dokumen');

        $this->nama_file = $file->getClientOriginalName();
        $this->path_file = $path;

        return $this->save();
    }

    public function uploadDokumen(Request $request)
    {
        $dokumen = new Dokumen();
        $dokumen->penelitian_id = $request->input('penelitian_id');

        if ($request->hasFile('file_dokumen')) {
            $file = $request->file('file_dokumen');
            $dokumen->storeFile($file);
        }

        return redirect()->back()->with('success', 'Dokumen berhasil diupload.');
    }

}