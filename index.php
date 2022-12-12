<?PHP
$ip = $_SERVER['REMOTE_ADDR'];
$handle = fopen("data.txt", "a");
fwrite($handle, "<br>IP: $ip \r\n ");
fclose($handle);

?>
<?php

error_reporting(0);
include 'db/config.php';
session_start();
?>
<?php

$sql_news = "SELECT * FROM news ORDER BY date DESC LIMIT 3; ";
$news_data=mysqli_query($conn, $sql_news);

$sql_rand="SELECT * FROM apr_miss ORDER BY RAND() LIMIT 3;";
$rand_data=mysqli_query($conn, $sql_rand);

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
echo $header;
?>
<script>
      function gettouch(){ 
                window.location.href = "about-us/contact.php?isScroll="+1 ;
    }
</script>
    <div class="home-section">
      <!-- <p>hello</p> -->
      <div class="home-image">
         <img src="img/bg1.jpg" alt="Image" width="100%" height="400px">
         <span id="quote"><h1><mark>We never stop caring</mark></h1>
            <mark>We are the only 24x7 helpline for anyone <br></mark>
            <mark>affected by someone going missing.<br></mark>
            <mark>For support call 90XX XXXX.</mark>
          </span>
      </div>
      <div class="btns-image-footer">
        <a href="#"><button id="btn1">Emergency  <i class='bx bxs-chevron-right' ></i></button></a>
        <a href="contact.php"><button id="btn2">Donate  <i class='bx bxs-chevron-right' ></i></button></a>
      </div>
      <div class="recent-display">
        <span id="quote2">Have you seen<br>someone?</span>
        <span id="quote3">Yes? Click the image<i class='bx bxs-chevron-right' ></i></span>
        <div class="recent-images">
          <?php
            if(mysqli_num_rows($rand_data) > 0){
              while($prls = mysqli_fetch_assoc($rand_data)){
              ?>   
                <div class="img-holder" onclick="location.href= 'search/popup/popup.php?id=<?php echo $prls['p_id']; ?>';">
                  <img src="uploads/reports/pimg/<?php echo $prls['pimg_newname'];?>" alt=""><br>
                  <a href="#">
                  <span><b><?php echo $prls['flname'];?></b></span><br>
                  <span><?php echo $prls['city'];?></span></a>
                </div>      
              <?php
              }
            }
          ?>
        </div>
      </div>
      <div class="our-vision">
        <!-- <h2>_</h2> -->
        <div id="bar"></div><br>
        <span id="vision">Offering a lifeline to everyone</span><br>
        <span id="quote4">Our mission is to be a lifeline to every missing person, and every family member <br> 
        and friend left behind.
        Our vision is for every misssing child and adult, and<br>
         every loved one left behind, to find help, hope and a safe way to reconnect.<br>
        </span>
        <a href="about-us"><button id="btn3">Read More  <i class='bx bxs-chevron-right' ></i></button></a>
      </div>
      <div class="news">
        <span id="quote5">Latest news from PublicLens</span>
        <div class="news-holder">
        <?php
          if(mysqli_num_rows($news_data) > 0){
            while($news = mysqli_fetch_assoc($news_data)){
            ?>   
              <div class="news-pic-container">
               <img src="img/news/<?php echo $news['nimage'];?>" alt="news"><br>
               <div class="news-desc">
                <span id="news-date"><?php echo $news['date'];?></span><br>
                <span id="news-desc"><?php echo $news['ndesc'];?></span>
               </div>          
              </div>      
            <?php
            }
          }
         ?>
        </div>
        <a href="news.php"><button id="btn4">Read all news  <i class='bx bxs-chevron-right' ></i></button></a>
        
      </div>
      <?php 
      echo $totalk;
      ?>
    </div>
<?php
echo $footer;

?>



