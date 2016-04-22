<?php
include("config.php");
if($_POST['inputnilai']){
$nim = $_POST['nim'];
$pertemuan = $_POST['pertemuan'];
$nilai = $_POST['nilai'];
$sql= mysql_query("INSERT INTO tb_nilai values(NULL,'$nim','$pertemuan','$nilai')");
if($sql!=0){
	header("Location:/kuliahkudotcom/view/dashboard.php");
}else{
	echo'Failed';
}
}
?>