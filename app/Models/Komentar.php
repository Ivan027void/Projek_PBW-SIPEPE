<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Komentar extends Model
{
    use HasFactory;

    protected $table = 'komentar';

    protected $fillable = [
        'komentar',
        'tanggal_komentar',
        'dosen_nip',
        'penelitian_id'
    ];

    protected $casts = [
        'tanggal_komentar' => 'date',
    ];

    public function dosen(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dosen_nip', 'npm');
    }

    public function penelitian(): BelongsTo
    {
        return $this->belongsTo(Penelitian::class);
    }

    public function scopeWithUser($query, $npmOrNip)
    {
        return $query->whereHas('dosen', function ($query) use ($npmOrNip) {
            $query->where('npm', $npmOrNip)->where('role', 'Dosen');
        });
    }

    public function scopeByUser($query, $npmOrNip)
    {
        return $query->where('dosen_nip', $npmOrNip)
            ->whereHas('dosen', function ($query) {
                $query->where('role', 'Dosen');
            });
    }


}