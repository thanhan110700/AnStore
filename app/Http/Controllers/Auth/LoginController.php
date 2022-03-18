<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function postLogin(Request $request) {
        // Kiểm tra dữ liệu nhập vào
        $rules = [];
        $messages = [];
        $validator = Validator::make($request->all(), $rules, $messages);


        if ($validator->fails()) {
            // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
            return redirect('login')->withErrors($validator)->withInput();
        } else {
            // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
            $username = $request->input('username');
            $password = $request->input('password');

            if(Auth::attempt(['username' => $username, 'password' => $password])) {
                // Kiểm tra đúng email và mật khẩu sẽ chuyển trang

                if($username!='admin'){
                    $request->session()->put('role',$username);
                    return redirect('index');
                }
                
            }
            elseif($username=='admin'&&$password=='123'){
                $request->session()->put('role','admin');
                return redirect('admin');
            }
            else {
                // Kiểm tra không đúng sẽ hiển thị thông báo lỗi
                //dd(Auth::attempt(['username' => $username, 'password' => $password]));
                Session::flash('error', 'Tên đăng nhập hoặc mật khẩu không đúng!');
                return redirect('index');
            }
        }
    }




    public function getLogin() {
        return view('ans.Login.login');
    }
}
