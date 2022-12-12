<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Our vision</title>
    <link rel="icon" type="image/x-icon" href="../img/fav.ico">
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons icons used -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
  </head>
<?php
include '../codes.php';
echo $header4;
?>
<div class="bg-art">
        <img src="../img/bg2.jpg" alt="">
        <div class="bg-art-quote">
            <div class="bg-art-quote-container">
            <h1><mark>About the <?php echo $pblc;?> </mark></h1> 
            <h1><mark><?php echo $lens;?>  program</mark></h1>
            <span><mark>We are an independent funded organization,</mark></span> <br>
            <span><mark>and the onlylifeline for</mark></span><br>
            <span><mark>missing poepleand their families in</mark></span><br>
            <span><mark>India.</mark></span><br>
        </div>
</div>
<div class="home-section">
    <div class="about-us-container">
      <div class="about-us-quote">
        <span>
          <?php echo $about_us; ?>
        </span>
      </div>
      <div class="about-us-cards">
        <div class="left-card">
          <h1>How we help</h1><br>
          <img src="../img/about-us/1.jpg" alt="">
        </div>
        <div class="right-card">
          <span>Our missing is to be a lifeline to every missing person, and every family member and friend left behind. Find out what we do.</span><br>
          <a href="#"><button>Read more <i class='bx bxs-chevron-right' ></i></button></a>
        </div>
        <div class="right-card-extra">
          <div id="bar-new"></div><br>
          <h1>Who we are</h1><br>
          <span>Read more about our dedication and passionate staff, volunteers, trustees, ambassadors and supporters that make up the incredible Missing People community.</span><br>
          <a href="#"><button>View more <i class='bx bxs-chevron-right' ></i></button></a>
        </div>
        <div class="left-card">

          <img src="../img/about-us/2.jpg" alt="">
        </div>
        <div class="left-card">
          <h1>Work for us</h1><br>
          <img src="../img/about-us/3.jpeg" alt="">
        </div>
        <div class="right-card">
          <span>Would you like to work for a dynamic, caring organisation which really makes a difference to vulnerable people throughout India, If yes join us on this journey.</span><br>
          <a href="#"><button>Be a partner <i class='bx bxs-chevron-right' ></i></button></a>
        </div>

      </div>
    </div>

</div>


<?php
echo $footer;

?>
