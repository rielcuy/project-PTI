<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    // Relasi 1:N ke tabel shoes (akan terpakai saat Zulfa membuat model Shoe)
    public function shoes()
    {
        return $this->hasMany(Shoe::class);
    }
}