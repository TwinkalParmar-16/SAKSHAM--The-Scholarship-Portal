<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: bank_detail.html"); // Redirecting To Home Page
}
?>
