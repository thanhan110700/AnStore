<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $table = "User";
    use Notifiable;
    public $timestamps = false;
    public function cthdon()
    {
        return $this->hasMany('App\Models\cthdon','makh','makh');
    }
    public function hdon()
    {
        return $this->hasMany('App\Models\hdon','makh','makh');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'makh','tenkh', 'username', 'password','anhdaidien','role', 'diachi','sdt'
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
