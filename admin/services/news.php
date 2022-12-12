<?php 
session_start();
if(!isset($_SESSION["auname"])){
  header("Location: ../../index.php");
}
?>
<?php
include '../../db/config.php';
include '../../codes.php';

$sql_news = "SELECT * FROM news ORDER BY date DESC";
$news_data=mysqli_query($conn, $sql_news);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>News panel</title>
    <link rel="stylesheet" href="../../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons icons used -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
  </head>
  <body>

<nav>
  
  <div class="logo"> <i class="bx bx-target-lock lgo"></i>Admin Panel</div>
    <div class="nav-links">
      <ul class="links">
        <li><a href="../dash.php">Home</a></li>
        <li>
          <a class="ahere" href="#">Report <i class="bx bxs-chevron-down arrow adar"></i></a>
          <ul class="addhere-smenu smenu">
            <li><a href="mp.php">Missing Person</a></li>
            <li><a href="fp.php">Sightings</a></li>

          </ul>
        </li>
        <li>
          <a href="#">Search <i class="bx bxs-chevron-down arrow srar"></i></a>
          <ul class="addhere-smenu smenu">
            <li><a href="mp-view.php">Missing Person</a></li>
            <li><a href="fp-view.php">Found Person</a></li>

          </ul>
        </li>
        <li><a href="enq.php" >Enquiries</a></li>
        <li><a href="news.php" class="active">News</a></li>
        <li><a href="../../db/logout.php">Logout <i class="bx bx-exit" ></i></a></li>
      </ul>
    </div>
</nav>
<div class="home-section">
<div class="bg-art-small">
        <img src="../../img/bg2.jpg" alt="">
        <div class="bg-art-quote" style="padding-top: 70px; font-size:40px;">
            <div class="bg-art-quote-container">
            <h1 style="font-size:40px; padding-top:50px"><mark>Admin news panel</mark></h1> 

            </div>
        </div>
    </div>
        <div class="allnews-conatainer">
            <h1 style="margin-top: 0px;">All news</h1><br>
            <select>
                <option>All category </option>
            </select>
            <button  onclick="window.location.href='addnews.php';" id="add-news">Add news</button>
            <button  onclick="window.location.href='delnews.php';" id="del-news">Delete news</button><br><br>

            <div class="allnews">
                    <?php
                        if(mysqli_num_rows($news_data) > 0){
                            while($news = mysqli_fetch_assoc($news_data)){
                                ?>                                
                                    <div class="containers">
                                        <div class="card-image">
                                            <img src="../../img/news/<?php echo $news['nimage'];?>" alt="">
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
</div>

<?php
echo $footer_admin;

?>
