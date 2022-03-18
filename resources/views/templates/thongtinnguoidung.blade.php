<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('CSS/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('CSS/thongtinkhachhang.css')}}">
	<link href="../JS/index.js">
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('sheet/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('sheet/ionicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('sheet/mine.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet">
	<script src="{{asset('javascript/myscript.js')}}"></script>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Lobster+Two&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Mukta|Anton&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">

    <title>@yield('title')</title>
    <style>
        .img-circle{
            width: 26em;
            height: 25em;
            border: solid #2c3e50 2px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .ten{
            font-family: 'Roboto Condensed', sans-serif;
            padding-top: 5em;
            font-size: 40px;
        }
        .input-mk{
            border: solid;
            border-top: none;
            border-left: none;
            border-right: none;
            background-color: white;

            width: 25em;
        }
        ::-webkit-input-placeholder {
            text-align: center;
        }
    </style>
</head>
<body>
        @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" style="padding-top:6em" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
@endif
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" style="padding-top:6em" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
    <div class="row" style="padding: 0px; margin: 0px;">
        <div class="col-sm-12">
            @include('.ans.General.menu')
        </div>
        <div class="col-sm-12" style="margin-top:5em;">
            @yield('content')
        </div>
        <div class="col-sm-12">
            @include('.ans.General.footer')
        </div>
    </div>
</body>
</html>
