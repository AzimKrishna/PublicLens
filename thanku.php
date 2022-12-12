<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="img/fav.ico">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons icons used -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
  </head>
<?php
include 'codes.php';
echo $header4;
header( "refresh:4;url=about-us/index.php" );
?>
<div class="home-section" style="height: 700px;">
    <div class="login-holder" style="text-align: center;">
        <div class="test" style="width: 50%; margin: 0 auto; padding-top:200px; font-size: 20px;">
        <h1><b>Your entry has been submitted. <br>Thank you for using our service!</b></h1><br><br>
        <img src="img/stock/loading.gif" alt="" height="100px" weight="100px">
        </div>
        </div>
        
    </div>
</div>


<?php
echo $footer;

?>
