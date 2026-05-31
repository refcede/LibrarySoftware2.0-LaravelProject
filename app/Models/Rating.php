<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi
    protected $fillable = [
        'software_id',
        'ip_address',
        'rating',
        'comment'
    ];

    // Relasi balik ke Software
    public function software()
    {
        return $this->belongsTo(Software::class);
    }
}