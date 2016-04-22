<?php
session_start();
if(isset($_SESSION) && $_SESSION['presensi'] == "kelas"){
	header("Location: dashboard.php?id=xxx");
}else if(isset($_SESSION) && $_SESSION['presensi'] == "hadir"){
	header("Location: dashboard.php?id=hadir");
}
?>