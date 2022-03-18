<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\spiphone;
use Illuminate\Support\Facades\DB;

class iPhoneController extends Controller
{

    public function iphone()
    {
        $dssp = spiphone::inRandomOrder()->paginate(6);
        return view('ans.PHP.iphone',compact('dssp'));
    }
    public function xemchitietiphone($idsp)
    {

        $sanpham = DB::table('spiphone')->limit(3)->inRandomOrder()->get();
        $ttsp = spiphone::where('idsp',$idsp)->first();
        $view = $ttsp->view+1;
        $luotxem = spiphone::where('idsp',$idsp)->update([
            'view' => $view
        ]);
        $mausp = str_split($ttsp->mausp, 8);

        return view('ans.PHP.xemchitietiphone', compact('ttsp','sanpham','mausp'));
    }
}
