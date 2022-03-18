<!DOCTYPE html>
<html>
<head>
	<title>AnStore</title>
	<link rel="shortcut icon" type="image/png" href="../Admin/dist/img/AdminLTELogo.png">
    <link rel="stylesheet" type="text/css" href="{{asset('CSS/index.css')}}">
    <script src="{{asset('JS/index.js')}}"></script>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Lobster+Two&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Mukta|Anton&display=swap" rel="stylesheet">
      <script>
            $(document).ready(function(){

                $('.btndangnhap').click(function (e) {
                    //xu ly class
                    $('.dangnhap').addClass('hienra');
                    $('.momo').addClass('hienra');
                });
                $('.btndangky').click(function (e) {
                    //xu ly class
                    $('.dangky').addClass('hienra');
                    $('.momo').addClass('hienra');
                });
                $('.nutclose, .momo').click(function (e) {
                    //xu ly class
                    $('.dangnhap').removeClass('hienra');
                    $('.momo').removeClass('hienra');
                });
                $('.nutclose, .momo').click(function (e) {
                    //xu ly class
                    $('.dangky').removeClass('hienra');
                    $('.momo').removeClass('hienra');
                });

                TweenMax.to($('.t1'),2,{x:550,opacity:1});
                TweenMax.to($('.t2'),2,{x:-250,opacity:1});
                TweenMax.to($('.t3'),2,{x:500,opacity:1});

                $(window).scroll(function () {
                    console.log($(window).scrollTop());
                    var vitri = $(window).scrollTop();
                    if(vitri >= 200){
                        TweenMax.to($('.img1'),2,{y:-100,opacity:1});
                    }
                    if(vitri >= 700){
                        TweenMax.to($('.img2'),2,{y:-100,opacity:1});
                    }
                    if(vitri >= 1500){
                        TweenMax.to($('.img3'),2,{y:-100,opacity:1});
                    }
                    if(vitri >= 2300){
                        TweenMax.to($('.img4'),2,{y:-100,opacity:1});
                    }
                    if(vitri >= 3100){
                        TweenMax.to($('.img5'),2,{y:-100,opacity:1});
                    }

                });
            });
        </script>
        <style>

        </style>
</head>
<body style="background-color: black;">
@if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" style="padding-top:3em" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
@endif
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" style="padding-top:3em;" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
	<div class="row" style="padding: 0px; margin: 0px;">
		<div class="col-sm-12" style="margin-top:-2.8em;">
			@include('.ans.General.menu')
		</div>
		<div class="col-sm-12 banner" style="padding-top: 10em;">

				<div  class="slogan" style="font-family: 'Anton', sans-serif;font-size: 5em;color: white; margin-bottom: 200px;"><p class="t1" style="opacity:1;float:left;">An Store</p><br><p class="t2" style="opacity:0;float:right;">Find the devices you love.</p><br><p class="t3" style="opacity:0;float:left;">
			We have it all.</p></div>
			<div class="img">
				<img src="https://www.apple.com/v/iphone-13-pro/c/images/overview/camera/intro/camera_system__f9pkhq4g2oy2_large.png" class="img-banner img1">
                <img src="https://mlessg81fle6.i.optimole.com/w:auto/h:auto/q:55/https://thecellguide.com/wp-content/uploads/2018/10/apple-iphone-xr-notification-issue.jpg"  class="img-banner img2">
                <img src="http://snappi-wpengine.netdna-ssl.com/wp-content/uploads/2019/09/Iphone-11-Pro-Banner.jpg" class="img-banner img3">
				<img src="https://etgeekera.files.wordpress.com/2016/09/iphone-7-banner.jpg"  class="img-banner img4">

			</div>

		</div>
		<div class="col-sm-12">
			@include('.ans.General.footer')
		</div>
	</div>
</body>
</html>
