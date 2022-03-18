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
use League\Flysystem\File;
use Session;
use Carbon\Carbon;

class admin extends Controller
{
    //quan ly san pham
    public function adminqlsp()
    {
        $btn = 'qlsp';
        return  view('ans.Admin.admin',compact('btn'));
    }
    //quan ly theo danh muc
    public function adminqlsppl(Request $request)
    {
        if($request->phanloai=='iphone')
        {
            $data = spiphone::all();
            $pl= 'iphone';
        }
        if($request->phanloai=='ipad')
        {
            $data = spipad::all();
            $pl= 'ipad';
        }
        $btn = 'qlsppl';
        return  view('ans.Admin.admin',compact('btn','data','pl'));
    }
    //sua thong tin iphone
    public function adminsttspiphone(Request $request)
    {
        $data = DB::table('spiphone')->where('idsp',$request->idsp)->get();
        $btn = 'ssp';
        $pl='iphone';
        return  view('ans.Admin.admin',compact('btn','data','pl'));
        Session::flash('success', 'Sửa Thành công!');
    }
    //action sua iphone
    public function actionsttspiphone(Request $request)
    {

        $file = $request->hinhanh;
        if(isset($request->hinhanh) && $request->input('giasp')!='' && $request->input('manhinh')!='' && $request->input('hdh')!='' && $request->input('ram')!='' && $request->input('bonhotrong')!='' && $request->input('cpu')!='' && $request->input('camerasau')!='' && $request->input('cameratruoc')!='' && $request->input('thesim')!='' && $request->input('dungluongpin')!='' && $request->input('ttsp')!=''){
            DB::table('spiphone')->where('idsp',$request->idsp)->update([
                'giasp'=>$request->giasp,
                'manhinh'=>$request->manhinh,
                'hdh'=>$request->hdh,
                'camerasau'=>$request->camerasau,
                'cameratruoc'=>$request->cameratruoc,
                'cpu'=>$request->cpu,
                'ram'=>$request->ram,
                'bonhotrong'=>$request->bonhotrong,
                'thesim'=>$request->thesim,
                'dungluongpin'=>$request->dungluongpin,
                'hinhanh'=>$file->getClientOriginalName(),
                'thongtinsp'=>$request->ttsp,]);
                $file->move('img/Sanpham',$file->getClientOriginalName());
                Session::flash('success', 'Sửa Thành công!');
        }
        if($request->input('giasp')!='' && $request->input('manhinh')!='' && $request->input('hdh')!='' && $request->input('ram')!='' && $request->input('bonhotrong')!='' && $request->input('cpu')!='' && $request->input('camerasau')!='' && $request->input('cameratruoc')!='' && $request->input('thesim')!='' && $request->input('dungluongpin')!='' && $request->input('ttsp')!=''){
            DB::table('spiphone')->where('idsp',$request->idsp)->update([
                'giasp'=>$request->giasp,
                'manhinh'=>$request->manhinh,
                'hdh'=>$request->hdh,
                'camerasau'=>$request->camerasau,
                'cameratruoc'=>$request->cameratruoc,
                'cpu'=>$request->cpu,
                'ram'=>$request->ram,
                'bonhotrong'=>$request->bonhotrong,
                'thesim'=>$request->thesim,
                'dungluongpin'=>$request->dungluongpin,
                'thongtinsp'=>$request->ttsp,]);
                Session::flash('success', 'Sửa Thành công!');
        }
        else{
            Session::flash('error', 'Sửa thất bại, có trường trống!!!');
            $data = DB::table('spiphone')->where('idsp',$request->idsp)->get();
            $btn = 'ssp';
            $pl ='iphone';
            return  view('ans.Admin.admin',compact('btn','data','pl'));
        }

            $data = spiphone::all();

            $phanloai = 'iphone';
            $btn = 'qlsppl';
            return redirect()->route('admin/phanloai',compact('phanloai'));
    }
    //action xoa iphone
    public function actionxoaspiphone(Request $request)
    {

        DB::table('spiphone')->where('idsp',$request->idsp)->delete();
        Session::flash('success', 'Xóa Thành công!');
        return redirect()->back();
    }




    //sua thong tin ipad
    public function adminsttspipad(Request $request)
    {
        $data = DB::table('spipad')->where('idsp',$request->idsp)->get();
        $btn = 'ssp';
        $pl ='ipad';

        return  view('ans.Admin.admin',compact('btn','data','pl'));

    }
    //action sua ipad
    public function actionsttspipad(Request $request)
    {

        $file = $request->hinhanh;
        if(isset($request->hinhanh) && $request->input('giasp')!='' && $request->input('manhinh')!='' && $request->input('hdh')!='' && $request->input('ram')!='' && $request->input('bonhotrong')!='' && $request->input('cpu')!='' && $request->input('camerasau')!='' && $request->input('cameratruoc')!='' && $request->input('ketnoimang')!='' && $request->input('trongluong')!='' && $request->input('ttsp')!=''){
            DB::table('spipad')->where('idsp',$request->idsp)->update([
                'giasp'=>$request->giasp,
                'manhinh'=>$request->manhinh,
                'hdh'=>$request->hdh,
                'camerasau'=>$request->camerasau,
                'cameratruoc'=>$request->cameratruoc,
                'cpu'=>$request->cpu,
                'ram'=>$request->ram,
                'bonhotrong'=>$request->bonhotrong,
                'ketnoimang'=>$request->ketnoimang,
                'trongluong'=>$request->trongluong,
                'hinhanh'=>$file->getClientOriginalName(),
                'thongtinsp'=>$request->ttsp,]);
                $file->move('img/Sanpham',$file->getClientOriginalName());
                Session::flash('success', 'Sửa Thành công!');
        }
        if($request->input('giasp')!='' && $request->input('manhinh')!='' && $request->input('hdh')!='' && $request->input('ram')!='' && $request->input('bonhotrong')!='' && $request->input('cpu')!='' && $request->input('camerasau')!='' && $request->input('cameratruoc')!='' && $request->input('ketnoimang')!='' && $request->input('trongluong')!='' && $request->input('ttsp')!=''){
            DB::table('spipad')->where('idsp',$request->idsp)->update([
                'giasp'=>$request->giasp,
                'manhinh'=>$request->manhinh,
                'hdh'=>$request->hdh,
                'camerasau'=>$request->camerasau,
                'cameratruoc'=>$request->cameratruoc,
                'cpu'=>$request->cpu,
                'ram'=>$request->ram,
                'bonhotrong'=>$request->bonhotrong,
                'ketnoimang'=>$request->ketnoimang,
                'trongluong'=>$request->trongluong,
                'thongtinsp'=>$request->ttsp,]);
                Session::flash('success', 'Sửa Thành công!');
        }
        else{
            Session::flash('error', 'Sửa thất bại, có trường trống!!!');
            $data = DB::table('spipad')->where('idsp',$request->idsp)->get();
            $btn = 'ssp';
            $pl ='ipad';
            return  view('ans.Admin.admin',compact('btn','data','pl'));
        }
            $data = spipad::all();
            $phanloai = 'ipad';
            $btn = 'qlsppl';
            return redirect()->route('admin/phanloai',compact('phanloai'));
    }
    //action xoa ipad
    public function actionxoaspipad(Request $request)
    {

        DB::table('spipad')->where('idsp',$request->idsp)->delete();
        Session::flash('success', 'Xóa Thành công!');
        return redirect()->back();
    }


    //action them san pham iphone
    public function actionthemspiphone(Request $request)
    {
        if(isset($request->hinhanh) && $request->input('idsp')!='' && $request->input('tensp')!='' && $request->input('giasp')!='' && $request->input('manhinh')!='' && $request->input('hdh')!='' && $request->input('ram')!='' && $request->input('bonhotrong')!='' && $request->input('cpu')!='' && $request->input('camerasau')!='' && $request->input('cameratruoc')!='' && $request->input('thesim')!='' && $request->input('dungluongpin')!='' && $request->input('ttsp')!=''){
        $file = $request->hinhanh;
        if(DB::table('spiphone')->insert([
            'idsp'=>$request->input('idsp'),
            'tensp'=>$request->input('tensp'),
            'giasp'=>$request->input('giasp'),
            'manhinh'=>$request->input('manhinh'),
            'hdh'=>$request->input('hdh'),
            'camerasau'=>$request->input('camerasau'),
            'cameratruoc'=>$request->input('cameratruoc'),
            'cpu'=>$request->input('cpu'),
            'ram'=>$request->input('ram'),
            'bonhotrong'=>$request->input('bonhotrong'),
            'thesim'=>$request->input('thesim'),
            'dungluongpin'=>$request->input('dungluongpin'),
            'hinhanh'=>$file->getClientOriginalName(),
            'thongtinsp'=>$request->input('ttsp'),
            'view'=>'0']))
            {
                $file->move('img/Sanpham',$file->getClientOriginalName());
                Session::flash('success', 'Thêm Thành công!');
            }
            else{
                Session::flash('error', 'Thêm Thất bại!, Vui lòng nhập đầy đủ!!');
            }
        }
            else{
                Session::flash('error', 'Thêm Thất bại!, Vui lòng nhập đầy đủ!!');
            }

        return  redirect()->back();
    }


    //action them san pham ipad
    public function actionthemspipad(Request $request)
    {

        if(isset($request->hinhanh) && $request->input('idsp')!='' && $request->input('tensp')!='' && $request->input('giasp')!='' && $request->input('manhinh')!='' && $request->input('hdh')!='' && $request->input('ram')!='' && $request->input('bonhotrong')!='' && $request->input('cpu')!='' && $request->input('camerasau')!='' && $request->input('cameratruoc')!='' && $request->input('ketnoimang')!='' && $request->input('trongluong')!='' && $request->input('ttsp')!=''){
            $file = $request->hinhanh;
            if(DB::table('spipad')->insert([
                'idsp'=>$request->input('idsp'),
                'tensp'=>$request->input('tensp'),
                'giasp'=>$request->input('giasp'),
                'manhinh'=>$request->input('manhinh'),
                'hdh'=>$request->input('hdh'),
                'camerasau'=>$request->input('camerasau'),
                'cameratruoc'=>$request->input('cameratruoc'),
                'cpu'=>$request->input('cpu'),
                'ram'=>$request->input('ram'),
                'bonhotrong'=>$request->input('bonhotrong'),
                'ketnoimang'=>$request->input('ketnoimang'),
                'trongluong'=>$request->input('trongluong'),
                'hinhanh'=>$file->getClientOriginalName(),
                'thongtinsp'=>$request->input('ttsp'),
                'view'=>'0'])){
                    $file->move('img/Sanpham',$file->getClientOriginalName());

                    Session::flash('success', 'Thêm Thành công!');
                }
                else{
                    Session::flash('error', 'Thêm Thất bại! Vui lòng nhập đầy đủ!!');
                }
        }
        else{
            Session::flash('error', 'Thêm Thất bại! Vui lòng nhập đầy đủ!!');
            }


        return  redirect()->back();
    }


    public function adminqlkh()
    {
        $data = User::all()->where('role','user');
        $btn = 'qlkh';
        return  view('ans.Admin.admin',compact('btn','data'));
    }
    public function admindsdh()
    {
        $data = hdon::all();
        $btn = 'dsdh';
        return  view('ans.Admin.admin',compact('btn','data'));
    }
    public function adminchitiethoadon($mahd)
    {
        $data = DB::table('Models/hdon')
            ->join('cthdon', 'hdon.mahd', '=', 'cthdon.mahd')
            ->join('user', 'hdon.makh', '=', 'user.makh')
            ->where('cthdon.mahd',$mahd)
            ->get();
        $btn = 'cthd';
        return  view('ans.Admin.admin',compact('btn','data'));
    }
    //xu ly cap nhat
    public function adminxlcn(Request $request)
    {
        hdon::where('mahd',$request->mahd)->update(['ttdonhang'=>$request->ttdonhang]);
        Session::flash('success', 'Cập nhật Thành công!');
        return redirect()->back();
    }
    //doanh thu
    public function admindoanhthu()
    {
        $data = hdon::where('ttdonhang','5')->get();
     //   dd($data);
        $btn = 'doanhthu';
        return  view('ans.Admin.admin',compact('btn','data'));
    }
    //lọc hóa đơn
    public function adminlochoadon(Request $request)
    {
        $ngay = $request->day;
        $thang = $request->month;
        $nam = $request->year;
        $data = hdon::whereRaw("ngayhd like '%$nam%-%$thang%-%$ngay'")->get();
        $btn = 'lochoadon';
        return  view('ans.Admin.admin',compact('btn','data'));
    }
    //tìm kh theo tên
    public function admintimtheoten(Request $request)
    {
        $tenkh = $request->inputsearch;
        $data = User::whereRaw("tenkh like '%$tenkh%'")->get();
        $btn = 'timtheoten';
        return  view('ans.Admin.admin',compact('btn','data'));
    }
    //lọc khách hàng
    public function adminnhieudenit(Request $request)
    {
       $data = User::get()->first()->hdon();
       dd($data);
    }

    public function adminxemdoanhthu(Request $request)
    {
        $date = Carbon::now('Asia/Ho_Chi_Minh');
        $datenow = $date->toDateString();
        if($request->locdoanhthu=='ngay'){
            $n = $date->subDay(1);
            $ngay = $n->toDateString();
            $data = hdon::whereRaw("ngayhd BETWEEN '$ngay' AND '$datenow' AND ttdonhang = 5")->get();
            $tg ='Ngày vừa rồi';
        }
        if($request->locdoanhthu=='tuan'){

            $t = $date->subWeek(1);
            $tuan = $t->toDateString();
            $data = hdon::whereRaw("ngayhd BETWEEN '$tuan' AND '$datenow' AND ttdonhang = 5")->get();
            $tg ='Tuần vừa rồi';
        }
        if($request->locdoanhthu=='thang'){
            $th = $date->subMonth(1);
            $thang = $th->toDateString();
            $data = hdon::whereRaw("ngayhd BETWEEN '$thang' AND '$datenow' AND ttdonhang = 5")->get();
            $tg ='Tháng vừa rồi';
        }
        if($request->locdoanhthu=='quy'){
            $q = $date->subMonth(3);
            $quy = $q->toDateString();
            $data = hdon::whereRaw("ngayhd BETWEEN '$quy' AND '$datenow' AND ttdonhang = 5")->get();
            $tg ='Quý vừa rồi';
        }
        if($request->locdoanhthu=='nam'){
            $na = $date->subYear(1);
            $nam = $na->toDateString();
            $data = hdon::whereRaw("ngayhd BETWEEN '$nam' AND '$datenow' AND ttdonhang = 5")->get();
            $tg ='Năm vừa rồi';
        }
        if($request->locdoanhthu==''){
            $data = hdon::where('ttdonhang','5')->get();
            $tg=NULL;
        }

        $btn = 'doanhthu';
        return  view('ans.Admin.admin',compact('btn','data','tg'));
    }
    public function adminxemdoanhthu2(Request $request)
    {
        $tg = 'Từ ngày: '.date("d-m-Y",strtotime($request->datestart))." đến ngày: ".date("d-m-Y",strtotime($request->dateend));
        $data = hdon::whereRaw("ngayhd BETWEEN '$request->datestart' AND '$request->dateend' AND ttdonhang = 5")->get();
        $btn = 'doanhthu';
        return  view('ans.Admin.admin',compact('btn','data','tg'));
    }
}
