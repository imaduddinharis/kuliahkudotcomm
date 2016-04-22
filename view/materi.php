<?php
include('../controller/session.php');
if(!isset($_SESSION)){	
	echo '<script>alert("you must login");</script>';
	header("Location : index.php");
}

if ($_SESSION['tipe_user'] == "1"){
include ('hmateri.php');
include ('dmateri.php');
include ('fmateri.php');
}else if ($_SESSION['tipe_user'] == "2"){
include ('hmateri.php');
include ('mmateri.php');
include ('fmateri.php');
}
?>