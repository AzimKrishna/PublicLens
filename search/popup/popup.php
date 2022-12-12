<?php 
include '../../db/config.php';

session_start();

$p_id=$_GET['id'];
if(!isset($_SESSION['uname'])){
    $_SESSION['uname']=null;
}

$sql_prsn = "SELECT * FROM apr_miss WHERE p_id='$p_id';";
$prsn_data=mysqli_query($conn, $sql_prsn);

if (mysqli_num_rows($prsn_data) > 0) {
    $prsn = mysqli_fetch_assoc($prsn_data);
} 


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile details</title>
    <link rel="icon" type="image/x-icon" href="../../img/fav.ico">

    <link rel="stylesheet" href="../../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons icons used -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="https://malsup.github.io/jquery.form.js"></script> 
    <!-- Boxicons icons used -->
    <script>
        $(document).ready(function(){
        $('#pop').click(function(e){
            if(document.getElementById("ses").value !== '' && document.getElementById("ses").value !== null ){
            e.preventDefault();
            var datas=$('#rqstdata').serialize()+'&popuprqst=popuprqst';
            $.ajax({
                url:'../../db/mail.php',
                type:'post',
                data: datas,
                success:function(response){
                        Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Email will be sent to you shortly!',
                        showConfirmButton: false,
                        timer: 1500
                     });
                    }
             });
            }else{
                Swal.fire({
                icon: 'error',
                title: 'Oh! Ow..',
                text: 'Please login first!'
                });
            }
            });
        });
    </script>
  </head>
<?php
include '../../codes.php';

?>
  <body>

<nav style="position: relative; z-index: 2;">
  
  <div class="logo"> <i class="bx bx-target-lock lgo"></i>PublicLens</div>
<!-- <div class="slgn">Keeping your loved ones safe</div> -->
    <div class="nav-links">
      <ul class="links">
        <li><a href="../../index.php">Home</a></li>
        <li>
          <a class="active" href="#">Report <i class="bx bxs-chevron-down arrow adar"></i></a>
          <ul class="addhere-smenu smenu">
            <li><a href="get-help.php">Missing Person</a></li>
            <li><a href="sighting.php">Found Person</a></li>

          </ul>
        </li>
        <li>
          <a href="#">Search <i class="bx bxs-chevron-down arrow srar"></i></a>
          <ul class="addhere-smenu smenu">
            <li><a href="../../search/mperson.php">Missing Person</a></li>
            <li><a href="../../search/fperson.php">Found Person</a></li>

          </ul>
        </li>
        <li><a href="../../about-us/contact.php">Contact Us</a></li>
        <li><a href="../../account">Account</a></li>
      </ul>
    </div>
</nav>
<div class="home-section">
    <div class="bg-art-small">
        <img src="../../img/bg2.jpg" alt="">
        <div class="bg-art-quote" style="padding-top: 70px; font-size:40px; top: -80px;">
            <div class="bg-art-quote-container">
            <h1 style="font-size:40px; padding-top:40px"><mark><?php echo $profile; ?> </mark></h1> 

            </div>
        </div>
    </div>
    <div class="dummy-container" style="height: 490px;">
          <div class="rmform-container" style="margin-right: -10px; padding-right: 450px; height: 655px; top: -110px;">
          <button type="button" class="prev" style="margin-top: 0px;" onclick="location.href= '../../index.php';" ><i class='bx bxs-chevron-left'></i> Back </button>
            <div class="primary-steps-contact" style="top: 0px; left: 780px; height: 540px; width: 350px;">
                <div class="primary-steps-contact-content" style="font-size: 15px;">
                    <span style="font-size: 21px;">“ <?php echo $prsn['flname'];?> we are here for you whenever you are ready; we can listen, talk you through what help you need, pass a message for you and help you to be safe. Call. Text. 9am-11pm Free. Confidential. 9XX XX ”</span><br><br>
                    <a href="../../about-us/contact.php"><button id="addhere" style="padding-right: 120px">Talk to us <i class="bx bxs-chevron-right"></i></button></a>
                </div>
            </div>
            <div class="preheading" style="text-align: center;">
                <h2><mark style="background-color: #111; color: #fff; font-size: 18px;padding: 7px;">Missing appeal</mark></h2>    <h2><mark style="background-color: #d10074; color: #fff;font-size: 18px;padding: 7px;"><?php echo $prsn['flname'];?></mark></h2>
            </div>
            <div class="profile" style="height:615px;"><br>
                <div class="profile-img-holder">
                     <img src="../../uploads/reports/pimg/<?php echo $prsn['pimg_newname'];?>" alt="">
                </div>
                <div class="profile-details-holder">
                    <div class="card">
                        <i class='bx bx-user'></i><br>
                        <span>AGE AT DISAPPEARANCE</span><br>
                        <p><?php echo $prsn['age'];?></p>
                        
                    </div>
                    <div class="card">
                        <i class='bx bx-location-plus'></i><br>
                        <span>MISSING FROM</span><br>
                        <p><?php echo $prsn['pom'];?></p>
                        
                    </div>
                    <div class="card">
                        <i class='bx bx-calendar' ></i><br>
                        <span>MISSING SINCE</span><br>
                        <p><?php echo $prsn['dom'];?></p>
                        
                    </div>
                    <div class="card">
                        <i class='bx bx-spreadsheet' ></i><br>
                        <span>PublicLens No.</span><br>
                        <p><?php echo $prsn['plno'];?></p>
                        
                    </div>
                    <div></div>
                    <div class="rqst-button-holder" style="margin-top:-85px;" >
                        <form action="" method="post" style="overflow: inherit; height:0px;" id="rqstdata">
                            <input type="hidden" name="rqstplno" value="<?php echo $prsn['plno'];?>">
                            <input type="hidden" name="email" id="email" value="<?php echo $_SESSION["uname"];?>">
                            <input type="hidden" name="ses" id="ses" value="<?php echo $_SESSION["uname"];?>">
                            <input type="hidden" name="yrname" id="yrname" value="<?php echo $_SESSION["flname"];?>">
                            <button type="button" id="pop" name="popuprqst" class="next" style="margin-top: 0px; margin-left:-200px" >Request full data <i class='bx bx-download'></i> </button> 
                        </form>
                    </div>
                    <div></div>
                    <div class="report">
                        <a href="../../add/report-sighting.php?plno=<?php echo $prsn['plno'];?>">Report a sighting</a>
                    </div>
                </div>
            </div>
          </div>
    </div>
</div>

<?php
echo $footer;
?>