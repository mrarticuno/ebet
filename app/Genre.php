<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'game_genres';

    protected $fillable = [
        'name', 'description', 'active'
    ];

}
