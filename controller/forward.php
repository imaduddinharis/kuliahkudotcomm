<?php
include('../controller/session.php');
if (isset($_SESSION) && $_SESSION['tipe_user'] == "2"){
header('location: mahasiswa/dashboard.html');
 } 
 else if (isset($_SESSION) && $_SESSION['tipe_user'] == "1"){
header('location: ../view/dosen/dashboard.html');
 } 
 ?>