<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: student.php"); // Redirecting To Home Page
}
?>
<style>
.logout{
  float:right;
  font-size: 20px;
 
  }
  
  @import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width: 100%;
  position: relative
}

.searchTerm {
  float: left;
  width: 100%;
  border: 3px solid #337ab7;
  padding: 5px;
  height: 30px;
  border-radius: 5px;
  outline: none;
  color: #337ab7;
  position:absolute;
  margin-left:10px; 
}

.searchTerm:focus{
  color: #1a1a1a;

}

.searchButton {
  
  margin-left:5px;  
  right: -50px;
  width: 70px;
  height: 30px;
  border: 1px solid #337ab7;
  background: #337ab7;
  border-color: #2e6da4;
  text-align: center;
  color: #fff;
  border-radius: 3px;
  cursor: pointer;
  font-size: 20px;
   position: absolute;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 50%;
  
 margin-left: 500px;
 margin-bottom: 25px;
  
  
}

body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: white;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    margin-top:50px;
    


}
.closebtn:hover{

  text-decoration: none;
}

.abc{
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 16px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.abc:hover {
    color:#1a1a1a;
    text-decoration: none;
    font-size:18px;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.bahar
{
  margin-top: 30px;
}
.profile
{
width:150px;
height:150px;
margin-left:30px;
position:center;
}

</style>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


     

<div class="container">
  <h2>STUDENT PORTAL</h2>
  <a class="logout" href="logout.php" class="btn btn-primary">Logout</a>
  <p style="font-size:20px;font-family: algeria">Welcome to SAKSHAM</p>

 
  <div class="aao">
     <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <i id="welcome" style="margin-left: 30px;font-size:18px"> <i><?php echo $login_session; ?></i></i><br>
  <img class="profile"src="sakshif.jpg">
  
  <a class="abc" href="#">My Scholarships</a>
  <a  class="abc"href="#">Form Edit</a>
  <a class="abc" href="#">Account Settings</a>
  <a class="abc" href="#">Renew</a>

  <a class="abc" href="contactus.html">Contact Us</a>
</div>

<div class="bahar">
<span style="font-size:30px;cursor:pointer;margin-top: 50px " onclick="openNav()">&#9776; Profile</span>
<div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton" >search
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
 
</div>
    <br>
  <div class="btn-group btn-group-justified">
    <a href="fill_form.html" class="btn btn-primary">Fill The Form</a>
    </div><br>
     <div class="btn-group btn-group-justified">
    <a href="fill_form.html" class="btn btn-primary">All Scholarships </a>
    </div><br>
     
    <div class="btn-group btn-group-justified">
    <a href="fill_form.html" class="btn btn-primary">Available Scholarships</a>
    </div><br>
    <div class="btn-group btn-group-justified">
    <a href="fill_form.html" class="btn btn-primary">Upcoming Scholarships</a>
    </div><br>
 
</div>

</body>
</html>
