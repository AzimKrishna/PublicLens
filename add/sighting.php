<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Report sighting</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../img/fav.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons icons used -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
  </head>
<?php
include '../codes.php';
echo $header2;
?>
<div class="bg-art-small">
    <img src="../img/bg2.jpg" alt="">
    <div class="bg-art-quote">
        <div class="bg-art-quote-container">
        <h1><mark>Sightings and giving </mark></h1> 
        <h1><mark>information</mark></h1>
        </div>
    </div>
</div>
<div class="home-section">
    <div id="bar"></div><br><br>
    <div class="content-table">
        <div class="gen-info">
            <span><?php echo $gen_info_sighting;?></span><br><br><br>
        </div>
        <div class="sighting-info">
            <h1>Sightings information</h1><br>
            <span><?php echo $sighting_info;?></span>
        </div>
        <div class="mightnotbemissing">
            <h1>Might not be Missing</h1><br>
            <span><?php echo $mightnotbe_missing;?></span>
        </div><br><br>
        <a href="report-sighting.php"><button>Report a sighting  <i class='bx bxs-chevron-right' ></i></button></a>
        <br>
    </div>
</div>

<?php
echo $footer;
?>