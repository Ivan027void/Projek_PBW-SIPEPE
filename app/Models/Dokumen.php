<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Dokumen extends Model
{
    use HasFactory;

    protected $table = 'dokumen';

    const ALLOWED_FILE_TYPES = ['pdf'];

    protected $fillable = [
        'id_penelitian',
        'nama_file',
        'path_file',
        'komentar',
        'tanggal_komentar',
    ];
    
    protected $dates = [
        'tanggal_komentar',
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

    public function delete()
    {
        Storage::delete($this->path_file);
        parent::delete();
    }

    public function setNamaFileAttribute($value)
{
    $extension = strtolower($value->getClientOriginalExtension());
    if (!in_array($extension, self::ALLOWED_FILE_TYPES)) {
        throw new \InvalidArgumentException('Tipe file tidak didukung.');
    }

    $filename = time() . '_' . $value->getClientOriginalName();
    $path = $value->storeAs('public/dokumen', $filename);

    $this->attributes['nama_file'] = $filename;
    $this->attributes['path_file'] = 'dokumen/' . $filename;
}


    public function getTanggalKomentarAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function setTanggalKomentarAttribute($value)
    {
        $this->attributes['tanggal_komentar'] = Carbon::createFromFormat('d-m-Y', $value);
    }
}
