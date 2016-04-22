<?php
include('../controller/session.php');
if(!isset($_SESSION)){	
	echo '<script>alert("you must login");</script>';
	header("Location : index.php");
}


if ($_SESSION['tipe_user'] == "1"){
include ('hlaporan.php');
include ('dlaporan.php');
include ('flaporan.php');
}else if ($_SESSION['tipe_user'] == "2"){
include ('hlaporan.php');
include ('mlaporan.php');
include ('flaporan.php');
}

?>