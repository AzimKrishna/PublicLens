<?php 
session_start();

?>
<?php
include 'db/config.php';

$sql_news = "SELECT * FROM news ORDER BY date DESC";
$news_data=mysqli_query($conn, $sql_news);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="img/fav.ico">
    <link rel="stylesheet" href=" css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons icons used -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
  </head>
<?php
include 'codes.php';
echo $header;
?>

<div class="home-section">
    <div class="bg-art-small">
        <img src=" img/bg2.jpg" alt="">
        <div class="bg-art-quote">
            <div class="bg-art-quote-container">
            <h1><mark>Community news </mark></h1>
            <span><mark>Find out the latest news and updaet </mark></span> <br>
            <span><mark>from the charity, and the community. </mark></span><br>
            </div>
        </div>
    </div>
        <div class="news-page-holders-line1">
            <span><?php echo $news_page_fline; ?></span>
        </div>
        <div class="allnews-conatainer">
            <h1>All news</h1><br>
            <select>
                <option>All category </option>
            </select><br><br>

            <div class="allnews">
                    <?php
                        if(mysqli_num_rows($news_data) > 0){
                            while($news = mysqli_fetch_assoc($news_data)){
                                ?>                                
                                    <div class="containers">
                                        <div class="card-image">
                                            <img src="img/news/<?php echo $news['nimage'];?>" alt="">
                                        </div>
                                        <div class="card-desc">
                                            <span id="news-date"><?php echo $news['date'];?></span><br>
                                            <span id="news-desc"><?php echo $news['ndesc'];?></span><br>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                    ?>
            </div>
        </div>
    <div class="get-in-touch">
        <div id="bar"></div>
        <span id="quote6">Subscribe to hear from us directly</span>  <br>
        <span id="quote6-desc">
            <?php echo $news_page_sub; ?>
        </span><br>
        <a href="#"><button>Subscribe now      <i class='bx bxs-chevron-right' ></i></button></a>
    </div>
</div>





<?php
echo $footer;

?>
