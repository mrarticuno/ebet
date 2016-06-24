<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Championship extends Model
{
    protected $table = 'championships';

    protected $fillable = [
        'name', 'description', 'image', 'year', 'dt_begin', 'dt_end', 'game_id', 'region_id', 'type_championship_id', 'finished', 'active'
    ];

    public function type()
    {
        return $this->BelongsTo('App\Type_Championship');
    }

    public function region()
    {
        return $this->BelongsTo('App\Region');
    }

    public function game()
    {
        return $this->BelongsTo('App\Game');
    }
}
