<?php
include('../controller/session.php');
if(!isset($_SESSION)){	
	echo '<script>alert("you must login");</script>';
	header("Location : index.php");
}
if ($_SESSION['tipe_user'] == "2"){
include ('hkehadiran.php');
include ('mkehadiran.php');
include ('fkehadiran.php');
}else{
	echo '<script>alert("Not your area");</script>
	<meta http-equiv="Refresh" content="0; url=index.php"/>';
}
?>