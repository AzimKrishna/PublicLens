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
$sql_enq = "SELECT * FROM enq ORDER BY ts DESC";
$enq_data=mysqli_query($conn, $sql_enq);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Enquiries</title>
    <link rel="stylesheet" href="../../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons icons used -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body>
<!-- Modal -->
<div class="modal fade" id="enq_viewingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enquiry details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="enq_viewing_data">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Reply</button>
      </div>
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
          <a href="#">Report <i class="bx bxs-chevron-down arrow adar"></i></a>
          <ul class="addhere-smenu smenu" style="top:63px; padding-left:0px;">
            <li><a href="mp.php">Missing Person</a></li>
            <li><a href="fp.php">Sightings</a></li>

          </ul>
        </li>
        <li>
          <a href="#">Search <i class="bx bxs-chevron-down arrow srar"></i></a>
          <ul class="addhere-smenu smenu" style="top:63px; padding-left:0px;">
            <li><a href="mp-view.php">Missing Person</a></li>
            <li><a href="fp-view.php">Found Person</a></li>

          </ul>
        </li>
        <li><a href="enq.php" class="active">Enquiries</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="../../db/logout.php">Logout <i class="bx bx-exit" ></i></a></li>
      </ul>
    </div>
</nav>
<div class="home-section-admin">
<div class="bg-art-small">
        <img src="../../img/bg2.jpg" alt="">
        <div class="bg-art-quote" style="padding-top: 70px; font-size:40px;">
            <div class="bg-art-quote-container">
            <h1 style="font-size:40px; padding-top:40px; font-weight: bold;"><mark>Enquiry panel</mark></h1> 

            </div>
        </div>
    </div>
    <div class="enq-holder" style="position: relative;top: -140px; width:63%;">
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th style="width:5%;">Sl.no</th>
              <th style="width:15%;">Name</th>
              <th style="width:15%;">Email</th>
              <th style="width:35%;">Message</th>
              <th style="width:10%;">Action</th>
              <th style="width:10%;">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
              if(mysqli_num_rows($enq_data) > 0)        
              {
                  while($enq = mysqli_fetch_assoc($enq_data))
                  {
              ?>
                  <tr>

                      <td><?php  echo $i; ?> <span class="enqid" style="opacity: 0;"><?php echo $enq['id'];?></span></td>
                      <td><?php  echo $enq['flname']; ?></td>
                      <td><?php  echo $enq['email']; ?></td>
                      <td><?php  echo $enq['msg']; ?></td>
                      <td>
                          <form action="#" method="post">
                              <input type="hidden" name="id" value="<?php echo $enq['id']; ?>">
                              <button type="button" name="view-btn" class="enq-view view-btn">VIEW<i class='bx bxs-chevron-right'></i></button>
                          </form>
                      </td>
                      <td>
                          <form action="../../db/pass.php" method="post">
                              <input type="hidden" name="id" value="<?php echo $enq['id']; ?>">
                              <button type="submit" name="del-btn" id='del-btn-spcf' class="enq-del">DEL<i class='bx bxs-chevron-right'></i></button>
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
        
        $('.view-btn').click(function (e) { 
          e.preventDefault();

          var enqid= $(this).closest('tr').find('.enqid').text();
          // console.log(enqid);

          $.ajax({
            type: "POST",
            url: "../../db/pass.php",
            data: {
              'checking_viewbtn': true,
              'enqid': enqid
            },
            success: function (response) {
              // console.log(response);
              $('.enq_viewing_data').html(response);
              $('#enq_viewingModal').modal('show');
            }
          });

        });

    });


</script>
<?php
echo $footer_admin;

?>
