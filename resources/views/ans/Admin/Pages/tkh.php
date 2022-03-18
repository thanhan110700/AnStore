<!DOCTYPE html>
<html>
<head>
	<title>AnStore</title>
	<link rel="stylesheet" type="text/css" href="../CSS/qlsp.css">
  	<link href="https://fonts.googleapis.com/css?family=Lobster+Two&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Mukta|Anton&display=swap" rel="stylesheet">
  	<script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
</head>
<body style="background-color: #ecf0f1;">
	<div class="row" style="padding: 0px; margin: 0px;">
		<?php 
			$con = mysqli_connect('localhost','root','','anstore');
				mysqli_set_charset($con, 'UTF8');
			if ($_SESSION['username']=='admin') {
			?>
		<div class="col-sm-12 banner" style="padding-top: 1em;">
			<form method="POST">
				<p>Tên khách hàng</p>
				<input type="text" name="tenkh">
				<p>Tên đăng nhập</p>
				<input type="text" name="usernamekh">
				<p>Mật khẩu</p>
				<input type="password" name="password">
				<p>Nhập lại mật khẩu</p>
				<input type="password" name="repass">
				<p>Số điện thoại</p>
				<input type="text" name="sdt">
				<p>Địa chỉ</p>
				<input type="text" name="diachi"><br>
				<input type="submit" name="dangky" value="Thêm khách hàng">
			</form>
		</div>
		<?php }	?>
	</div>	
	<?php if (isset($_POST['dangky'])) {
			$sqlinsert = "iNSERT INTO `customers`(`tenkh`, `usernamekh`, `passkh`, `sdt`, `diachi`) VALUES ('".$_POST['tenkh']."','".$_POST['usernamekh']."','".$_POST['password']."','".$_POST['sdt']."','".$_POST['diachi']."')";
			if ($_POST['tenkh']==''|| $_POST['usernamekh']==''|| $_POST['password']==''|| $_POST['repass']==''|| $_POST['sdt']==''|| $_POST['diachi']=='') {
				echo "<script>
			alert('Vui lòng nhập đầy đủ thông tin!');
			</script>";
			exit();
			}
			if ($_POST['password'] != $_POST['repass']) {
				echo "<script>
			alert('Nhập lại mật khẩu sai!');
			</script>";
			exit();
			}
			if (mysqli_query($con,$sqlinsert)) {
			header("Location: ./admin.php?btn=qlkh&alert=tkhtc");
			exit();
			}
		} ?>
</body>
</html>