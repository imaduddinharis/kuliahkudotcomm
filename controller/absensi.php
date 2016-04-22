<?php
include("config.php");
$iid=$_GET['id'];
if($_POST['pertemuan']){
$ceknama=mysql_query("SELECT * FROM tb_dosen where nip = '$iid'");
$splitceknama=mysql_fetch_assoc($ceknama);
$nama = $splitceknama['nama'];
$sql= mysql_query("INSERT INTO tb_pertemuan values(NULL,'$nama',SYSDATE())");
if($sql!=0){
	header("Location:/kuliahkudotcom/view/dashboard.php?id=xxx");
	session_start();
	$_SESSION['presensi'] = 'kelas';
}else{
	echo'Failed';
}
}
if($_POST['presensi']){
$sql= mysql_query("INSERT INTO tb_trans_kehadiran values(NULL,'$iid',SYSDATE(),'hadir')");
if($sql!=0){
	header("Location:/kuliahkudotcom/view/dashboard.php?id=hadir");
	session_start();
	$_SESSION['presensi'] = 'hadir';
}else{
	echo'Failed';
}
}
?>