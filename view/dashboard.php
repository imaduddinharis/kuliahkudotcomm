<?php
include('../controller/session.php');
if(!isset($_SESSION)){	
	echo '<script>alert("you must login");</script>';
	header("Location : index.php");
}

if ($_SESSION['tipe_user'] == "1"){
	include ('head.php');
include ('dmenu.php');
include ('foot.php');
 }else if ($_SESSION['tipe_user'] == "2"){
	 include ('head.php');
include ('mmenu.php');
include ('foot.php');
 }


?>