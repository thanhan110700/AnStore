<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class commentspiphone extends Model
{
    protected $table = "commentspiphone";
    public function spiphone()
    {
        return $this->belongsTo('App\spiphone','idsp','idsp');
    }
    public function user()
    {
        return $this->hasMany('App\User','makh','makh');
    }
}
