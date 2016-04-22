<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['judul']) || empty($_POST['password'])) {
header("location: /kuliahkudotcom/view/?e=error");
}
else
{
// Define $username and $password
$username=$_POST['judul'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("kuliahkudotcom", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from tb_user where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
		
    $c = mysql_fetch_array($query);
        $_SESSION['username'] = $c['username'];
        $_SESSION['tipe_user'] = $c['tipe_user'];
		$_SESSION['mail']=$c['email'];
		$u = $c['user_id'];
		$tgl= gmdate("Y-m-d", time()+60*60*7);
		 if($c['tipe_user']=="1"){
        $qq = mysql_query("select * from tb_dosen where user_id='$u'", $connection);
		$d = mysql_fetch_array($qq);
		$_SESSION['nama']=$d['nama'];
		$_SESSION['id']=$d['nip'];
		$_SESSION['path']=$d['photo'];
		$cektanggal=mysql_query("select * from tb_pertemuan where tanggal='$tgl'");
		if(mysql_num_rows($cektanggal) > 0){
			header("location: /kuliahkudotcom/view/dashboard.php?id=xxx");
			$_SESSION['presensi']='kelas';
		}else{
			header("location: /kuliahkudotcom/view/dashboard.php");
		}
		}else if($c['tipe_user']=="2"){
        $qq = mysql_query("select * from tb_mahasiswa where user_id='$u'", $connection);
		$d = mysql_fetch_array($qq);
		$_SESSION['nama']=$d['nama'];
		$_SESSION['id']=$d['nim'];
		$_SESSION['path']=$d['photo'];
		$i=$d['nim'];
		$cek=mysql_query("select * from tb_trans_kehadiran where tanggal_pertemuan='$tgl' AND nim = '$i'");
		if(mysql_num_rows($cek) > 0){
			header("location: /kuliahkudotcom/view/dashboard.php?id=hadir");
			$_SESSION['presensi']='hadir';
		}else{
			$cektanggall=mysql_query("select * from tb_pertemuan where tanggal='$tgl'");
		if(mysql_num_rows($cektanggall) > 0){
			header("location: /kuliahkudotcom/view/dashboard.php?id=xxx");
		}else{
			header("location: /kuliahkudotcom/view/dashboard.php");
		}
		}
		}
		
}else {
header("location: /kuliahkudotcom/view/?e=error");
}
mysql_close($connection); // Closing Connection
}
}
?>