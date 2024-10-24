<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ouvrages extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        'titre',
        'auteur',
        'editeur',
        'isbn',
        'pages',
        'publication',
        'image'
    ];
}
