<?php
include('staff_session.php');
if(!isset($_SESSION['login_user'])){
header("location: staff.php"); // Redirecting To Home Page
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>STAFF PORTAL</h2>
  <b><p>Welcome To SAKSHAM</p></b>
  <div class="btn-group btn-group-justified">
    <a href="fill_staff.html" class="btn btn-primary">Add New Scholarship</a>
    <a href="fill_staff_edit.html" class="btn btn-primary">Edit Old One</a>
    <a href="logout.php" class="btn btn-primary">Logout</a>
  </div>
</div>

</body>
</html>


