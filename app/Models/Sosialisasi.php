<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sosialisasi extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id', 'judul', 'deskripsi', 'link', 'tanggal'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
