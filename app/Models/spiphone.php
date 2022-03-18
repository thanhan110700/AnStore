<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spiphone extends Model
{
    use HasFactory;
    protected $table = "spiphone";
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idsp', 'tensp', 'giasp', 'manhinh', 'hdh', 'camerasau', 'cameratruoc', 'cpu', 'ram', 'bonhotrong', 'thesim', 'dungluongpin', 'hinhanh', 'thongtinsp', 'view'
    ];

}
