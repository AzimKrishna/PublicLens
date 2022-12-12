<?php 
session_start();

?>
<?php
include '../db/config.php';
$sql_nof_city = "SELECT DISTINCT(pos) FROM apr_fnd";
$sql_m_peopl = "SELECT flname, pom, pimg_newname FROM apr_fnd";
$nof_city=mysqli_query($conn, $sql_nof_city);
$m_peopl=mysqli_query($conn, $sql_m_peopl);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search found person</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../img/fav.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons icons used -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
  </head>
<?php
include '../codes.php';
echo $header3;
?>
<div class="home-section">
    <div class="bg-art-small">
        <img src="../img/bg2.jpg" alt="">
        <div class="bg-art-quote" style="padding-top: 70px; font-size:40px;">
            <div class="bg-art-quote-container">
            <h1 style="font-size:40px;"><mark>Search the currently </mark></h1> 
            <h1 style="font-size:40px;"><mark><?php echo $found; ?> people</mark></h1>
            </div>
        </div>
    </div>
    <div class="search-bar">
        <div class="search-bar-form">
            
            <form action="#" method="get">
            <h2>Search and filter the results</h2><br>
                <input  type="text" name="name" id="name" placeholder="Search for people" style="background-color: rgb(243, 243, 243);">
                <select name="city" id="city">
                    <option value="">City</option>
                    <?php
                        if(mysqli_num_rows($nof_city) > 0){
                            while($city = mysqli_fetch_assoc($nof_city)){
                                ?>
                                    <option value="<?= $city['pos']; ?>"><?php echo $city['pos'];?></option>
                                <?php
                            }
                        }
                    ?>
                </select>
                <input type="date" name="dom" id="dom" placeholder="Missing since">
                <input type="number" name="age" id="age" placeholder="Age">
                <select name="gender" id="gender">
                    <option value="">Gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="T">Other</option>
                </select>
                <button type="submit"><i class='bx bx-search-alt'></i></button>
            </form>
        </div>
    </div>
    <div class="mperson-results-holder">
        <div class="mperson-results">
            <h2>Showing people based on your search</h2>
                <div class="results-holder">
                    <?php
                        if(mysqli_num_rows($m_peopl) > 0){
                            while($profiles = mysqli_fetch_assoc($m_peopl)){
                                ?>
                                    <div class="containers">
                                        <div class="card-image">
                                            <img src="../uploads/reports/pimg/<?php echo $profiles['pimg_newname'];?>" alt="">
                                        </div>
                                        <div class="card-desc">
                                            <span id="fullname"><?php echo $profiles['flname'];?></span><br>
                                            <span id="placename"><?php echo $profiles['pom'];?></span><br>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
echo $footer;
?>