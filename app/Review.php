<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    protected $fillable = [
        'title', 'body', 'view_counter', 'rate_visual', 'rate_gameplay', 'rate_history', 'rate_entertainment', 'summary', 'active'
    ];

    public function author()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->hasMany('App\Tag');
    }

    public function files()
    {
        return $this->hasMany('App\Upload');
    }
}
