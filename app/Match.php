<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $table = 'matches';

    protected $fillable = [
        'image', 'link_transmission', 'dt_match', 'dt_begin', 'dt_end', 'championship_id', 'transmission', 'finished', 'active'
    ];

    public function championship()
    {
        return $this->BelongsTo('App\Championship');
    }
}
