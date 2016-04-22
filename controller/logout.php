<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: /kuliahkudotcom/view/"); // Redirecting To Home Page
}
?>