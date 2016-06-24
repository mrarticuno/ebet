<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'players';

    protected $fillable = [
        'name', 'nickname', 'image', 'birth_date', 'game_id', 'team_id', 'retired', 'active'
    ];

    public function game()
    {
        return $this->BelongsTo('App\Game');
    }

    public function team()
    {
        return $this->HasOne('App\Team');
    }

}
