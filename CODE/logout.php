<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: front_end.html"); // Redirecting To Home Page
}
?>
