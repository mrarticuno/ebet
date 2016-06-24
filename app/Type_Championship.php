<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_Championship extends Model
{

    protected $table = 'type_championships';

    protected $fillable = [
        'name', 'quantity_matches', 'active'
    ];

}
