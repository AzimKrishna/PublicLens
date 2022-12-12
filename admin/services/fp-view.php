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
$sql_prsn = "SELECT * FROM apr_fnd ORDER BY p_id DESC";
$prsn_data=mysqli_query($conn, $sql_prsn);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View found people</title>
    <link rel="stylesheet" href="../../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons icons used -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body>
<!-- Modal -->
<div class="modal fade" id="mp_viewingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

    </div>
  </div>
</div>
<!-- modal -->
<nav>
  
  <div class="logo"> <i class="bx bx-target-lock lgo"></i>Admin Panel</div>
    <div class="nav-links">
      <ul class="links">
        <li><a href="../dash.php">Home</a></li>
        <li>
          <a href="#" >Report <i class="bx bxs-chevron-down arrow adar"></i></a>
          <ul class="addhere-smenu smenu" style="top:63px; padding-left:0px;">
            <li><a href="mp.php">Missing Person</a></li>
            <li><a href="fp.php">Sightings</a></li>

          </ul>
        </li>
        <li>
          <a href="#" class="active">Search <i class="bx bxs-chevron-down arrow srar"></i></a>
          <ul class="addhere-smenu smenu" style="top:63px; padding-left:0px;">
            <li><a href="mp-view.php">Missing Person</a></li>
            <li><a href="fp-view.php">Found Person</a></li>

          </ul>
        </li>
        <li><a href="enq.php" >Enquiries</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="../../db/logout.php">Logout <i class="bx bx-exit" ></i></a></li>
      </ul>
    </div>
</nav>
<div class="home-section-admin">
<div class="bg-art-small">
        <img src="../../img/bg2.jpg" alt="">
        <div class="bg-art-quote" style="padding-top: 70px; font-size:40px;">
            <div class="bg-art-quote-container" style="margin-left: -225px;">
            <h1 style="font-size:40px; padding-top:40px"><mark><b>All found person reports</b></mark></h1> 

            </div>
        </div>
    </div>
    <div class="enq-holder" style="position: relative;top: -140px; width:87%;">
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th style="width:5%;">Sl.no</th>
              <th style="width:10%;">Name</th>
              <th style="width:5%;">Sex</th>
              <th style="width:5%;">Age</th>
              <th style="width:5%;">City</th>
              <th style="width:8%;">Phone</th>
              <th style="width:10%;">Date of missing</th>
              <th style="width:10%;">Place of missing</th>
              <th style="width:5%;">Height</th>
              <th style="width:5%;">Weight</th>
              <th style="width:10%;">View</th>
            </tr>
          </thead>
          <tbody>
          <?php
              if(mysqli_num_rows($prsn_data) > 0)        
              {
                  while($prsn = mysqli_fetch_assoc($prsn_data))
                  {
              ?>
                  <tr>
                      <td><?php  echo $i; ?> <span class="prsnid" style="opacity: 0;"><?php echo $prsn['p_id'];?></span></td>
                      <td><?php  echo $prsn['flname']; ?></td>
                      <td><?php  echo $prsn['sex']; ?></td>
                      <td><?php  echo $prsn['age']; ?></td>
                      <td><?php  echo $prsn['city']; ?></td>
                      <td><?php  echo $prsn['pno']; ?></td>
                      <td><?php  echo $prsn['dom']; ?></td>
                      <td><?php  echo $prsn['pom']; ?></td>
                      <td><?php  echo $prsn['height']; ?></td>
                      <td><?php  echo $prsn['weight']; ?></td>
                      <td>
                          <form action="#" method="post">
                              <input type="hidden" name="p_id" value="<?php echo $prsn['p_id']; ?>">
                              <button type="button" name="view-btn-mp" class="enq-view">VIEW<i class='bx bxs-chevron-right'></i></button>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script>

$(document).ready(function () {
        
        $('.enq-view').click(function (e) { 
          e.preventDefault();

          var prsnid= $(this).closest('tr').find('.prsnid').text();
          // console.log(prsnid);

          $.ajax({
            type: "POST",
            url: "../../db/pass.php",
            data: {
              'all_fp_btn': true,
              'prsnid': prsnid
            },
            success: function (response) {
              // console.log(response);
              $('.modal-content').html(response);
              $('#mp_viewingModal').modal('show');
            }
          });

        });

    });



</script>
<?php
echo $footer_admin;

?>
