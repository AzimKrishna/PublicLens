<?php 
session_start();
include '../db/config.php';

if(!isset($_SESSION["uname"])){
    header("Location: ../account/index.php");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Report form</title>
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
            <h1 style="font-size:40px; padding-top:40px"><mark>Report a missing person </mark></h1> 

            </div>
        </div>
    </div>
    <div class="dummy-container">
          <div class="rmform-container">
            <h2>Report a Missing Person Form</h2><br>
            <form action="../db/pass.php" method="post" enctype="multipart/form-data">
              <div class="consent" id="rmformpart1">
                  <span><?php  echo $rmconsent; ?></span>
                  <input type="checkbox" id="cbox" name="cbox" required>
                  <label for="cbox">I agree to the terms & conditions.</label><br><br>
                  <hr><br>
                  <button type="button" class="next" id="next1">Next <i class='bx bxs-chevron-right' ></i></button>
              </div>
              <div class="consent" id="rmformpart2">
                  <label for="flname">Full Name *</label><br>
                  <input type="text" name="flname" id="flname" required><br>
                  <label for="age">Age *</label><br>
                  <input type="number" name="age" id="age" required><br>
                  <label for="sex">Sex *</label><br>
                  <select name="sex" id="sex" required>
                    <option value="">Gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="T">Other</option>
                  </select><br>
                  <label for="city">City *</label><br>
                  <input type="text" name="city" id="city" required><br>
                  <label for="email">Email</label><br>
                  <input type="email" name="email" id="email"><br><br>
                  <button type="button" class="prev" id="back1"><i class='bx bxs-chevron-left'></i> Back </button>
                  <button type="button" class="next" id="next2">Next <i class='bx bxs-chevron-right' ></i></button>
              </div>
              <div class="consent" id="rmformpart3">
                  <label for="pno">Phone *</label><br> 
                  <input type="tel" name="pno" id="pno" required><br>
                  <label for="dom">Date of missing *</label><br>
                  <input type="date" name="dom" id="dom" required><br>
                  <label for="pom">Place of missing *</label><br>
                  <input type="text" name="pom" id="pom" required><br>
                  <label for="height">Height (in cm) *</label><br>
                  <input type="number" name="height" id="height" required><br>
                  <label for="weight">Weight (in Kg)</label><br>
                  <input type="number" name="weight" id="weight" ><br><br>
                  <button type="button" class="prev" id="back2"><i class='bx bxs-chevron-left'></i> Back </button>
                  <button type="button" class="next" id="next3">Next <i class='bx bxs-chevron-right' ></i></button>
              </div>
              <div class="consent" id="rmformpart4">
                  <label for="cmplxn">Complexion *</label><br> 
                  <select name="cmplxn" id="cmplxn" required>
                    <option value="">Select complexion</option>
                    <option value="Very Fair">Very Fair</option>
                    <option value="Very Fair">Very Fair</option>
                    <option value="Fair">Fair</option>
                    <option value="Wheatish">Wheatish</option>
                    <option value="Dark">Dark</option>
                    <option value="Sallow">Sallow</option>
                  </select><br>
                  <label for="build">Build *</label><br> 
                  <select name="build" id="build" required>
                    <option value="">Select build</option>
                    <option value="Fat">Fat (stout/strong)</option>
                    <option value="Normal">Normal (Muscula)</option>
                    <option value="Stocky">Stocky</option>
                    <option value="Thin">Thin (lanky)</option>
                    <option value="Handicapped">Handicapped</option>
                  </select><br>
                  <label for="hair">Hair *</label><br> 
                  <select name="hair" id="hair" required>
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
                  <label for="fir">Upload FIR *</label><br>
                  <input type="file" name="fir" id="fir" required accept="image/*,.pdf"><br>
                  <label for="pimg">Upload image of the person *</label><br>
                  <input type="file" name="pimg" id="pimg" required accept="image/*,.pdf"><br><br>
                  <button type="button" class="prev" id="back3"><i class='bx bxs-chevron-left'></i> Back </button>
                  <button type="submit" class="next" name="rform" id="next4">Submit <i class='bx bxs-chevron-right' ></i></button>
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
    if(document.getElementById("cbox").checked){
      pt1.style.left = "-950px";
      pt2.style.left = "0px";
      pt3.style.left = "950px";
      pt4.style.left = "1900px";
    }else{
      Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please accept the terms & condtions.'
                });
    }

  }
  back1.onclick = function(){
      pt1.style.left = "0px";
      pt2.style.left = "950px";
      pt3.style.left = "1900px";
      pt4.style.left = "2850px";
  }
  
  next2.onclick = function(){

    if(document.getElementById("flname").value !== null && document.getElementById("flname").value !== '' && document.getElementById("age").value !== '' && document.getElementById("sex").value !== '' && document.getElementById("city").value !== '' && document.getElementById("age").value !== null && document.getElementById("sex").value !== null && document.getElementById("city").value !== null){
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
    if(document.getElementById("pno").value !== null && document.getElementById("pno").value !== '' && document.getElementById("dom").value !== '' && document.getElementById("height").value !== '' && document.getElementById("pom").value !== '' && document.getElementById("dom").value !== null && document.getElementById("height").value !== null && document.getElementById("pom").value !== null){
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