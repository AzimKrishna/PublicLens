<?php 
session_start();

if (!isset($_SESSION["uname"])){
	header("Location: ../account/index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Report missing</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../img/fav.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons icons used -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
  </head>
<?php
include '../codes.php';
echo $header2;
?>

<div class="bg-art">
    <img src="../img/bg2.jpg" alt="">
    <div class="bg-art-quote">
        <div class="bg-art-quote-container">
        <h1><mark>Reporting someone </mark></h1> 
        <h1><mark>missing</mark></h1>
        <span><mark>Here you'll find the information you need </mark></span> <br>
        <span><mark>to decide whether you should report the </mark></span><br>
        <span><mark>person you are worrying about as a </mark></span><br>
        <span><mark>missing person.</mark></span><br>
        </div>
    </div>
</div>
<div class="home-section">
    <div class="primary-steps">
        <span id="pmary-steps-bold">
            Are you worried about someone and can't find them? What should you do?
        </span><br><br>
        <ol>
            <li><?php echo $psteps_desc;?></li><br>
        </ol>
        <?php echo $psteps_desc_1;?><br>
        <ol>
            <li>Go to your local position station or</li>
            <li>Call 100 (the main switchboard number for police in the India.)</li>
            <li>If the missing person is a child, or you belive them to be at serious risk of harm, always dial <u>100</u></li>
        </ol><br>
       <span>We cannot report your loved one missing to the police on your behalf but we can help in other ways.</span>
    </div>
    <div class="primary-steps-contact">
        <div class="primary-steps-contact-content">
            <span>We're here to support you, for free and in confidence.</span><br><br>
            <a href="report-form.php"><button id="addhere">Report missing  <i class='bx bxs-chevron-right' ></i></button></a>
        </div>
    </div>
    <div class="steps">
        <div class="steps-fancy">
            <span id="fsteps">First steps</span><br>
            <span id="fsteps-2">What are the actions I should take?</span>
        </div>
        <div class="steps-table">
            <table>
                <tr><td style="border-radius: 25px 25px 0 0 ;">Step 1: Try to find them yourself</td></tr>
                <tr><td>Step 2: Contact the police</td></tr>
                <tr><td style="border-radius: 0 0 25px 25px;">Step 3: Ask us to help</td></tr>
            </table>
        </div>
    </div><br>
    <div class="get-in-touch">
        <div id="bar"></div>
        <span id="quote6">We're here to talk!</span>  <br>
        <span id="quote6-desc">
        If you have been affected by a disappearance, you have information about a missing person,<br> 
        you’re interested in supporting us, or you a professional working with missing persons, we’d<br>
        love to hear from you.
        </span><br>
        <a href="../about-us/contact.php"><button>Get in touch      <i class="bx bxs-chevron-right" ></i></button></a>
    </div>
</div>
<?php
echo $footer;
?>