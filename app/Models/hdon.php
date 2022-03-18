<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class hdon extends Model
{
    protected $table = "hdon";
    public $timestamps = false;
    public function cthdon()
    {
        return $this->hasMany('App\Models\cthdon','mahd','mahd');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','makh','makh');
    }
    protected $fillable = [
        'mahd', 'ngayhd', 'makh', 'tongtien', 'ttdonhang'
    ];
}
