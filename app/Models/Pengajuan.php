<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pelapor',
        'alamat_pelapor',
        'nama_perkara',
        'jenis_perkara',
        'desa_tersangka',
        'alamat_tersangka',
        'polisi',
        'no_pelapor',
        'deskripsi',
        'status',
        'kode'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'desa_tersangka');
    }
}
