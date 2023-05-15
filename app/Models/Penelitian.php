<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Penelitian extends Model
{
    use HasFactory;
    protected $table = 'penelitian';

    protected $fillable = [
        'judul_penelitian',
        'deskripsi',
        'tanggal_pengajuan',
        'status_persetujuan',
        'tanggal_persetujuan',
        'dosen_nip',
        'mahasiswa_npm',
    ];

    protected $casts = [
        'tanggal_pengajuan' => 'datetime',
        'tanggal_persetujuan' => 'datetime',
    ];

        public function dosen(): BelongsTo
        {
            return $this->belongsTo(User::class, 'dosen_nip', 'npm')->select(['npm', 'name'])->where('role', 'Dosen');
        }


        public function mahasiswa(): BelongsTo
        {
            return $this->belongsTo(User::class, 'mahasiswa_npm', 'npm')->select(['npm', 'name'])->where('role', 'Mahasiswa');
        }

        public function dokumen()
        {
            return $this->hasMany(Dokumen::class, 'id_penelitian');
        }


    public function scopeWithUser($query, $npmOrNip)
    {
        return $query->whereHas('Dosen', function ($query) use ($npmOrNip) {
            $query->where('npm', $npmOrNip);
        })->orWhereHas('Mahasiswa', function ($query) use ($npmOrNip) {
            $query->where('npm', $npmOrNip);
        });
    }

    public function scopeByUser($query, $npmOrNip)
    {
        return $query->where(function ($query) use ($npmOrNip) {
            $query->where('dosen_nip', $npmOrNip)
                  ->orWhere('mahasiswa_npm', $npmOrNip);
        });
    }



}
