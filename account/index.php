<?php

error_reporting(0);

include '../db/config.php';
session_start();

if (isset($_SESSION["uname"])){
	header("Location: profile.php");
}


if (isset($_POST["signin"])) {
	$uname = mysqli_real_escape_string($conn, $_POST["uname"]);
	$pwd = mysqli_real_escape_string($conn, md5($_POST["pwd"]));
  
	$check_user = mysqli_query($conn, "SELECT * FROM user_reg WHERE email='$uname' AND pass='$pwd' ");
  
	if (mysqli_num_rows($check_user) > 0) {
	  $row = mysqli_fetch_assoc($check_user);

	  $_SESSION["uname"] = $row['email'];
	  $_SESSION["flname"] = $row['flname'];
	  $_SESSION["dob"] = $row['dob'];
	  $_SESSION["pno"] = $row['pno'];
	  $_SESSION["gid"] = $row['gid'];
      $_SESSION["address1"] = $row['address1'];
	  header("Location: profile.php");
	} else {
        echo "<script>alert('Login details is incorrect. Please try again.');</script>";
	}
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login or register</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../img/fav.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons icons used -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://malsup.github.io/jquery.form.js"></script>     
    <script>
        $(document).ready(function(){
        $('#reg').click(function(e){
            if(document.getElementById("flname").value !== null && document.getElementById("flname").value !== '' 
            && document.getElementById("address1").value !== '' && document.getElementById("city").value !== '' 
            && document.getElementById("pno").value !== '' && document.getElementById("zip").value !== ''
            && document.getElementById("email").value !== '' && document.getElementById("dob").value !== ''
            && document.getElementById("pwd1").value !== '' && document.getElementById("pwd2").value !== ''
            && document.getElementById("gid").value !== ''
            && document.getElementById("address1").value !== null && document.getElementById("city").value !== null
            && document.getElementById("pno").value !== null && document.getElementById("zip").value !== null
            && document.getElementById("email").value !== null && document.getElementById("dob").value !== null
            && document.getElementById("pwd1").value !== null && document.getElementById("pwd2").value !== null
            && document.getElementById("gid").value !== null){
            e.preventDefault();
            var datas=$('#ureg').serialize()+'&regu=regu';
            $.ajax({
                url:'../db/mail.php',
                type:'post',
                data: datas,
                success:function(response){
                         Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Registration success, email will be sent to you shortly!',
                        type: "success"
                        }).then(function(){
                            window.location="../index.php";
                        });
                    }
             });
             document.getElementById("ureg").reset();
            }else{
                Swal.fire({
                icon: 'error',
                title: 'Oops!',
                text: 'Fill all the required feilds.'
                });
            }
            });
        });
    </script>
  </head>
<?php

include '../codes.php';
echo $header5;
?>
<div class="home-section">
    <div class="bg-art-small">
        <img src="../img/bg2.jpg" alt="">
        <div class="bg-art-quote">
            <div class="bg-art-quote-container">
            <h1><mark>Login or signup </mark></h1> 
            </div>
        </div>
    </div>
    <div class="forms-holder">
        <div class="forms-holder-login">
            <div id="bar-new"></div><br>
            <form action="" method="post">
                <h1>Login</h1><br><br>
                <label for="uname">Email</label><br>
                <input type="text" name="uname" id="uname" required><br><br>
                <label for="pwd">Password</label><br>
                <input type="password" name="pwd" id="pwd" required><br><br><br>
                <button type="submit" name="signin">Login <i class='bx bxs-chevron-right' ></i></button>
            </form>
        </div>
        <div class="forms-holder-reg">
            <div id="bar-new"></div><br>
            <form action="" method="post" id="ureg" name="ureg"> 
                <h1>Register</h1>
                <span>All fields marked with * are required</span><br><br>
                <label for="flname">Full Name *</label><br>
                <input type="text" name="flname" id="flname" onkeyup="checkname();" required><span id="fn_validation"></span><br><br>
                <label for="address1">Address line 1 *</label><br>
                <input type="text" name="address1" id="address1" onkeyup="checkaddress();" required><span id="ad_validation"></span><br><br>
                <label for="address2">Address line 2 </label><br>
                <input type="text" name="address2" id="address2"><br><br>     
                <label for="city">Town or city *</label><br>
                <input type="text" name="city" id="city" onkeyup="checkcity();" required><span id="ct_validation"></span><br><br>
                <label for="zip">Postcode *</label><br>
                <input type="text" name="zip" id="zip" onkeyup="checkzip();" required><span id="zp_validation"></span><br><br>
                <label for="pno">Phone *</label><br>
                <input type="tel" name="pno" id="pno" onkeyup="checkphone();" required><span id="pn_validation"></span><br><br>
                <label for="dob">Date of birth *</label><br>
                <input type="date" name="dob" id="dob" onkeyup="checkdob();" required><span id="dob_validation"></span><br><br>
                <label for="email">Email *</label><br>
                <input type="email" name="email" id="email" required><span id="emailexists"></span><br><br>
                <label for="pwd1">Password *</label><br>
                <input type="password" name="pwd1" id="pwd1" onkeyup="checkpw();" required minlength='8'><span id="pw1_validation"></span><br><br>
                <label for="pwd2">Confirm password *</label><br>
                <input type="password" name="pwd2" id="pwd2" onkeyup="checkpw2();" required minlength='8'><span id="pw2_validation"></span><br><br>
                <label for="gid">Govt. ID *</label><br>
                <input type="text" name="gid" id="gid" onkeyup="checkgid();" required><span id="gd_validation"></span><br><br>
                <input type="checkbox" name="cbox" id="cbox" required>
                <label for="cbox">  I accept the terms & conditions.</label><br><br><br>
                <button type="button" id="reg" name="reg">Register <i class='bx bxs-chevron-right' ></i></button>

            </form>
        </div>
    </div>
    <div class="get-in-touch">
        <div id="bar"></div>
        <span id="quote6">We're here to talk!</span>  <br>
        <span id="quote6-desc">
        If you have been affected by a disappearance, you have information about a missing person,<br> 
        you’re interested in supporting us, or you a professional working with missing persons, we’d<br>
        love to hear from you.
        </span><br>
        <a href="../about-us/contact.php"><button>Get in touch      <i class='bx bxs-chevron-right' ></i></button></a>
      </div>
</div>
<script>

        $(document).ready(function () {
            
            $('#email').keyup(function (e) { 
                var mailformat = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
                var email= $('#email').val();
                var defaultalerrt = "<span style='color: red; font-size: 12px;'>Enter a valid email</span>";

                // console.log(email);
                if(!email.match(mailformat)){
                    $('#emailexists').html(defaultalerrt);
                }else if(email.match(mailformat)){
                        $.ajax({
                        type: "POST",
                        url: "../db/pass.php",
                        data: {
                            'check_email' : 1,
                            'email': email
                        },
                        success: function (response) {
                            // console.log(response);
                            $('#emailexists').html(response);
                            
                        }
                    });                
                }
            });

        });

</script>
<script>
    var fn_validation = document.getElementById('fn_validation');
    var ad_validation = document.getElementById('ad_validation');
    var ct_validation = document.getElementById('ct_validation');
    var zp_validation = document.getElementById('zp_validation');
    var pn_validation = document.getElementById('pn_validation');
    var dob_validation = document.getElementById('dob_validation');
    var emailexists = document.getElementById('emailexists');
    var pw1_validation = document.getElementById('pw1_validation');
    var pw2_validation = document.getElementById('pw2_validation');
    var gd_validation = document.getElementById('gd_validation');

    var flname = document.ureg.flname;
    var address1 = document.ureg.address1;
    var city = document.ureg.city;
    var zip = document.ureg.zip;
    var pno = document.ureg.pno;
    var dob = document.ureg.dob;
    var dob1 = dob.value;
    var email = document.ureg.email;
    var pwd1 = document.ureg.pwd1;
    var pwd2 = document.ureg.pwd2;
    var gid = document.ureg.gid;

    function checkname(){
        var cips=/^[A-Za-z\s]*$/;
        if(flname.value.length == 0){
            fn_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Enter your name.</span>";
        }else if(!flname.value.match(cips)){
            fn_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Please enter a valid name.</span>";
        }else if(flname.value.length < 5){
            fn_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Please enter your full name.</span>";
        }else{
            fn_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>✔️</span>";
        }
    }
    function checkaddress(){
        if(address1.value.length == 0){
            ad_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Enter your address.</span>";
        }else if(address1.value.length < 8){
            ad_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Please enter your address.</span>";
        }else{
            ad_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>✔️</span>";
        }
    }
    function checkcity(){
        var cips=/^[A-Za-z\s]*$/;
        if(city.value.length == 0){
            ct_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Enter your city.</span>";
        }else if(!city.value.match(cips)){
            ct_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Please a valid city.</span>";
        }else if(city.value.length < 4){
            ct_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Please a valid city.</span>";
        }else{
            ct_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>✔️</span>";
        }
    }
    function checkzip(){
        var zips=/^[0-9]+$/;
        if(zip.value.length == 0){
            zp_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Enter your postcode.</span>";
        }else if(!zip.value.match(zips)){
            zp_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Please enter a valid zip.</span>";
        }else if(zip.value.length < 6){
            zp_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Please enter a valid postcode.</span>";
        }else if(zip.value.length > 6){
            zp_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Please enter a valid postcode.</span>";
        }else{
            zp_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>✔️</span>";
        }
    }
    function checkphone(){
        var pips=/^[0-9]+$/;
        if(pno.value.length == 0){
            pn_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Enter your phone.</span>";
        }else if(!pno.value.match(pips)){
            pn_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Please enter a valid phone.</span>";
        }else if(pno.value.length > 10){
            pn_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Please enter a valid phone.</span>";
        }else if(pno.value.length < 10){
            pn_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Please enter a valid phone.</span>";
        }else{
            pn_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>✔️</span>";
        }
    }
    function checkdob(){

        var dob1 = new Date(dob1);
        if(dob1==null || dob1==''){
            dob_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Select your dob.</span>";
        }else{
            var month_diff = Date.now() - dob1.getTime();
            var age_dt = new Date(month_diff); 
            var year = age_dt.getUTCFullYear();
            var age = Math.abs(year - 1970);
            if(age < 18){
            dob_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>You must be atleast 18 years.</span>";
            }else{
                dob_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>✔️</span>";
            }
        }
    }
    function checkpw(){
        var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
        if(pwd1.value.length == 0){
            pw1_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Enter your password.</span>";
        }else if(pwd1.value.length < 8){
            pw1_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Password must be atleast 8 characters.</span>";
        }else if(!pwd1.value.match(paswd)){
            pw1_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Password must be atleast 7-15 characters with atleast 1 digit and 1 special character.</span>";
        }else if(pwd1.value.match(paswd)){
            pw1_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>✔️</span>";
        }
    }
    function checkpw2(){
        if(pwd2.value.length == 0){
            pw2_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Confirm your password.</span>";
        }else if(pwd2.value !== pwd1.value){
            pw2_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Your passwords does not match.</span>";
        }else{
            pw2_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>✔️</span>";
        }
    }
    function checkgid(){
        if(gid.value.length == 0){
            gd_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Enter your Govt.ID.</span>";
        }else if(gid.value.length < 8){
            gd_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Please enter a valid ID.</span>";
        }else{
            gd_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>✔️</span>";
        }
    }

</script>
<?php
echo $footer;
?>