<?php

$file="../data.txt";
$linecount = 0;
$handle = fopen($file, "r");
while(!feof($handle)){
  $line = fgets($handle);
  $linecount++;
}

fclose($handle);



session_start();
include '../db/config.php';

if(!isset($_SESSION["auname"])){
  header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin panel</title>
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons icons used -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
  </head>
<?php
include '../codes.php';

?>
<body style="background-color: #f5f5f5;">

<nav>
  
  <div class="logo"> <i class="bx bx-target-lock lgo"></i>Admin Panel</div>
    <div class="nav-links">
      <ul class="links">
        <li><a class="active" href="#">Home</a></li>
        <li>
          <a class="ahere" href="#">Report <i class="bx bxs-chevron-down arrow adar"></i></a>
          <ul class="addhere-smenu smenu">
            <li><a href="services/mp.php">Missing Person</a></li>
            <li><a href="services/fp.php">Sightings</a></li>

          </ul>
        </li>
        <li>
          <a href="#">Search <i class="bx bxs-chevron-down arrow srar"></i></a>
          <ul class="addhere-smenu smenu">
            <li><a href="services/mp-view.php">Missing Person</a></li>
            <li><a href="services/fp-view.php">Found Person</a></li>

          </ul>
        </li>
        <li><a href="services/enq.php">Enquiries</a></li>
        <li><a href="services/news.php">News</a></li>
        <li><a href="../db/logout.php">Logout <i class="bx bx-exit" ></i></a></li>
      </ul>
    </div>
</nav>
<div class="home-section-admin" style="background-color: #f5f5f5;">
  <div class="all-table-holder">
    <div class="table-holder">
      <div class="box">
        <div class="two-holder">
          <div class="details">
            <div class="H">Reports</div>
            <div class="N"><?php 
              $sql="SELECT count(*) as total from add_prsn";
              $result=mysqli_query($conn,$sql);
              $data=mysqli_fetch_assoc($result);
              echo $data['total'];            
            ?></div>
            <div class="desctext">No. of new missing reports</div>
          </div>
          <i class='bx bx-edit-alt ico'></i>
        </div>
      </div>
      <div class="box">
        <div class="two-holder">
          <div class="details">
            <div class="H">Sightings</div>
            <div class="N"><?php 
              $sql="SELECT count(*) as total from add_found";
              $result=mysqli_query($conn,$sql);
              $data=mysqli_fetch_assoc($result);
              echo $data['total'];            
            ?></div>
            <div class="desctext">No. of new sightings</div>
          </div>
          <i class='bx bx-map-pin ico' style="color: #2BD47D; background: #C0F2D8;"></i>
        </div>
      </div>
      <div class="box">
        <div class="two-holder">
          <div class="details">
            <div class="H">Enquiries</div>
            <div class="N"><?php 
              $sql="SELECT count(*) as total from enq";
              $result=mysqli_query($conn,$sql);
              $data=mysqli_fetch_assoc($result);
              echo $data['total'];            
            ?></div>
            <div class="desctext">No. of new enquiries</div>
          </div>
          <i class='bx bx-message-square-dots ico' style="color: #ffc233; background: #ffe8b3;"></i>
        </div>
      </div>
      <div class="box">
        <div class="two-holder">
          <div class="details">
            <div class="H">Missing</div>
            <div class="N"><?php 
              $sql="SELECT count(*) as total from apr_miss";
              $result=mysqli_query($conn,$sql);
              $data=mysqli_fetch_assoc($result);
              echo $data['total'];            
            ?></div>
            <div class="desctext">No. of missing people</div>
          </div>
          <i class='bx bxl-ok-ru ico' style="color: #e05260; background: #f7d4d7;"></i>
        </div>
      </div>
    </div>
    <div class="stats-holder">
      <div class="box" style="height: 390px;">
      <div class="two-holder" style="justify-content:left; padding: 40px 20px;">
          <div class="details">
            <div class="H">IPs of last 10 visits</div>
            <?php
              $file = file("../data.txt");
              for ($i = 0; $i < 10; $i++) {
                echo $file[$i] . "\n";
              }
            ?>
          </div>
        </div>
      </div>
      <div class="box">
      <div class="two-holder">
          <div class="details">
            <div class="H">Count</div>
            <div class="N"><?php 

              echo $linecount;   
            ?></div>
            <div class="desctext">No. of website visits</div>
          </div>
          <i class='bx bx-trending-up ico'></i>
          <!-- <i class='bx bxl-ok-ru ico' style="color: #e05260; background: #f7d4d7;"></i> -->
        </div>
      </div>
    </div>
  </div>
</div>

<?php
echo $footer_admin;

?>
