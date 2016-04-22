<?php
include('../controller/session.php');
if(!isset($_SESSION)){	
	echo '<script>alert("you must login");</script>';
	header("Location : index.php");
}

if ($_SESSION['tipe_user'] == "1"){
include ('hnilai.php');
	if (isset($_GET['id'])&& $_GET['id']='input'){
		include ('inputnilai.php');
	}else{
		include ('dnilai.php');
	}
include ('fnilai.php');
}else if ($_SESSION['tipe_user'] == "2"){
include ('hnilai.php');
include ('mnilai.php');
include ('fnilai.php');
}

?>