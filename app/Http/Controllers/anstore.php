<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\spiphone;
use App\Models\addcart;
use App\Models\hdon;
use App\Models\spipad;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;

class anstore extends Controller
{
    public function getaddtocart(Request $request,$idsp)
    {
        if($idsp)
        {
            if($sp = spiphone::where('idsp',$idsp)->first()){
                if(!Session::has('cart')){
                    $cart[] = [
                        'idsp'=>$sp->idsp,
                        'tensp'=>$sp->tensp,
                        'hinhanh'=>$sp->hinhanh,
                        'qty'=>'1',
                        'giasp'=>$sp->giasp];
                 }
                 else{
                         $cart = $request->session()->get('cart');
                         $check = true;
                         foreach($cart as $key => $c){
                             if($c['idsp']==$idsp){
                                 $cart[$key]['qty'] +=1;
                                 $check = false;
                                 break;
                             }
                         }
                         if($check){
                         $cart[]= [
                             'idsp'=>$sp->idsp,
                             'tensp'=>$sp->tensp,
                             'hinhanh'=>$sp->hinhanh,
                             'qty'=>'1',
                             'giasp'=>$sp->giasp];
                         }
                 }
            }
            if($sp = spipad::where('idsp',$idsp)->first()){
                if(!Session::has('cart')){
                    $cart[] = [
                        'idsp'=>$sp->idsp,
                        'tensp'=>$sp->tensp,
                        'hinhanh'=>$sp->hinhanh,
                        'qty'=>'1',
                        'giasp'=>$sp->giasp];
                 }
                 else{
                         $cart = $request->session()->get('cart');
                         $check = true;
                         foreach($cart as $key => $c){
                             if($c['idsp']==$idsp){
                                 $cart[$key]['qty'] +=1;
                                 $check = false;
                                 break;
                             }
                         }
                         if($check){
                         $cart[]= [
                             'idsp'=>$sp->idsp,
                             'tensp'=>$sp->tensp,
                             'hinhanh'=>$sp->hinhanh,
                             'qty'=>'1',
                             'giasp'=>$sp->giasp];
                         }
                 }
            }

            $request->session()->put('cart',$cart);
            return redirect()->back();
        }
    }
    public function getdeletetocart(Request $request,$idsp)
    {
        if(Session::has('cart')){
            $cart = $request->session()->get('cart');
            foreach($cart as $key => $c){
                if($c['idsp']==$idsp){
                        unset($cart[$key]);
                    break;
                }
            }
            $request->session()->put('cart',$cart);
            return redirect('giohang');
        }
      //  return redirect()->back();
    }
    //Xóa giỏ hàng
    public function getdeleteallcart(Request $request)
    {
        $request->session()->forget('cart');
        return redirect()->back();
    }
    // Đăng xuất
    public function getLogout(Request $request)
    {
        $request->session()->forget('role');
        return redirect('index');
    }
    //Thanh toán
    public function thanhtoan(Request $request)
    {
        if($request->session()->has('role')){
        $user = User::where('username',$request->session()->get('role'))->first();
        return view('ans.PHP.thanhtoan',compact('user'));
        }
        else{
            return view('ans.PHP.thanhtoan');
        }
    }
    //Tìm kiếm
    public function search(Request $request)
    {
        $dssp = spiphone::where('tensp','like','%'.$request->inputsearch.'%')->get();
        $tensearch = $request->inputsearch;
        return view('ans.PHP.timkiem',compact('dssp','tensearch'));
    }
    //Cập nhật
    public function update($makh,Request $request)
    {
        $tenkh= $request->tenkh;
        $sdt = $request->sdt;
        $diachi = $request->diachi;
        echo $tenkh;
        DB::table('user')->where('makh',$makh)->update(['tenkh'=>$tenkh,'sdt'=>$sdt,'diachi'=>$diachi]);
        return redirect()->back();
    }
    //Mua hàng
    public function muahang($makh,Request $request)
    {
        $hdon = $request->session()->get('cart');
        $tt = 0;
        foreach ($hdon as $key => $value) {
            $tt += $value['qty']*$value['giasp'];
        }
        DB::table('hdon')->insert(['ngayhd'=>date("y.m.d"),'makh'=>$makh,'tongtien'=>$tt,'ttdonhang'=>'1']);
        $maxhd = DB::table('hdon')->max('mahd');
        foreach ($hdon as $key => $value) {
            DB::table('cthdon')->insert(['mahd'=>$maxhd,'makh'=>$makh,'idsp'=>$value['idsp'],'tensp'=>$value['tensp'],'soluong'=>$value['qty'],'giasp'=>$value['giasp']]);
        }
        $request->session()->forget('cart');
        Session::flash('success', 'Mua hàng thành công');
        return redirect('index');
    }
    //Hóa đơn
    public function hoadon($role,Request $request)
    {
        $makh = User::where('username',$role)->get()->first();

        $hoadon = hdon::where('makh',$makh->makh)->get();
        //    dd($hoadon);
        return view('ans.PHP.hoadon',compact('hoadon'));
    }
    //Chi tiết hóa đơn
    public function chitiethoadon($mahd,Request $request)
    {

        $hoadon = DB::table('hdon')
            ->join('cthdon', 'hdon.mahd', '=', 'cthdon.mahd')
            ->where('cthdon.mahd',$mahd)
            ->get();
            return view('ans.PHP.cthoadon',compact('hoadon'));
    }
    //xử lý cập nhật giỏ hàng
    public function xlcngiohang(Request $request)
    {
        if (Request()->ajax()) {
            $idsp = $request->get('idsp');
            $qty = $request->get('qty');

            $cart = $request->session()->get('cart');
            foreach($cart as $key => $c){
                if($c['idsp']==$idsp){
                    if($qty == 0){
                        unset($cart[$key]);
                    }
                    else{
                        $cart[$key]['qty'] = $qty;
                    }
                    break;
                }
            }
            $request->session()->put('cart',$cart);
            echo 'ok';
       }
    }
    //thông tin người dùng
    public function thongtinnguoidung(Request $request, $username)
    {
        $ttnd = User::where('username',$username)->get();
        return view('ans.PHP.thongtinnguoidung',compact('ttnd'));
    }
    //đổi mật khẩu
    public function doimatkhau(Request $request, $makh)
    {

        $mkc= $request->mkc;
        $mkm = Hash::make($request->mkm);
        $nlmkm = $request->nlmkm;
        $ttnd = User::where('makh',$makh)->get();
        foreach ($ttnd as $key => $value) {
           if(Hash::check($mkc, $value->password)){
               if(Hash::check($nlmkm, $mkm)){
                DB::table('user')->where('makh',$makh)->update(['password'=>$mkm]);
                Session::flash('success', 'Đổi mật khẩu thành công');
                return redirect('index');
               }
               else{
                Session::flash('error', 'Nhập lại mật khẩu mới không chính xác');
                return redirect('index');
               }

           }
           else{
            Session::flash('error', 'Mật khẩu cũ không chính xác');
            return redirect('index');
           }
        }

    }
}
