<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    
    public function postRegister(Request $request) {
        // Kiểm tra dữ liệu vào
        $allRequest  = $request->all();
        $validator = $this->validator($allRequest);

        if ($validator->fails()) {
            // Dữ liệu vào không thỏa điều kiện sẽ thông báo lỗi
            Session::flash('error', 'Đăng ký thành viên thất bại!');
            return redirect('index');
        } else {
            // Dữ liệu vào hợp lệ sẽ thực hiện tạo người dùng dưới csdl
            if( $this->create($allRequest)) {
                // Insert thành công sẽ hiển thị thông báo
                Session::flash('success', 'Đăng ký thành viên thành công!');
                return redirect('index');
            } else {
                // Insert thất bại sẽ hiển thị thông báo lỗi
                Session::flash('error', 'Đăng ký thành viên thất bại!');
                return redirect('index');
            }
        }
    }

    protected function validator(array $data)
{
	return Validator::make($data,
		[
			'name' => 'required|string|max:255',
			'phonenumber' => 'required|string|max:10',
			'password' => 'required|string|min:3|confirmed',
		],
		[
			'name.required' => 'Họ và tên là trường bắt buộc',
			'name.max' => 'Họ và tên không quá 255 ký tự',
			'password.required' => 'Mật khẩu là trường bắt buộc',
			'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
			'password.confirmed' => 'Xác nhận mật khẩu không đúng',
		]
	);
}



    protected function create(array $data)
    {
        return User::create([
            'makh'=>(string) Str::uuid(1),
            'tenkh' => $data['name'],
            'username' => $data['username'],
            'sdt' => $data['phonenumber'],
            'role' => 'user',
            'anhdaidien'=> 'avatar.jpg',
            'diachi' => $data['address'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function getRegister() {
        return view('ans.Register.register');
    }
}
