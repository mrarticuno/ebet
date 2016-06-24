<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $table = 'uploads';

    protected $fillable = [
        'name_file', 'extesion', 'mime_type', 'active'
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
