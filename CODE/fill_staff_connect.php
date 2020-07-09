<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location:fill_staff2.html"); // Redirecting To Home Page
}
?>
