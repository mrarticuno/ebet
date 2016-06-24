<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    protected $table = 'players';

    protected $fillable = [
        'name', 'description', 'region_id', 'active'
    ];

    public function region()
    {
        return $this->BelongsTo('App\Region');
    }
}
