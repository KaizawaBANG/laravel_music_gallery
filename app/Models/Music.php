<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $fillable = [
        'name',     // Should match your migration (you had 'title' in controller)
        'artist',   // Correct
        'genre'    // Correct (no comma needed after last item)
    ];
}