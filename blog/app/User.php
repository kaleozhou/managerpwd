<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Mypwd;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     *      * Get all of the mypwds for the user.
     */
        public function mypwds()
        {
            return $this->hasMany(Mypwd::class);
        }
    /**
     *      * Get all of the cards for the user.
     */
        public function cards()
        {
            return $this->hasMany(Card::class);
        }

}
