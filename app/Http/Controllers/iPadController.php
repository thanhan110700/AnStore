<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\spipad;
use Illuminate\Support\Facades\DB;

class iPadController extends Controller
{

    public function ipad()
    {
        $dssp = spipad::inRandomOrder()->paginate(6);
        return view('ans.PHP.ipad',compact('dssp'));
    }
    public function xemchitietipad($idsp)
    {

        $sanpham = DB::table('spipad')->limit(3)->inRandomOrder()->get();
        $ttsp = spipad::where('idsp',$idsp)->first();
        $view = $ttsp->view+1;
        $luotxem = spipad::where('idsp',$idsp)->update([
            'view' => $view
        ]);

        return view('ans.PHP.xemchitietipad', compact('ttsp','sanpham'));
    }
}
