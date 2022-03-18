<?php
	session_start();
	$con = mysqli_connect('localhost','root','','anstore');
		$sqlkh = "sELECT usernamekh, passkh FROM `customers`";
		$kqkh = mysqli_query($con,$sqlkh);
		$sqlad = "sELECT usernameadmin, passwordadmin FROM `adminaccount`";
		$kqad = mysqli_query($con,$sqlad);
		if (isset($_POST['dn'])) {
			while ($rowkh = mysqli_fetch_array($kqkh)) {
				if ($_POST['username'] == $rowkh['usernamekh'] && $_POST['pass'] == $rowkh['passkh']) {
					$_SESSION['username'] = $_POST['username'];	
					header("Location: ../PHP/index.php");
					exit();

					
			}
				if ($_POST['username'] != $rowkh['usernamekh'] && $_POST['pass'] != $rowkh['passkh']) {
					header("Location: login.php");
					exit();

			}	
		}
		while ($rowad = mysqli_fetch_array($kqad)) {
				if ($_POST['username'] == $rowad['usernameadmin'] && $_POST['pass'] == $rowad['passwordadmin']) {
					$_SESSION['username'] = 'admin';
					header("Location: ../Admin/admin.php");
					exit();
					
				}
				if ($_POST['username'] != $rowad['usernameadmin'] && $_POST['pass'] != $rowad['passwordadmin']) {
					header("Location: login.php");
					exit();

				}	
			}
	}
?>