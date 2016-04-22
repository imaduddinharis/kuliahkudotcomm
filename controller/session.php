<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("kuliahkudotcom");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['username'];
$tipe_check=$_SESSION['tipe_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select tipe_user from tb_user where username='$user_check' AND tipe_user='$tipe_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['tipe_user'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: /kuliahkudotcom/view/'); // Redirecting To Home Page
mysql_close($connection);
}
?>