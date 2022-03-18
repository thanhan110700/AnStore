<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('CSS/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('CSS/ctipad.css')}}">
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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>@yield('title')</title>
    <style>
    .container {
  width: 700px;
  margin: auto;
  text-align: center;
}
button {
  margin-right: 20em;
  width: 10em;
  height: 30px;
  margin-bottom: 10px;
  display: block;
  background-color: wheat;
  outline: none;
  border: none;
}
.myDIV {
  width: 100%;
  text-align: center;
  height: 80px;
  margin-bottom: 30px;
  display: inline-block;


}
.show{
    display: inline-block;
}
</style>


</head>
<body style="background-color: #ecf0f1;">
    <div class="row" style="padding: 0px; margin: 0px;">
        <div class="col-sm-12">
            @include('.ans.General.menu')
        </div>
        <div class="col-sm-12" style="margin-top:3em;">
            @yield('content')
        </div>
        <div class="col-sm-12">
            @include('.ans.General.footer')
        </div>
    </div>
</body>
</html>
