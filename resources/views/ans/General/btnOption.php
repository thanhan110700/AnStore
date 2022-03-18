<!DOCTYPE html>
<html>
<head>
	<title>AnStore</title>
	<link rel="stylesheet" type="text/css" href="../CSS/index.css">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Lobster+Two&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Mukta|Anton&display=swap" rel="stylesheet">

</head>
<body>
  
	<p align="center"><a <?php echo "href='xemchitiet.php?id=".$rowsp['idsp']."'"; ?> style ="color: blue"><input type="submit" name="btn-xct" class="btn-abc btnxct" value="Xem chi tiết" ></a></p>
<p align="center"><a href="#" style="color: orange"><input type="submit" name="btn-xct" class="btn-abc btntgh" value="Thêm giỏ hàng" ></a></p>
<p align="center"><a href="giohang.php" style="color: red"><input type="submit" name="btn-xct" class="btn-abc btnmua" value="Mua" ></a></p>
</body>
</html>