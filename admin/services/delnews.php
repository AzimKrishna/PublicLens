<?php 
session_start();
if(!isset($_SESSION["auname"])){
  header("Location: ../../index.php");
}
?>
<?php
include '../../db/config.php';
include '../../codes.php';
$i=1;
$sql_news = "SELECT * FROM news ORDER BY date";
$news_data=mysqli_query($conn, $sql_news);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete news</title>
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
         <li><a href="news.php" > <i class='bx bxs-chevron-left' ></i> Back </i></a></li>
        <li><a href="../../db/logout.php">Logout <i class="bx bx-exit" ></i></a></li>
      </ul>
    </div>
</nav>
<div class="home-section-admin">
<div class="bg-art-small">
        <img src="../../img/bg2.jpg" alt="">
        <div class="bg-art-quote" style="padding-top: 70px; font-size:40px;">
            <div class="bg-art-quote-container">
            <h1 style="font-size:40px; padding-top:40px"><mark>Remove news</mark></h1> 

            </div>
        </div>
    </div>
    <div class="enq-holder" style="position: relative;top: -140px; width:63%;">
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th style="width:5%;">Sl.no</th>
              <th style="width:10%;">Date</th>
              <th style="width:35%;">Desription</th>
              <th style="width:10%;">Image</th>
              <th style="width:10%;">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
              if(mysqli_num_rows($news_data) > 0)        
              {
                  while($news = mysqli_fetch_assoc($news_data))
                  {
              ?>
                  <tr>
                      <td><?php  echo $i; ?></td>
                      <td><?php  echo $news['date']; ?></td>
                      <td><?php  echo $news['ndesc']; ?></td>
                      <td><img src="../../img/news/<?php  echo $news['nimage']; ?>" alt="img" width='70px' height='70px' ></td>
                      <td>
                          <form action="../../db/pass.php" method="post">
                              <input type="hidden" name="nid" value="<?php echo $news['nid']; ?>">
                              <button type="submit" id="del-news" name="del-btn-news" class="enq-view">Delete<i class='bx bx-x' ></i></button>
                          </form>
                      </td>
                  </tr>
              <?php
                  $i++;
                  } 
              }
              ?>
          </tbody>
        </table>
      </div>
    </div>
</div>

<?php
echo $footer_admin;

?>
