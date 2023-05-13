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
        'id_penelitian',
        'nama_file',
        'path_file',
    ];

    public function penelitian(): BelongsTo
    {
        return $this->belongsTo(Penelitian::class);
    }

    public function komentar(): HasOne
    {
        return $this->hasOne(Komentar::class);
    }

    public function getPathFile()
    {
        return storage_path('app/' . $this->path_file);
    }

}