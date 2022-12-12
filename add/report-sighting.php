<?php 
session_start();
include '../db/config.php';
error_reporting(0);
if(isset($_GET['plno'])){
  $plno=$_GET['plno'];
  $plno_details = mysqli_query($conn, "SELECT * FROM apr_miss WHERE plno='$plno'");

  if (mysqli_num_rows($plno_details) > 0) {
  $plno_details_rows = mysqli_fetch_assoc($plno_details);
  $flname=$plno_details_rows['flname'];
  $age=$plno_details_rows['age'];
  $pno=$plno_details_rows['pno'];
  $sex=$plno_details_rows['sex'];
  $height=$plno_details_rows['height'];
  $weight=$plno_details_rows['weight'];
  $cmplxn=$plno_details_rows['cmplxn'];
  $build=$plno_details_rows['build'];
  $hair=$plno_details_rows['hair'];
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sighting form</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../img/fav.ico">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons icons used -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
  </head>
<?php
include '../codes.php';
echo $header2;
?>
<div class="home-section">
    <div class="bg-art-small">
        <img src="../img/bg2.jpg" alt="">
        <div class="bg-art-quote" style="padding-top: 70px; font-size:40px;">
            <div class="bg-art-quote-container">
            <h1 style="font-size:40px; padding-top:40px"><mark>Report a sighting </mark></h1> 

            </div>
        </div>
    </div>
    <div class="dummy-container">
          <div class="rmform-container">
            <h2>Sightings and information from the public help us to find vulnerable missing people.</h2>
            <form action="../db/pass.php" method="post" enctype="multipart/form-data">
              <div class="consent" id="rmformpart1" style="height:615px;">
                  <span>You can report a sighting - free and confidentially - by:</span><br><br>
                  <ol>
                    <li>calling us on 99XX XXXX.</li>
                    <li>emailing us.</li>
                    <li>completing our online sightings form.</li>
                  </ol><br>
                  <span>Kindly do not use this form for creating spam or flase reports. Upon receiving multiple spam reports, we will take strict actions against your IP.</span><br><br>
                  <span><?php echo $sightrpttext; ?></span>
                  <input type="checkbox" id="cbox" name="cbox">
                  <label for="cbox">May we give your name and contact details to police? <span style="font-size:12px;">(optional)</span></label><br><br>
                  <hr><br>
                  <button type="button" class="next"  style="margin-top: 60px;" id="next1">Next <i class='bx bxs-chevron-right' ></i></button>
              </div>
              <div class="consent" id="rmformpart2">
                  <input type="hidden" name="plno" id="plno" value="<?=$plno?>">

                  <label for="flname">Full Name </label><br>
                  <input type="text" name="flname" id="flname" value="<?=$flname;  ?>"  ><br>
                  <label for="age">Age *</label><br>
                  <input type="number" name="age" id="age" required  value="<?=$age;  ?>"><br>
                  <label for="sex">Sex *</label><br>
                  <select name="sex" id="sex" required >
                    <option value="">Gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="T">Other</option>
                  </select><br>
                  <label for="pos">City of sighting *</label><br>
                  <input type="text" name="pos" id="pos" required><br>
                  <label for="crcm">Under what circumstances did you see them? *</label><br>
                  <input type="text" name="crcm" id="crcm" required><br><br>
                  <button type="button" class="prev" id="back1"><i class='bx bxs-chevron-left'></i> Back </button>
                  <button type="button" class="next" id="next2">Next <i class='bx bxs-chevron-right' ></i></button>
              </div>
              <div class="consent" id="rmformpart3">
                  <label for="pno">Phone </label><br> 
                  <input type="tel" name="pno" id="pno"  value="<?=$pno;  ?>" ><br>
                  <label for="dos">Date of sighting *</label><br>
                  <input type="date" name="dos" id="dos" required><br>
                  <label for="height">Height (in cm)</label><br>
                  <input type="number" name="height" id="height" value="<?=$height;  ?>"  ><br>
                  <label for="weight">Weight (in Kg)</label><br>
                  <input type="number" name="weight" id="weight" value="<?=$weight;  ?>"  ><br>
                  <label for="cmplxn">Complexion *</label><br> 
                  <select name="cmplxn" id="cmplxn" required >
                    <option value="">Select complexion</option>
                    <option value="Very Fair">Very Fair</option>
                    <option value="Very Fair">Very Fair</option>
                    <option value="Fair">Fair</option>
                    <option value="Wheatish">Wheatish</option>
                    <option value="Dark">Dark</option>
                    <option value="Sallow">Sallow</option>
                  </select><br><br>
                  <button type="button" class="prev" id="back2"><i class='bx bxs-chevron-left'></i> Back </button>
                  <button type="button" class="next" id="next3">Next <i class='bx bxs-chevron-right' ></i></button>
              </div>
              <div class="consent" id="rmformpart4">
                  <label for="build">Build *</label><br> 
                  <select name="build" id="build" required >
                    <option value="">Select build</option>
                    <option value="Fat">Fat (stout/strong)</option>
                    <option value="Normal">Normal (Muscula)</option>
                    <option value="Stocky">Stocky</option>
                    <option value="Thin">Thin (lanky)</option>
                    <option value="Handicapped">Handicapped</option>
                  </select><br>
                  <label for="hair">Hair *</label><br> 
                  <select name="hair" id="hair" required >
                        <option value="">Select Hair</option>
                        <option value="Side burns">Side burns</option>
                        <option value="Normal - Grey">Normal - Grey</option>
                        <option value="Wig use of">Wig use of</option>
                        <option value="Bald full">Black full</option>
                        <option value="Normal - black">Normal - Black</option>
                        <option value="Hair bleached/dyed">Hair bleached/dyed</option>
                        <option value="Brown">Brown</option>
                        <option value="Hair curly/wavy">Hair curly/wavy</option>
                        <option value="Hair gray/white patched">Hair gray/white patched</option>
                        <option value="Straight hair">Straight hair</option>
                        <option value="Bald partial">Bald partial</option>
                        <option value="Curly - Black">Curly - Black</option>
                        <option value="Curly - Black & grey">Curly - Black & grey</option>
                        <option value="Curly - grey">Curly - grey</option>
                        <option value="Long">Long</option>
                        <option value="normal - Black & Black">Normal - Black & grey</option>
                        <option value="White hair">White hair</option>
                  </select><br>
                  <label for="pimg">Upload the image of the person</label><br>
                  <input type="file" name="pimg" id="pimg"><br>
                  <label for="yname">Your Full Name *</label><br>
                  <input type="text" name="yname" id="yname" required><br>
                  <label for="ypno">Your Phone number *</label><br>
                  <input type="tel" name="ypno" id="ypno" required><br>
                  <button type="button" class="prev" id="back3"><i class='bx bxs-chevron-left'></i> Back </button>
                  <button type="submit" class="next" name="rsight" id="next4">Submit <i class='bx bxs-chevron-right' ></i></button>
              </div>
            </form>
          </div>
    </div>
</div>
<script>
  var pt1 = document.getElementById("rmformpart1");
  var pt2 = document.getElementById("rmformpart2");
  var pt3 = document.getElementById("rmformpart3");
  var pt4 = document.getElementById("rmformpart4");

  var next1 = document.getElementById("next1");
  var back1 = document.getElementById("back1");
  var next2 = document.getElementById("next2");
  var back2 = document.getElementById("back2");
  var next3 = document.getElementById("next3");
  var back3 = document.getElementById("back3");

  next1.onclick = function(){
      pt1.style.left = "-950px";
      pt2.style.left = "0px";
      pt3.style.left = "950px";
      pt4.style.left = "1900px";
  }
  back1.onclick = function(){
      pt1.style.left = "0px";
      pt2.style.left = "950px";
      pt3.style.left = "1900px";
      pt4.style.left = "2850px";
  }
  
  next2.onclick = function(){

    if(document.getElementById("age").value !== '' && document.getElementById("sex").value !== '' && document.getElementById("pos").value !== '' && document.getElementById("age").value !== null && document.getElementById("sex").value !== null && document.getElementById("pos").value !== null){
      pt1.style.left = "-1900px";
      pt2.style.left = "-950px";
      pt3.style.left = "0px";
      pt4.style.left = "950px";
    }else{
      Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please fill the required fields of the form!'
                });
    }
  }
  back2.onclick = function(){
    pt1.style.left = "-950px";
    pt2.style.left = "0px";
    pt3.style.left = "950px";
    pt4.style.left = "1900px";
  }
  next3.onclick = function(){
    if(document.getElementById("dos").value !== '' && document.getElementById("cmplxn").value !== '' && document.getElementById("dos").value !== null && document.getElementById("cmplxn").value !== null){
      pt1.style.left = "-2850px";
      pt2.style.left = "-1900px";
      pt3.style.left = "-950px";
      pt4.style.left = "0px";
    }else{
      Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please fill the required fields of the form!'
                });
    }
  }
  back3.onclick = function(){
    pt1.style.left = "-1900px";
    pt2.style.left = "-950px";
    pt3.style.left = "0px";
    pt4.style.left = "950px";
  }
</script>
<?php
echo $footer;
?>