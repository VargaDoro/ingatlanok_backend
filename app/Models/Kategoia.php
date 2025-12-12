<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoia extends Model
{
    /** @use HasFactory<\Database\Factories\KategoiaFactory> */
    use HasFactory;

    protected $fillable = [
        'kategoria_nev'
    ];
    public function kategoriak()
    {
        return $this->hasMany(Kategoria::class, 'id');
    }
}
