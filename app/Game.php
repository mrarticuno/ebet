<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';

    protected $fillable = [
        'name', 'description', 'image', 'game_genre_id', 'active'
    ];

    public function genre()
    {
        return $this->BelongsTo('App\Genre');
    }
}
