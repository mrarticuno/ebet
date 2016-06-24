<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match_Statiscs extends Model
{
    protected $table = 'matches_statics';

    protected $fillable = [
        'duration', 'score', 'match_id', 'team_win_id', 'team_lost_id', 'player_mvp_id'
    ];

    public function match()
    {
        return $this->BelongsTo('App\Match');
    }

    public function winner()
    {
        return $this->HasOne('App\Team');
    }

    public function looser()
    {
        return $this->HasOne('App\Team');
    }

    public function mvp()
    {
        return $this->HasOne('App\Player');
    }
}
