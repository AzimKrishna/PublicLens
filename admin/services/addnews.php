<?php 
session_start();
include '../../codes.php';
if(!isset($_SESSION["auname"])){
  header("Location: ../../index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add news</title>
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
        <li><a href="../../db/logout.php">Logout <i class="bx bx-exit" ></i></a></li>
      </ul>
    </div>
</nav>
<div class="home-section">
    <div class="bg-art-small">
        <img src="../../img/bg2.jpg" alt="">
        <div class="bg-art-quote" style="padding-top: 70px; font-size:40px;">
            <div class="bg-art-quote-container">
            <h1 style="font-size:40px; padding-top:40px"><mark>Enter the news </mark></h1> 

            </div>
        </div>
    </div>
    <div class="dummy-container">
          <div class="rmform-container">
            <h2>Fill all the fields, recommended 30 characters max for news description</h2>
            <form action="../../db/pass.php" method="post" id="news-adder" name="newsadder" enctype="multipart/form-data">
              <div class="consent" id="newshold" style="height:615px; font-weight: bold;">
                  <!-- <span>You can report a sighting - free and confidentially - by:</span><br><br>
                  <ol>
                    <li>calling us on 99XX XXXX.</li>
                    <li>emailing us.</li>
                    <li>completing our online sightings form.</li>
                  </ol><br>
                  <span>Kindly do not use this form for creating spam or flase reports. Upon receiving multiple spam reports, we will take strict actions against your IP.</span><br><br>
                  <span></span>
                  <input type="checkbox" id="cbox" name="cbox">
                  <label for="cbox">May we give your name and contact details to police? <span style="font-size:12px;">(optional)</span></label><br><br>
                  <hr><br>
                  <button type="button" class="next" id="next1">Next <i class='bx bxs-chevron-right' ></i></button> -->
                    <label for="date">Date</label> <br>
                    <input type="date" name="date" id="date" required onkeyup="checkname();" ><span id="pn_validation"></span><br>
                    <label for="nimage">Upload Image</label><br>
                    <input type="file" name="nimage" id="nimage"><br>
                    <label for="ndesc">News description </label><br>
                    <textarea style="height:250px; width: 640px;"name="ndesc" id="ndesc" placeholder="Enter here......" required></textarea><br><br>
                    <button class="prev" onclick="window.location.href='news.php';" ><i class='bx bxs-chevron-left' ></i> Cancel</button>
                    <button class="next" style="float:right;" type="submit" name="newsadd-btn">Submit <i class='bx bxs-chevron-right' ></i></button>
              </div>
            </form>
          </div>
    </div>
</div>
<script>
    var pn_validation = document.getElementById('pn_validation');

    var dates = document.newsadder.date;

    function checkname(){
      var a2=dates.value;
      var CurrentDate = new Date();
      if(f2(a2,CurrentDate)){
      }
      pn_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>✔️</span>";
      //DATE VALIDATION
      function f2(a2,CurrentDate)
      {
      if(CurrentDate<=a2)
      {
        pn_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Please enter a valid date.</span>";
        return true;
      }
      }
    }

</script>
<?php
echo $footer_admin;
?>