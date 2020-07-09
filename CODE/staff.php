<?php
include('staff_login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: staff_profile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>

<title>LOGIN FORM DESIGN</title>
  <link rel="stylesheet" type="text/css" href="style1.css">

<body>
     <div class="loginbox">
     <img src=2nd.jpg class="avatar">
     <h1>LOGIN HERE</h1>
    
    <form action="" method="post">
    <p>USERNAME</p>
    <input id="name" name="username" placeholder="username" type="text">
    <p>PASSWORD</p>
    <input id="password" name="password" placeholder="**********" type="password"><br></br>
   <input name="submit" type="submit" value=" Login ">
   <span> <?php echo $error; ?> </span>
   <a href="#">LOST YOUR PASSWORD?</a>
  
   </form>
     </div>

</body>

</head>

</html>
