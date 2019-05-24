<?php

namespace App\Model\Word;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $guarded = [];

    //all words has relationship with all users
    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
