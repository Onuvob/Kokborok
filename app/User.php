<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //Fillable example
//    protected $fillable = [
//       'id', 'name', 'email', 'password', 'address', 'phone', 'profession', 'genus', 'gender',
//    ];

    //Guarded with mass assignment allows
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //all user has relationship with all words
    public function words()
    {
        return $this->belongsToMany('App\Model\Word\Word')->withTimestamps();
    }
}
