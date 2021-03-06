<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','active', 'user_token', 'reference', 'admin', 'moderator', 'can_chat', 'can_bet' , 'upload_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function image()
    {
        return $this->belongsTo('App\Upload', 'upload_id');
    }
}
