<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class spipad extends Model
{
    protected $table = "spipad";
    public $timestamps = false;

    protected $fillable = [
        'idsp', 'tensp', 'giasp', 'manhinh', 'hdh', 'camerasau', 'cameratruoc', 'cpu', 'ram', 'bonhotrong', 'ketnoimang', 'trongluong', 'hinhanh', 'thongtinsp', 'view'
    ];
    
}
