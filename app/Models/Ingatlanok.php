<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingatlanok extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategoria_id',
        'leiras',
        'datum',
        'tehermentes',
        'ar',
        'kepUrl',
        'created_at',
        'updated_at',
    ];

    public function kategoria()
    {
        return $this->belongsTo(Kategoria::class, 'kategoria_id');
    }
}
