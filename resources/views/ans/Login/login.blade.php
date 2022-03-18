@extends('templates.login')
@section('title','Đăng nhập')
@section('content')
<?php //Hiển thị thông báo thành công?>
@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
@if ($errors->any())
	<div class="alert alert-danger alert-dismissible" role="alert">
		<ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
<div class="container" style="margin-top:5vh;">
	<div class="row">
		<div class="col-md-8"></div>
		<div class="col-md-4">
			<div class="panel">
				<div class="panel-body">
					<form role="form" action="{{ url('/login') }}" method="POST">
						{!! csrf_field() !!}
						<fieldset>
							<div class="row">
								<div class="center-block">
									<p align='center' style="font-size:50px; color:white;"><b>AnStore</b></p>
								</div>
							</div>
							<div class="row form-log">
								<div class="col-sm-12 col-md-12">
									<div class="form-group">
										<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
											<input class="input-username" placeholder="Tên đăng nhập" name="username" type="text" autofocus>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
											<input class="input-username" placeholder="Mật khẩu" name="password" type="password" value="">
										</div>
									</div>
									<div class="div-btn">
										<input type="submit" class="btn-dangnhap" value="Đăng nhập">
									</div>
									<div class="login-help" align='center' style="padding-top:4em;">
										<a href="{{ url('register') }}" >Đăng ký</a> - <a href="#" >Quên mật khẩu</a>
									</div>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<style>

</style>
@endsection
