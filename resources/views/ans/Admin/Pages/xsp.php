<?php 		
session_start();
if ($_SESSION['username']=='admin') {
	$con = mysqli_connect('localhost','root','','anstore');
	mysqli_set_charset($con, 'UTF8');
	if ($_GET['pl']=='iphone') {
		$sqlxsp = "DELeTE FROM `spiphone` WHERE idsp='".$_GET['idsp']."'";
		if ($kqsqlxsp = mysqli_query($con,$sqlxsp)) {
			header("Location: ../admin.php?btn=qlsp&alert=xtc");
			exit();
	}
	}
	if ($_GET['pl']=='ipad') {
		$sqlxsp = "DELeTE FROM `spipad` WHERE idsp='".$_GET['idsp']."'";
		if ($kqsqlxsp = mysqli_query($con,$sqlxsp)) {
			header("Location: ../admin.php?btn=qlsp&alert=xtc");
			exit();
	}
	}

}
?>