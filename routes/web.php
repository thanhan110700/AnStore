<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anstore;
use App\Http\Controllers\iPadController;
use App\Http\Controllers\iPhoneController;
use App\Http\Controllers\admin;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('index',function(){
	return view('.ans.PHP.index');
});

//
Route::get('signup',function(){
	return view('ans.Signup.signup');
});


Route::post('actionsignup','anstore@signup')->name('actionsignup');


Route::get('addcustomers', function(){
	$customers = new App\customers();

	$customers->tenkh= 'Suares';
	$customers->usernamekh = 'suares';
	$customers->passkh ='111';
	$customers->sdt='1234567890';
	$customers->diachi='Uruguay';

	$customers->save();
	echo "OK";
});
//trang iphone
Route::get('/iphone', [iPhoneController::class, 'iphone']);
//xem chi tiết iphone
Route::get('/xemchitietiphone/{idsp}', [iPhoneController::class, 'xemchitietiphone']);
//trang ipad
Route::get('/ipad', [iPadController::class, 'ipad']);
//xem chi tiết ipad

Route::get('/xemchitietipad/{idsp}', [iPadController::class, 'xemchitietipad']);
// Thêm sp vào giỏ hàng
Route::get('addtocart/{idsp}', [anstore::class, 'getaddtocart']);
//Xóa sp ra giỏ hàng
Route::get('deletetocart/{idsp}', [anstore::class, 'getdeletetocart']);
//Xóa giỏ hàng
Route::get('deleteallcart', [anstore::class, 'getdeleteallcart']);
//Thanh toán
Route::get('thanhtoan', [anstore::class, 'thanhtoan']);
//giỏ hàng
Route::get('giohang',function(){
    return view('ans.php.giohang');
});
//cập nhật thông tin kh
Route::get('update/{makh}', [anstore::class, 'update']);
//tìm kiếm sản phẩm
Route::get('search', [anstore::class, 'search']);
//Mua hàng
Route::get('muahang/{makh}', [anstore::class, 'muahang']);
//Hóa đơn

Route::get('hoadon/{role}', [anstore::class, 'hoadon']);
//chi tiết hóa đơn
Route::get('chitiethoadon/{mahd}', [anstore::class, 'chitiethoadon']);
//xử lý cập nhật giỏ hàng
Route::get('xlcngiohang/{idsp}/{qty}', [anstore::class, 'xlcngiohang']);
//Thông tin người dùng
Route::get('thongtinnguoidung/{username}', [anstore::class, 'thongtinnguoidung']);
//Đổi mật khẩu
Route::get('doimatkhau/{makh}', [anstore::class, 'doimatkhau']);
// Đăng ký thành viên

Route::get('register', [RegisterController::class, 'getRegister']);
Route::post('register', [RegisterController::class, 'postRegister']);

// Đăng nhập và xử lý đăng nhập
Route::get('login', [LoginController::class, 'getLogin'])->name('login');
Route::post('login', [LoginController::class, 'postLogin'])->name('login');
// Đăng xuất
Route::get('logout', [anstore::class, 'getLogout']);
//







//ADMIN
Route::get('admin',function(){
	return view('.ans.Admin.admin');
});
//quản lý sản phẩm
Route::get('admin/qlsp', [admin::class, 'adminqlsp']);
//quản lý sản phẩm phân loại
Route::get('admin/phanloai', [admin::class, 'adminqlsppl']);


//sửa sản phẩm iphone
Route::get('admin/suathongtinspiphone', [admin::class, 'adminsttspiphone']);
//sửa sản phẩm iphone
Route::post('admin/suathongtinspiphone', [admin::class, 'adminsttspiphone']);
//action sửa sản phẩm iphone
Route::post('admin/actionsuathongtinspiphone', [admin::class, 'actionsttspiphone']);
//action xóa sản phẩm
Route::post('admin/xoaspiphone', [admin::class, 'actionxoaspiphone']);
//them sản phẩm iphone
Route::get('admin/themspiphone', [admin::class, 'admintspiphone']);
//action them sản phẩm iphone
Route::post('admin/actionthemspiphone', [admin::class, 'actionthemspiphone']);


//sửa sản phẩm ipad
Route::get('admin/suathongtinspipad', [admin::class, 'adminsttspipad']);
//sửa sản phẩm ipad
Route::post('admin/suathongtinspipad', [admin::class, 'adminsttspipad']);
//action sửa sản phẩm ipad
Route::post('admin/actionsuathongtinspipad', [admin::class, 'actionsttspipad']);
//action xóa sản phẩm
Route::post('admin/xoaspipad', [admin::class, 'actionxoaspipad']);
//them sản phẩm ipad
Route::get('admin/themspipad', [admin::class, 'admintspipad']);
//action them sản phẩm ipad
Route::post('admin/actionthemspipad', [admin::class, 'actionthemspipad']);


//quản lý khách hàng
Route::get('admin/qlkh', [admin::class, 'adminqlkh']);
//Danh sách đơn hàng
Route::get('admin/dsdh', [admin::class, 'admindsdh']);
//Chi tiết đơn hàng
Route::get('admin/chitiethoadon/{mahd}', [admin::class, 'adminchitiethoadon']);
//xử lý cập nhật
Route::get('admin/xlcnttdonhang', [admin::class, 'adminxlcn']);
//xử lý cập nhật
Route::get('admin/doanhthu', [admin::class, 'admindoanhthu']);
//Lọc hóa đơn
Route::get('admin/lochoadon', [admin::class, 'adminlochoadon']);
//tìm khách hàng theo tên
Route::get('admin/timtheoten', [admin::class, 'admintimtheoten']);
//lọc khách hàng
Route::get('admin/nhieudenit', [admin::class, 'adminnhieudenit']);
//Xem doanh thu
Route::get('admin/xemdoanhthu', [admin::class, 'adminxemdoanhthu']);
//Xem doanh thu
Route::post('admin/xemdoanhthu2', [admin::class, 'adminxemdoanhthu2']);
