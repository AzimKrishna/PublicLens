<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact us</title>
    <link rel="icon" type="image/x-icon" href="../img/fav.ico">
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="https://malsup.github.io/jquery.form.js"></script> 
    <!-- Boxicons icons used -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <script>
        $(document).ready(function(){
        $('#enqs').click(function(e){
            if(document.getElementById("fname").value !== null && document.getElementById("fname").value !== '' && document.getElementById("lname").value !== '' && document.getElementById("email").value !== '' && document.getElementById("pno").value !== '' && document.getElementById("msg").value !== '' && document.getElementById("lname").value !== null && document.getElementById("msg").value !== null && document.getElementById("pno").value !== null && document.getElementById("email").value !== null){
            e.preventDefault();
            var datas=$('#contact').serialize()+'&enqs=enqs';
            $.ajax({
                url:'../db/pass.php',
                type:'post',
                data: datas,
                success:function(response){
                        Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Your enquiry has been sent!',
                        showConfirmButton: false,
                        timer: 1500
                     });
                    }
             });
             document.getElementById("contact").reset();
            }else{
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please fill the required fields of the form!'
                });
            }
            });
        });
    </script>
  </head>
<?php
include '../codes.php';
echo $header4;
?>
<!-- <script>
        if(para==1){
            document.getElementById('cnctfrm').scrollIntoView();
        }
</script> -->
<div class="bg-art-small">
    <img src="../img/bg2.jpg" alt="">
    <div class="bg-art-quote">
        <div class="bg-art-quote-container">
        <h1><mark>Contact us </mark></h1> 
        <span><mark>Our free and confidential helpline is </mark></span> <br>
        <span><mark>available on 99XX XX. We are here to help </mark></span><br>
        <span><mark>you if you need support. </mark></span><br>
        </div>
    </div>
</div>
<div class="home-section">
    <div class="contact-page">
        <div class="contact-page-options">
            <div class="contact-page-ct1">
                <div id="bar-new"></div><br>
                <h1>Someone is missing</h1><br>
                <span>If you're missing, thinking of going missing, or have a missing loved  one and need support, talk to us.</span>
                <br><br><br><br><a href="#"><button>Call or text 99XX XXX  <i class='bx bxs-chevron-right' ></i></button></a>
            </div>
            <div class="contact-page-ct1">
                <div id="bar-new"></div><br>
                <h1>Report someone missing</h1><br>
                <span>If you’re worried about the safety of a missing person, we encourage you to contact the police as the first point of call. If you would like our help to launch an appeal for your loved one, please complete the form or contact our helpline.</span>
                <br><br><a href="../add/get-help.php"><button>Report a missing person  <i class='bx bxs-chevron-right' ></i></button></a>
            </div>
            <div class="contact-page-ct1">
                <div id="bar-new"></div><br>
                <h1>Report a sighting</h1><br>
                <span>Sightings and information from the public help to find vulnerable missing people. If you would like to report a sighting of a missing person, please complete the form or contact our helpline.</span>
                <br><br><a href="../add/sighting.php"><button>Report a sighting  <i class='bx bxs-chevron-right' ></i></button></a>
            </div>
            <div class="contact-page-ct1">
                <div id="bar-new"></div><br>
                <h1>Fundraising enquiries</h1><br>
                <span>If you’d like to get in touch about an event or idea, or to request materials, contact our fundraising team.</span>
                <br><br><br><a href="#"><button>Fundraising enquiries  <i class='bx bxs-chevron-right' ></i></button></a>
            </div>
        </div>
        <div class="contact-form" id="cnctfrm">
            <h1>Contact Form</h1><br><br>
            <h3>Contact Us - General Enquiries</h3><br>
            <h2>Your details</h2><br>
            <span>Please provide details of your enquiry below as well as your contact details so that we can get in touch.</span><br><br>
            <form name="contactus" method="post" id="contact"> 
                <label for="title">Ttitle *</label><br><br>
                <select name="title" id="title">
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Ms">Ms</option>
                    <option value="Miss">Miss</option>
                    <option value="Dr">Dr</option>
                </select><br><br>
                <label for="fname">First name*</label> <br><br>
                <input type="text" name="fname" id="fname" onkeyup="checknamef();" minlength='5' maxlenth='15' required><span id="fn_validation"></span><br><br>
                <label for="lname">Last name *</label><br><br>
                <input type="text" name="lname" id="lname" onkeyup="checknamel();" minlength='5' maxlenth='15' required><span id="ln_validation"></span><br><br>
                <label for="email">My email address is *</label><br><br>
                <input type="email" name="email" id="email" onkeyup="checkemail();" required><span id="em_validation"></span><br><br>
                <label for="pno">Phone *</label><br><br>
                <input type="tel" name="pno" id="pno" onkeyup="checkphone();" required><span id="pn_validation"></span><br><br>
                <label for="msg">Message *</label><br><br>
                <textarea name="msg" id="msg" placeholder="Enter your message here" onkeyup="checkmsg();" required></textarea><span id="msg_validation"></span><br><br><br>
                <button type="button" name="enqs" id="enqs">Submit <i class='bx bxs-chevron-right' ></i></button>
            </form>
        </div>
        <div class="offices">
            <div id="bar-new"></div><br>
            <h1>Our offices</h1><br>
            <span>Our office is not open to the general public or for</span><br>
            <span>face-to-face support.</span><br><br>
            <span>PublicLens</span><br>
            <span>248 Apt 8C, New Panvel</span><br>
            <span>Navi Mumbai, Maharastra</span><br><br>
            <span>Tel: 00X XXXX XXXX</span><br>
        </div>
    </div>
</div>

<script>
    var fn_validation = document.getElementById('fn_validation');
    var ln_validation = document.getElementById('ln_validation');
    var em_validation = document.getElementById('em_validation');
    var pn_validation = document.getElementById('pn_validation');
    var msg_validation = document.getElementById('msg_validation');

    var fname = document.contactus.fname;
    var lname = document.contactus.lname;
    var email = document.contactus.email;
    var msg = document.contactus.msg;
    var pno = document.contactus.pno;

    function checknamef(){
        var cips=/^[A-Za-z\s]*$/;
        if(fname.value.length == 0){
            fn_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Enter your first name.</span>";
        }else if(!fname.value.match(cips)){
            fn_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Please enter a valid name.</span>";
        }else if(fname.value.length < 3){
            fn_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Please enter your first name properly.</span>";
        }else{
            fn_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>✔️</span>";
        }
    }
    function checknamel(){
        var cips=/^[A-Za-z\s]*$/;
        if(lname.value.length == 0){
            ln_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Enter your last name.</span>";
        }else if(!lname.value.match(cips)){
            ln_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Please enter a valid name.</span>";
        }else if(lname.value.length < 3){
            ln_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Please enter your last name properly.</span>";
        }else{
            ln_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>✔️</span>";
        }
    }
    function checkemail(){
        var mailformat = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
        if(email.value.length == 0){
            em_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Enter your email.</span>";
        }else if(!email.value.match(mailformat)){
            em_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Please enter a valid email.</span>";
        }else{
            em_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>✔️</span>";
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
    function checkmsg(){
        if(msg.value.length < 5){
            msg_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Please enter your full message.</span>";
        }else if(msg.value.length >300){
            msg_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>Message should not be longer than 300 characters.</span>";
        }else{
            msg_validation.innerHTML ="<span style='color: red; font-size: 12px; padding-left: 20px;'>✔️</span>";
        }
    }


</script>

<?php
echo $footer;
?>


<?php



?>