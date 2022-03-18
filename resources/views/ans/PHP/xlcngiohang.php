<?php 
	session_start();
	$cart = $_SESSION['cart'];
	if (isset($_POST['id']) && isset($_POST['num'])) {
		$id = $_POST["id"];
		$soluong = $_POST['num'];
		
		if(array_key_exists($id, $cart))  //kiem tra da con sp chua
			{
				$cart[$id] = array(
					"idsp" => $cart[$id]["idsp"],
					"soluong" => $soluong,
					"tensp"=> $cart[$id]["tensp"],
					"hinhanh" => $cart[$id]["hinhanh"],
					"giasp" => $cart[$id]["giasp"]
			);
				if ($cart[$id]["soluong"]==0) {
					unset($cart[$id]);
					$_SESSION["ssp"]=$_SESSION["ssp"]-1;
				}
				$_SESSION['cart'] = $cart;
			}
	}

	if (isset($_GET['xoaspid'])) {
		unset($cart[$_GET['xoaspid']]);
		$_SESSION['cart'] = $cart;
		header("Location: giohang.php");
	
	} 
 ?>