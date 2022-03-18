<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cthdon extends Model
{
    protected $table = "cthdon";
    public $timestamps = false;
    public function hdon()
    {
        return $this->belongsTo('App\hdon','mahd','mahd');
    }
    public function user()
    {
        return $this->hasMany('App\User','makh','makh');
    }
    
    protected $fillable = [
        'mahd', 'makh', 'idsp', 'tensp', 'soluong', 'giasp'
    ];
}
