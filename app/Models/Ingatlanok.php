<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingatlanok extends Model
{
        /** @use HasFactory<\Database\Factories\KategoiaFactory> */
        /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'kategoia_id',
        'leiras',
        'datum',
        'tehermentes',
        'ar',
        'kepUrl',
        'created_at',
        'updated_at',
    ];
}
