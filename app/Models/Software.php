<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;
    
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    // Helper untuk menghitung rata-rata bintang
    public function getAverageRatingAttribute()
    {
        return round($this->ratings()->avg('rating'), 1) ?? 0;
    }

    // Helper untuk menghitung jumlah reviewer
    public function getReviewCountAttribute()
    {
        return $this->ratings()->count();
    }

    protected $fillable = [
        'title',
        'description',
        'image_url',
        'screenshot_url',
        'download_url',
        'category',
        'version',
        'os_support',
        'is_featured',
        'is_reported',
        'file_size',   // <--- BARU
        'os_support',  // <--- BARU
        'install_instructions'
    ];
}