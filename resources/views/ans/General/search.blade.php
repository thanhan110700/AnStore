<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	.input-search{
		width: 22em;border-radius: 5px;border: 1px solid; height: 35px;
	}
	.input-search:focus{
		outline: none;
	}
</style>
<body>
<form method="GET" action="{{url('search')}}">
    <input type="text" class="input-search" name="inputsearch" placeholder="Nhập tên sản phẩm muốn tìm kiếm">
    <div style="position: absolute; margin-top: -27px;margin-left: 19.5em;cursor:pointer;" class="search">
        <button style="border:none; background:none;">
            <p class="glyphicon glyphicon-search">
            </p></button></div></form>
</body>
</html>
