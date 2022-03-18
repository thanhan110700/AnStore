<!DOCTYPE html>
<html>
<head>
	<title>AnStore</title>
	<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="{{asset('CSS/navbar.css')}}">


    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Mukta|Lobster+Two&display=swap" rel="stylesheet">



</head>
<style>

</style>
<body>

	<nav class="navbar navbar-fixed-top" style="background-color: black;height: 65px;">
  <div class="container-fluid" >
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="margin-top: 20px">
        <span class="icon-bar" style="background-color: white"></span>
        <span class="icon-bar" style="background-color: white"></span>
        <span class="icon-bar" style="background-color: white"></span>
      </button>
      <li class="nav navbar-nav" style="font-family: 'Lobster Two', cursive; font-size: 50px; padding-left: 2em;"><a href="{{url('index')}}" style="color: white;text-decoration: none;">AnStore</a></li>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" >

      <li class="nav navbar-nav" style="padding-top: 18px;padding-left: 1em;">@include('ans.General.search')</li>
      <ul class="nav navbar-nav" id="slsp1" style="float: right;padding-top: 8px;margin-right: 35px;">

        <li><a href="{{url('iphone')}}"><span>iPhone</span></a></li>
        <li><a href="{{url('ipad')}}"><span>iPad</span></a></li>
        <li><a href="#"><span>Mac</span></a></li>
        <li><a href="#"><span>Watch</span></a></li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
      <li><a href="{{url('giohang')}}"><span class="glyphicon glyphicon-shopping-cart" ></span><span>  Giỏ hàng
          </a></li>

        <li class="dropdown">
 			    <a href="#">
  			 <span>Tài khoản   </span><span class="glyphicon glyphicon-triangle-bottom"></span></a>
 			  <div class="dropdown-content">
               @if (!Session::has('role'))
               <a href="{{url('login')}}" style="text-decoration: none;"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Đăng nhập</span></a>
               <a href="{{url('register')}}" style="text-decoration: none;"><span class="glyphicon glyphicon-new-window"></span><span>&nbsp;&nbsp;Đăng ký</span></a>
               @else
               @php
                   $role = request()->session()->get('role');
               @endphp
               <a href="{{url('thongtinnguoidung',$role)}}" style="text-decoration: none;"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Thông tin cá nhân</span></a>
               <a href="{{url('hoadon',$role)}}" style="text-decoration: none;"><span class="glyphicon glyphicon-modal-window"></span>&nbsp;&nbsp;Hóa đơn</span></a>
               <a href="{{url('logout')}}" style="text-decoration: none;" ><span class="glyphicon glyphicon-new-window"></span>&nbsp;&nbsp;Đăng xuất</a>
               @endif

  			</div>
		</li>
      </ul>
    </div>
  </div>

</nav>
</body>
</html>
