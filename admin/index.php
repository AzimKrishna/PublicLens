<?php

error_reporting(0);

if(!isset($_GET['pwd'])){
  header("Location: ../index.php");
}
if($_GET['pwd']!='12345'){
  header("Location: ../index.php");
}
include '../db/config.php';
session_start();

if (isset($_SESSION["uname"])){
	header("Location: ../index.php");
}
if (isset($_SESSION["auname"])){
	header("Location: dash.php");
}

if (isset($_POST["alogin"])) {
	$auname = mysqli_real_escape_string($conn, $_POST["uname"]);
	$apwd = mysqli_real_escape_string($conn, md5($_POST["pwd"]));
  
	$check_user = mysqli_query($conn, "SELECT * FROM admintble WHERE auname='$auname' AND apwd='$apwd' ");
  
	if (mysqli_num_rows($check_user) > 0) {
	  $row = mysqli_fetch_assoc($check_user);
	  $_SESSION["auname"] = $row['auname'];
	  header("Location: dash.php");
	}else{
        echo "<script>alert('Login details is incorrect. Please try again.');</script>";
	}
}
  
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin login</title>
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons icons used -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
  </head>
  <?php
include '../codes.php';
?>
  <body>

  <nav>
    
    <div class="logo"> <i class="bx bx-target-lock lgo"></i>Admin Panel</div>
      <div class="nav-links">
        <ul class="links">
          <li><a href="../index.php">Home</a></li>
        </ul>
      </div>
  </nav>

  <div class="home-section">
    <!-- <div class="bg-art-small">
        <img src="../img/bg2.jpg" alt="">
        <div class="bg-art-quote">
            <div class="bg-art-quote-container">
            <h1><mark>Login or signup </mark></h1> 
            </div>
        </div>
    </div> -->
    <div class="login-holder">
        <div class="test" style="width: 30%; margin: 0 auto;">
            <div class="forms-holder-admin">
            <div class="forms-holder-login-admin">
                <div id="bar-new"></div><br> 
                <form action="" method="post">
                    <h1>Admin login</h1><br><br>
                    <label for="uname">Username</label><br>
                    <input type="text" name="uname" id="uname" maxlength="12" required><br><br>
                    <label for="pwd">Password</label><br>
                    <input type="password" name="pwd" id="pwd" required><br><br><br>
                    <button type="submit" name="alogin">Login <i class='bx bxs-chevron-right' ></i></button>
                </form>
            </div>
        </div>
        </div>
        
    </div>
</div>


<?php
echo $footer_admin;
?>




 