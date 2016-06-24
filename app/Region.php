<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regions';

    protected $fillable = [
        'name', 'description', 'image', 'game_id', 'active'
    ];

    public function game()
    {
        return $this->BelongsTo('App\Game');
    }

}
