<?php
include('../controller/session.php');
if(!isset($_SESSION)){	
	echo '<script>alert("you must login");</script>';
	header("Location : index.php");
}
if ($_SESSION['tipe_user'] == "1"){
include ('htugas.php');
include ('dtugas.php');
include ('ftugas.php');
 }else if ($_SESSION['tipe_user'] == "2"){
include ('htugas.php');
include ('mtugas.php');
include ('ftugas.php');

 }

?>