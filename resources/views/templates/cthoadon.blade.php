<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('CSS/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('CSS/hoadon.css')}}">
	<link href="../JS/index.js">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Lobster+Two&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Mukta|Anton&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto+Slab&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body style="background-color: #ecf0f1;">
    <div class="row" style="padding: 0px; margin: 0px;">
        <div class="col-sm-12">
            @include('.ans.General.menu')
        </div>
        <div class="col-sm-12" style="margin-top:10em;">
            @yield('content')
        </div>
        <div class="col-sm-12">
            @include('.ans.General.footer')
        </div>
    </div>
</body>
</html>
