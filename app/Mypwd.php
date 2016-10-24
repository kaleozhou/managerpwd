<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mypwd extends Model
{
    /**
     *The attributes that are mass assignable.
     *           
     * @var array
     */
    protected $fillable = ['name'];

    /**
     *      * Get the user that owns the mypwd.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
