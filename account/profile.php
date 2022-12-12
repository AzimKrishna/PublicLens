<?php
session_start();
error_reporting(0);
include '../db/config.php';

if (!isset($_SESSION["uname"])){
	header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My profile</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../img/fav.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons icons used -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
  </head>
<?php

include '../codes.php';
?>
 <body>

<nav>
  
  <div class="logo"> <i class="bx bx-target-lock lgo"></i>PublicLens</div>
<!-- <div class="slgn">Keeping your loved ones safe</div> -->
    <div class="nav-links">
      <ul class="links">
        <li><a href="../index.php">Home</a></li>
        <li>
          <a href="#">Report <i class="bx bxs-chevron-down arrow adar"></i></a>
          <ul class="addhere-smenu smenu">
            <li><a href="../add/get-help.php">Missing Person</a></li>
            <li><a href="../add/sighting.php">Found Person</a></li>

          </ul>
        </li>
        <li>
          <a href="#">Search <i class="bx bxs-chevron-down arrow srar"></i></a>
          <ul class="addhere-smenu smenu">
            <li><a href="../search/mperson.php">Missing Person</a></li>
            <li><a href="../search/fperson.php">Found Person</a></li>

          </ul>
        </li>
        <li><a  href="../about-us/contact.php">Contact Us</a></li>
        <li><a class="active" href="../db/logout.php">Logout <i class="bx bx-exit" ></i></a></li>
      </ul>
    </div>
</nav>
<div class="home-section">
    <div class="bg-art-small">
        <img src="../img/bg2.jpg" alt="">
        <div class="bg-art-quote">
            <div class="bg-art-quote-container">
            <h1><mark>Profile</mark></h1> 
            </div>
        </div>
    </div>
    <div class="forms-holder" style="height: 1000px;">
        <div class="forms-holder-login" style="height: 900px;">
            <div id="bar-new"></div><br>
            <form action="" method="post">
                <h1>My profile</h1><br><br>
                <label for="flname">Full Name *</label><br>
                <input type="text" name="flname" id="flname" value="<?=$_SESSION["flname"] ;?>"disabled><br><br>
                <label for="address1">Address *</label><br>
                <input type="text" name="address1" id="address1" value="<?=$_SESSION["address1"] ;?>"disabled><br><br>

                <label for="pno">Phone *</label><br>
                <input type="tel" name="pno" id="pno" value="<?=$_SESSION["pno"] ;?>"disabled><br><br>
                <label for="dob">Date of birth *</label><br>
                <input type="date" name="dob" id="dob" value="<?=$_SESSION["dob"] ;?>"disabled><br><br>
                <label for="email">Email *</label><br>
                <input type="email" name="email" id="email" value="<?=$_SESSION["uname"] ;?>"disabled><br><br>
                <label for="gid">Govt. ID *</label><br>
                <input type="text" name="gid" id="gid" value="<?=$_SESSION["gid"] ;?>"disabled><br><br><br>
                <button disabled="disabled" class="btn2">Update</button>
                <button type="button" style="margin-left:200px;" onclick="location.href='../index.php';">Home</button>
            </form>
        </div>
    </div>

</div>


<?php
echo $footer;
?>