<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = 'notices';

    protected $fillable = [
        'title', 'body', 'view_counter', 'user_id', 'upload_id', 'active'
    ];

    public function author()
    {
        return $this->belongsTo('App\User', 'upload_id');
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
