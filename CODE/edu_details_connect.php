<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: upload.html"); // Redirecting To Home Page
}
?>

