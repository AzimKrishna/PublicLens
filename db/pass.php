<?php

include 'config.php';

// enquiry entry into db

if (isset($_POST["enqs"])){
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $pno = mysqli_real_escape_string($conn, $_POST["pno"]);
    $msg = mysqli_real_escape_string($conn, $_POST["msg"]);
    $flname = $title." ".$fname." ".$lname;

    $sql = "INSERT INTO enq (flname, email, pno, msg) VALUES ('$flname', '$email', '$pno', '$msg')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../about-us/contact.php");
    } else {
       echo "<script>alert('Error.');</script>";
    }
}

// ******************************************************************

// missing person report into db

if (isset($_POST["rform"])){
    $flname = mysqli_real_escape_string($conn, $_POST["flname"]);
    $age = mysqli_real_escape_string($conn, $_POST["age"]);
    $sex = mysqli_real_escape_string($conn, $_POST["sex"]);
    $city = mysqli_real_escape_string($conn, $_POST["city"]);
    $city = strtolower($city);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $pno = mysqli_real_escape_string($conn, $_POST["pno"]);
    $dom = mysqli_real_escape_string($conn, $_POST["dom"]);
    $pom = mysqli_real_escape_string($conn, $_POST["pom"]);
    $height = mysqli_real_escape_string($conn, $_POST["height"]);
    $weight = mysqli_real_escape_string($conn, $_POST["weight"]);
    $cmplxn = mysqli_real_escape_string($conn, $_POST["cmplxn"]);
    $build = mysqli_real_escape_string($conn, $_POST["build"]);
    $hair = mysqli_real_escape_string($conn, $_POST["hair"]);
    $plno = 'PLNO' . time();
    $fir=$_FILES["fir"]["name"];
    $pimg=$_FILES["pimg"]["name"];
    $ext1= pathinfo($fir, PATHINFO_EXTENSION);
    $ext2= pathinfo($pimg, PATHINFO_EXTENSION);
    $firname = time() . '_' . rand(100, 999);
    $pimgname = time() . '_' . rand(100, 999);
    $fir_newame = sha1($firname) . '.' . $ext1;
    $pimg_newname = sha1($pimgname) . '.' . $ext2;

    move_uploaded_file($_FILES["fir"]["tmp_name"], "../uploads/reports/fir/" . $fir_newame);
    move_uploaded_file($_FILES["pimg"]["tmp_name"], "../uploads/reports/pimg/" . $pimg_newname);


    $sql = "INSERT INTO add_prsn (flname, age, sex, city, email, pno, dom, pom, height, weight, cmplxn, build, hair, pimg_newname, fir_newame, plno) 
            VALUES ('$flname', '$age', '$sex', '$city', '$email', '$pno', '$dom', '$pom', '$height', '$weight', '$cmplxn', '$build', '$hair', '$pimg_newname', '$fir_newame', '$plno')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../thanku.php");
    } else {
       echo "<script>alert('Error.');</script>";
    }
}

// ******************************************************************

// sighitings report into db

if (isset($_POST["rsight"])){
    $flname = mysqli_real_escape_string($conn, $_POST["flname"]);
    $age = mysqli_real_escape_string($conn, $_POST["age"]);
    $sex = mysqli_real_escape_string($conn, $_POST["sex"]);
    $pos = mysqli_real_escape_string($conn, $_POST["pos"]);
    $pos = strtolower($pos);
    $crcm = mysqli_real_escape_string($conn, $_POST["crcm"]);
    $dos = mysqli_real_escape_string($conn, $_POST["dos"]);
    $pno = mysqli_real_escape_string($conn, $_POST["pno"]);
    $height = mysqli_real_escape_string($conn, $_POST["height"]);
    $weight = mysqli_real_escape_string($conn, $_POST["weight"]);
    $cmplxn = mysqli_real_escape_string($conn, $_POST["cmplxn"]);
    $build = mysqli_real_escape_string($conn, $_POST["build"]);
    $hair = mysqli_real_escape_string($conn, $_POST["hair"]);

    $yname = mysqli_real_escape_string($conn, $_POST["yname"]);
    $ypno = mysqli_real_escape_string($conn, $_POST["ypno"]);
    $plno = mysqli_real_escape_string($conn, $_POST["plno"]);
    
    
    if(!file_exists($_FILES['pimg']['tmp_name']) || !is_uploaded_file($_FILES['pimg']['tmp_name'])) {
        $sql = "INSERT INTO add_found (flname, age, sex, pos, pno, dos, yname, height, weight, cmplxn, build, hair, crcm, ypno, plno) 
        VALUES ('$flname', '$age', '$sex', '$pos', '$pno', '$dos', '$yname', '$height', '$weight', '$cmplxn', '$build', '$hair', '$crcm', '$ypno', '$plno')";
        $result = mysqli_query($conn, $sql);
    }else{
        $pimg=$_FILES["pimg"]["name"];
        $ext2= pathinfo($pimg, PATHINFO_EXTENSION);
        $pimgname = time() . '_' . rand(100, 999);
        $pimg_newname = sha1($pimgname) . '.' . $ext2;
        move_uploaded_file($_FILES["pimg"]["tmp_name"], "../uploads/pimg_sighted/" . $pimg_newname);
        
        $sql = "INSERT INTO add_found (flname, age, sex, pos, pno, dos, yname, height, weight, cmplxn, build, hair, crcm, ypno, plno, pimg_newname) 
                VALUES ('$flname', '$age', '$sex', '$pos', '$pno', '$dos', '$yname', '$height', '$weight', '$cmplxn', '$build', '$hair', '$crcm', '$ypno', '$plno', '$pimg_newname')";
        $result = mysqli_query($conn, $sql);
    }


    if ($result) {
        header("Location: ../thanku.php");
    } else {
       echo "<script>alert('Error.');</script>";
    }
}

// ******************************************************************

// news adding into db (admin)

if (isset($_POST["newsadd-btn"])){
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $ndesc = $_POST["ndesc"];
    
    $nimage=$_FILES["nimage"]["name"];
    $ext2= pathinfo($nimage, PATHINFO_EXTENSION);
    $nimage = time() . '_' . rand(100, 999);
    $nimage = sha1($nimage) . '.' . $ext2;
    move_uploaded_file($_FILES["nimage"]["tmp_name"], "../img/news/" . $nimage);
    
    $sql = "INSERT INTO news (date, ndesc, nimage) 
            VALUES ('$date', '$ndesc', '$nimage')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../admin/services/news.php");
    } else {
       echo "<script>alert('Error.');</script>";
    }
}

// ******************************************************************

// news deleting from db (admin)

if (isset($_POST["del-btn-news"])){
    $nid = mysqli_real_escape_string($conn, $_POST["nid"]);
    $sql = "DELETE FROM news WHERE nid='$nid'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../admin/services/delnews.php");
    } else {
        echo "<script>alert('Error.');</script>";
    }
}

// ******************************************************************


// del new missing person report from db (admin)

if (isset($_POST["del-btn-mp"])){
    $p_id = mysqli_real_escape_string($conn, $_POST["p_id"]);
    $sql = "DELETE FROM add_prsn WHERE p_id='$p_id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../admin/services/mp.php");
    } else {
        echo "<script>alert('Error.');</script>";
    }
}


// ******************************************************************

//del new sighting from db (admin)

if (isset($_POST["del-btn-fp"])){
    $f_id = mysqli_real_escape_string($conn, $_POST["f_id"]);
    $sql = "DELETE FROM add_found WHERE f_id='$f_id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../admin/services/fp.php");
    } else {
        echo "<script>alert('Error.');</script>";
    }
}

// ******************************************************************

//del enq from db (admin)

if (isset($_POST["del-btn"])){
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sql = "DELETE FROM enq WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../admin/services/enq.php");
    } else {
        echo "<script>alert('Error.');</script>";
    }
}

// ******************************************************************




//view enq from db (admin)

if (isset($_POST["checking_viewbtn"])){
    $enqid= $_POST['enqid'];
    $sql = "SELECT * FROM enq WHERE id='$enqid'";
    $enq=mysqli_query($conn, $sql);


    if(mysqli_num_rows($enq) > 0){
        while($rows = mysqli_fetch_array($enq)){  
             $output = '  
                <div class="table-responsive">  
                <table class="table table-bordered" style="font-size: 18px;">
                  <tr>  
                       <td width="30%"><label><b>Full name</b></label></td>  
                       <td width="70%">'.$rows["flname"].'</td>  
                  </tr>  
                  <tr>  
                       <td width="30%"><label><b>Emaill</b></label></td>  
                       <td width="70%">'.$rows["email"].'</td>  
                  </tr>  
                  <tr>  
                       <td width="30%"><label><b>Phone</b></label></td>  
                       <td width="70%">'.$rows["pno"].'</td>  
                  </tr>  
                  <tr>  
                       <td width="30%"><label><b>Message</b></label></td>  
                       <td width="70%">'.$rows["msg"].'</td>  
                  </tr>  
                  <tr>  
                       <td width="30%"><label><b>Time</b></label></td>  
                       <td width="70%">'.$rows["ts"].'</td>  
                  </tr>  
                  ';  
        }  
        $output .= "</table></div>";  
        echo $output;  

    }else{
        echo $output = "<h5>No record found</h5>";
    }


}

// ******************************************************************


//view missing person reports from db (admin)


if (isset($_POST["checking_mp_btn"])){
    $prsnid= $_POST['prsnid'];
    $sql = "SELECT * FROM add_prsn WHERE p_id='$prsnid'";
    $enqp = mysqli_query($conn, $sql);

    if(mysqli_num_rows($enqp) > 0){
        while($rows = mysqli_fetch_array($enqp)){  
             $output = '  
             <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Report details</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
             <div class="mp_viewing_data">
             <div class="table-responsive">  
             <table class="table table-bordered" style="font-size: 18px;">
               <tr>  
                    <td width="30%"><label><b>PublicLens No.</b></label></td>  
                    <td width="70%">'.$rows["plno"].'</td>  
               </tr>  
               <tr>  
                    <td width="30%"><label><b>Full name</b></label></td>  
                    <td width="70%">'.$rows["flname"].'</td>  
               </tr>  
               <tr>  
                    <td width="30%"><label><b>Photo</b></label></td>  
                    <td width="70%" style="text-align:center;"><a href="../../uploads/reports/pimg/'.$rows["pimg_newname"].'" target="_blank"> <img src="../../uploads/reports/pimg/'.$rows["pimg_newname"].'" alt="" style="height:150px; width: 150px;"></a></td>  
               </tr>  
               <tr>  
                    <td width="30%"><label><b>Emaill</b></label></td>  
                    <td width="70%">'.$rows["email"].'</td>  
               </tr>  
               <tr>  
                    <td width="30%"><label><b>Phone</b></label></td>  
                    <td width="70%">'.$rows["pno"].'</td>  
               </tr>  
               <tr>  
                    <td width="30%"><label><b>Age</b></label></td>  
                    <td width="70%">'.$rows["age"].'</td>  
               </tr>  
               <tr>  
                    <td width="30%"><label><b>Gender</b></label></td>  
                    <td width="70%">'.$rows["sex"].'</td>  
               </tr>  
               <tr>  
                     <td width="30%"><label><b>Resident city</b></label></td>  
                     <td width="70%">'.$rows["city"].'</td>  
               </tr>
               <tr>  
                     <td width="30%"><label><b>Date of missing</b></label></td>  
                     <td width="70%">'.$rows["dom"].'</td>  
               </tr>
               <tr>  
                     <td width="30%"><label><b>Place of missing</b></label></td>  
                     <td width="70%">'.$rows["pom"].'</td>  
               </tr>
               <tr>  
                     <td width="30%"><label><b>Height</b></label></td>  
                     <td width="70%">'.$rows["height"].'</td>  
               </tr>
               <tr>  
                     <td width="30%"><label><b>Weight</b></label></td>  
                     <td width="70%">'.$rows["weight"].'</td>  
               </tr>
               <tr>  
                     <td width="30%"><label><b>Complexion</b></label></td>  
                     <td width="70%">'.$rows["cmplxn"].'</td>  
               </tr>
               <tr>  
                     <td width="30%"><label><b>Build</b></label></td>  
                     <td width="70%">'.$rows["build"].'</td>  
               </tr>
               <tr>  
                     <td width="30%"><label><b>Hair</b></label></td>  
                     <td width="70%">'.$rows["hair"].'</td>  
               </tr>
               <tr>  
                     <td width="30%"><label><b>FIR file</b></label></td>  
                     <td width="70%"><a href="../../uploads/reports/fir/'.$rows["fir_newame"].'" target="_blank">Click to view</a></td>  
               </tr>  
               </table></div>
             </div>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <form action="../../db/pass.php" method="post" id="aprv" name="aprv">
                <input type="hidden" name="prsnid" value="'.$prsnid.'">
                
                <button type="submit" name="aprvd" id="aprvd" onclick="document.getElementById("aprv").submit();" class="btn btn-primary" >Approve</button>
             </form>
           </div>
                                                  
                  ';  
        }    
        echo $output;  

    }else{
        echo $output = "<h5>No record found</h5>";
    }


}

// ******************************************************************

// approve report missing person into db (admin)

if (isset($_POST["aprvd"])){
    $prsnid = mysqli_real_escape_string($conn, $_POST["prsnid"]);
    $sql="SELECT * FROM add_prsn WHERE p_id='$prsnid'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $rows = mysqli_fetch_array($result);

        $flname = $rows["flname"];
        $age = $rows["age"];
        $sex = $rows["sex"];
        $city = $rows["city"];
        $email = $rows["email"];
        $pno = $rows["pno"];
        $dom = $rows["dom"];
        $pom = $rows["pom"];
        $height = $rows["height"];
        $weight = $rows["weight"];
        $cmplxn = $rows["cmplxn"];
        $build = $rows["build"];
        $hair = $rows["hair"];
        $plno = $rows["plno"];
        $fir=$rows["fir_newame"];
        $pimg=$rows["pimg_newname"];

        $sql1 = "INSERT INTO apr_miss (flname, age, sex, city, email, pno, dom, pom, height, weight, cmplxn, build, hair, pimg_newname, fir_newame, plno) 
            VALUES ('$flname', '$age', '$sex', '$city', '$email', '$pno', '$dom', '$pom', '$height', '$weight', '$cmplxn', '$build', '$hair', '$pimg', '$fir', '$plno')";
        $result1 = mysqli_query($conn, $sql1);

        $sql1 = "DELETE FROM add_prsn WHERE p_id='$prsnid'";
        $result1 = mysqli_query($conn, $sql1);
        if ($result1) {
            header("Location: ../admin/services/mp.php");
        } else {
            echo "<script>alert('Error I.');</script>";
        }

    }
}

// ******************************************************************


//view enq from db (admin)


if (isset($_POST["checking_fp_btn"])){
    $prsnid= $_POST['prsnid'];
    $sql = "SELECT * FROM add_found WHERE f_id='$prsnid'";

    $enqp = mysqli_query($conn, $sql);

    if(mysqli_num_rows($enqp) > 0){
        while($rows = mysqli_fetch_array($enqp)){  
            $plno=$rows["plno"];
             $output = '  
             <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Sighting details</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
             <div class="fp_viewing_data">
             <div class="table-responsive">  
             <table class="table table-bordered" style="font-size: 18px;">
               <tr>  
                    <td width="30%"><label><b>PublicLens No.</b></label></td>                                                <!-- SIGHTING DETAILS -->
                    <td width="70%">'.$rows["plno"].'</td>  
               </tr>  
               <tr>  
                    <td width="30%"><label><b>Full name</b></label></td>  
                    <td width="70%">'.$rows["flname"].'</td>  
               </tr>  
               <tr>  
                    <td width="30%"><label><b>Photo</b></label></td>  
                    <td width="70%" style="text-align:center;"><a href="../../uploads/pimg_sighted/'.$rows["pimg_newname"].'" target="_blank"> <img src="../../uploads/pimg_sighted/'.$rows["pimg_newname"].'" alt="" style="height:150px; width: 150px;"></a></td>  
               </tr>  
               <tr>  
                    <td width="30%"><label><b>Phone</b></label></td>  
                    <td width="70%">'.$rows["pno"].'</td>  
               </tr>  
               <tr>  
                    <td width="30%"><label><b>Age</b></label></td>  
                    <td width="70%">'.$rows["age"].'</td>  
               </tr>  
               <tr>  
                    <td width="30%"><label><b>Gender</b></label></td>  
                    <td width="70%">'.$rows["sex"].'</td>  
               </tr>  
               <tr>  
                     <td width="30%"><label><b>City of sighting</b></label></td>  
                     <td width="70%">'.$rows["pos"].'</td>  
               </tr>
               <tr>  
                     <td width="30%"><label><b>Date of sighting</b></label></td>  
                     <td width="70%">'.$rows["dos"].'</td>  
               </tr>
               <tr>  
                     <td width="30%"><label><b>Height</b></label></td>  
                     <td width="70%">'.$rows["height"].'</td>  
               </tr>
               <tr>  
                     <td width="30%"><label><b>Weight</b></label></td>  
                     <td width="70%">'.$rows["weight"].'</td>  
               </tr>
               <tr>  
                     <td width="30%"><label><b>Complexion</b></label></td>  
                     <td width="70%">'.$rows["cmplxn"].'</td>  
               </tr>
               <tr>  
                     <td width="30%"><label><b>Build</b></label></td>  
                     <td width="70%">'.$rows["build"].'</td>  
               </tr>
               <tr>  
                     <td width="30%"><label><b>Hair</b></label></td>  
                     <td width="70%">'.$rows["hair"].'</td>  
               </tr>
               <tr>  
                     <td width="30%"><label><b>Sighting circumstances</b></label></td>  
                     <td width="70%">'.$rows["crcm"].'</td>  
               </tr>
               <tr>  
                     <td colspan="2" style="text-align: center;"><label><b>Submitted by</b></label></td>  
               </tr>               
               <tr>  
                     <td width="30%"><label><b>Full name</b></label></td>  
                     <td width="70%">'.$rows["yname"].'</td>  
               </tr>
               <tr>  
                     <td width="30%"><label><b>Phone</b></label></td>  
                     <td width="70%">'.$rows["ypno"].'</td>  
               </tr>              

               </table>
               
               </div>

             </div>
           </div>
                    ';
            if(!$plno==''){
                $sql2="SELECT * FROM apr_miss WHERE plno='$plno'";
                $result2=mysqli_query($conn, $sql2);
                if(mysqli_num_rows($result2) > 0){
                    while($rows2 = mysqli_fetch_array($result2)){
        
                        $output.='
                        <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Record that matches Public Lens no.</h5>
                         </div>
                
                         <div class="modal-body"> 
                             <div class="fp_viewing_data">
                             <div class="table-responsive">  
                             <table class="table table-bordered" style="font-size: 18px;">
                             <tr>  
                                  <td width="30%"><label><b>PublicLens No.</b></label></td>  
                                  <td width="70%">'.$rows2["plno"].'</td>  
                             </tr>  
                             <tr>  
                                  <td width="30%"><label><b>Full name</b></label></td>  
                                  <td width="70%">'.$rows2["flname"].'</td>  
                             </tr>  
                             <tr>  
                                  <td width="30%"><label><b>Photo</b></label></td>  
                                  <td width="70%" style="text-align:center;"><a href="../../uploads/reports/pimg/'.$rows2["pimg_newname"].'" target="_blank"> <img src="../../uploads/reports/pimg/'.$rows2["pimg_newname"].'" alt="" style="height:150px; width: 150px;"></a></td>  
                             </tr>  
                             <tr>  
                                  <td width="30%"><label><b>Emaill</b></label></td>  
                                  <td width="70%">'.$rows2["email"].'</td>  
                             </tr>  
                             <tr>  
                                  <td width="30%"><label><b>Phone</b></label></td>  
                                  <td width="70%">'.$rows2["pno"].'</td>  
                             </tr>  
                             <tr>  
                                  <td width="30%"><label><b>Age</b></label></td>  
                                  <td width="70%">'.$rows2["age"].'</td>  
                             </tr>  
                             <tr>  
                                  <td width="30%"><label><b>Gender</b></label></td>  
                                  <td width="70%">'.$rows2["sex"].'</td>  
                             </tr>  
                             <tr>  
                                   <td width="30%"><label><b>Resident city</b></label></td>  
                                   <td width="70%">'.$rows2["city"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Date of missing</b></label></td>  
                                   <td width="70%">'.$rows2["dom"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Place of missing</b></label></td>  
                                   <td width="70%">'.$rows2["pom"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Height</b></label></td>  
                                   <td width="70%">'.$rows2["height"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Weight</b></label></td>  
                                   <td width="70%">'.$rows2["weight"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Complexion</b></label></td>  
                                   <td width="70%">'.$rows2["cmplxn"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Build</b></label></td>  
                                   <td width="70%">'.$rows2["build"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Hair</b></label></td>  
                                   <td width="70%">'.$rows2["hair"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>FIR file</b></label></td>  
                                   <td width="70%"><a href="../../uploads/reports/fir/'.$rows2["fir_newame"].'" target="_blank">Click to view</a></td>  
                             </tr>  
                             </table>
                               
                               </div>
                
                             </div>
                           </div>
                
                
                           
                           <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                             <form action="../../db/pass.php" method="post" id="aprvs" name="aprvs">
                                <input type="hidden" name="plno" value="'.$rows2["plno"].'">
                                
                                <button type="submit" name="aprvds" id="aprvds" onclick="document.getElementById("aprvs").submit();" class="btn btn-primary" >Approve Sighting</button>
                             </form>
                           </div>
                                                                  
                                  ';
        
        
                    }
                }
            }else{
    
    
                $output.='                       <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>';
            }     
                               
                    
                    
                      

        }    
        echo $output;  

    }else{
        echo $output = "<h5>No record found</h5>";
    }


}

// ******************************************************************

// approve sighting to found person into db (admin)

if (isset($_POST["aprvds"])){

    $plno = mysqli_real_escape_string($conn, $_POST["plno"]);
    $sql="SELECT * FROM apr_miss WHERE plno='$plno'";

    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $rows = mysqli_fetch_array($result);

        $flname = $rows["flname"];
        $age = $rows["age"];
        $sex = $rows["sex"];
        $city = $rows["city"];
        $email = $rows["email"];
        $pno = $rows["pno"];
        $dom = $rows["dom"];
        $pom = $rows["pom"];
        $height = $rows["height"];
        $weight = $rows["weight"];
        $cmplxn = $rows["cmplxn"];
        $build = $rows["build"];
        $hair = $rows["hair"];
        $plno = $rows["plno"];
        $fir=$rows["fir_newame"];
        $pimg=$rows["pimg_newname"];

        $sql1 = "INSERT INTO apr_fnd (flname, age, sex, city, email, pno, dom, pom, height, weight, cmplxn, build, hair, pimg_newname, fir_newame, plno) 
            VALUES ('$flname', '$age', '$sex', '$city', '$email', '$pno', '$dom', '$pom', '$height', '$weight', '$cmplxn', '$build', '$hair', '$pimg', '$fir', '$plno')";
        $result1 = mysqli_query($conn, $sql1);

        $sql1 = "DELETE FROM apr_miss WHERE plno='$plno'";
        $result1 = mysqli_query($conn, $sql1);

        $sql1 = "DELETE FROM add_found WHERE plno='$plno'";
        $result1 = mysqli_query($conn, $sql1);

        if ($result1) {
            header("Location: ../admin/services/fp.php");
        } else {
            echo "<script>alert('Error I.');</script>";
        }

    }
}

// ******************************************************************



//view missing person reports from db (admin)


if (isset($_POST["all_mp_btn"])){

    $prsnid= $_POST['prsnid'];
    $sql = "SELECT * FROM apr_miss WHERE p_id='$prsnid'";
    $enqp = mysqli_query($conn, $sql);

    if(mysqli_num_rows($enqp) > 0){
        while($rows = mysqli_fetch_array($enqp)){  
             $output = '  
             <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Report details</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
             <div class="mp_viewing_data">
             <div class="table-responsive">  
             <table class="table table-bordered" style="font-size: 18px;">
                             <tr>  
                                  <td width="30%"><label><b>PublicLens No.</b></label></td>  
                                  <td width="70%">'.$rows["plno"].'</td>  
                             </tr>  
                             <tr>  
                                  <td width="30%"><label><b>Full name</b></label></td>  
                                  <td width="70%">'.$rows["flname"].'</td>  
                             </tr>  
                             <tr>  
                                  <td width="30%"><label><b>Photo</b></label></td>  
                                  <td width="70%" style="text-align:center;"><a href="../../uploads/reports/pimg/'.$rows["pimg_newname"].'" target="_blank"> <img src="../../uploads/reports/pimg/'.$rows["pimg_newname"].'" alt="" style="height:150px; width: 150px;"></a></td>  
                             </tr>  
                             <tr>  
                                  <td width="30%"><label><b>Emaill</b></label></td>  
                                  <td width="70%">'.$rows["email"].'</td>  
                             </tr>  
                             <tr>  
                                  <td width="30%"><label><b>Phone</b></label></td>  
                                  <td width="70%">'.$rows["pno"].'</td>  
                             </tr>  
                             <tr>  
                                  <td width="30%"><label><b>Age</b></label></td>  
                                  <td width="70%">'.$rows["age"].'</td>  
                             </tr>  
                             <tr>  
                                  <td width="30%"><label><b>Gender</b></label></td>  
                                  <td width="70%">'.$rows["sex"].'</td>  
                             </tr>  
                             <tr>  
                                   <td width="30%"><label><b>Resident city</b></label></td>  
                                   <td width="70%">'.$rows["city"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Date of missing</b></label></td>  
                                   <td width="70%">'.$rows["dom"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Place of missing</b></label></td>  
                                   <td width="70%">'.$rows["pom"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Height</b></label></td>  
                                   <td width="70%">'.$rows["height"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Weight</b></label></td>  
                                   <td width="70%">'.$rows["weight"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Complexion</b></label></td>  
                                   <td width="70%">'.$rows["cmplxn"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Build</b></label></td>  
                                   <td width="70%">'.$rows["build"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Hair</b></label></td>  
                                   <td width="70%">'.$rows["hair"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>FIR file</b></label></td>  
                                   <td width="70%"><a href="../../uploads/reports/fir/'.$rows["fir_newame"].'" target="_blank">Click to view</a></td>  
                             </tr>  
                             </table></div>
             </div>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <form action="../../db/pass.php" method="post" id="find" name="find">
                <input type="hidden" name="plno" value="'.$rows["plno"].'">
                
                <button type="submit" name="found" id="found" onclick="document.getElementById("find").submit();" class="btn btn-primary" >Confirm found</button>
             </form>
           </div>
                                                  
                  ';  
        }    
        echo $output;  

    }else{
        echo $output = "<h5>No record found</h5>";
    }


}

// ******************************************************************

// change missing person to found person into db (admin)

if (isset($_POST["found"])){

    $plno = mysqli_real_escape_string($conn, $_POST["plno"]);
    $sql="SELECT * FROM apr_miss WHERE plno='$plno'";

    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $rows = mysqli_fetch_array($result);

        $flname = $rows["flname"];
        $age = $rows["age"];
        $sex = $rows["sex"];
        $city = $rows["city"];
        $email = $rows["email"];
        $pno = $rows["pno"];
        $dom = $rows["dom"];
        $pom = $rows["pom"];
        $height = $rows["height"];
        $weight = $rows["weight"];
        $cmplxn = $rows["cmplxn"];
        $build = $rows["build"];
        $hair = $rows["hair"];
        $plno = $rows["plno"];
        $fir=$rows["fir_newame"];
        $pimg=$rows["pimg_newname"];

        $sql1 = "INSERT INTO apr_fnd (flname, age, sex, city, email, pno, dom, pom, height, weight, cmplxn, build, hair, pimg_newname, fir_newame, plno) 
            VALUES ('$flname', '$age', '$sex', '$city', '$email', '$pno', '$dom', '$pom', '$height', '$weight', '$cmplxn', '$build', '$hair', '$pimg', '$fir', '$plno')";

        $result1 = mysqli_query($conn, $sql1);

        $sql1 = "DELETE FROM apr_miss WHERE plno='$plno'";
        $result1 = mysqli_query($conn, $sql1);

        if ($result1) {
            header("Location: ../admin/services/mp-view.php");
        } else {
            echo "<script>alert('Error I.');</script>";
        }

    }
}

// ******************************************************************


//view found people reports from db (admin)


if (isset($_POST["all_fp_btn"])){

    $prsnid= $_POST['prsnid'];
    $sql = "SELECT * FROM apr_fnd WHERE p_id='$prsnid'";
    $enqp = mysqli_query($conn, $sql);

    if(mysqli_num_rows($enqp) > 0){
        while($rows = mysqli_fetch_array($enqp)){  
             $output = '  
             <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Profile details</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
             <div class="mp_viewing_data">
             <div class="table-responsive">  
             <table class="table table-bordered" style="font-size: 18px;">
                             <tr>  
                                  <td width="30%"><label><b>PublicLens No.</b></label></td>  
                                  <td width="70%">'.$rows["plno"].'</td>  
                             </tr>  
                             <tr>  
                                  <td width="30%"><label><b>Full name</b></label></td>  
                                  <td width="70%">'.$rows["flname"].'</td>  
                             </tr>  
                             <tr>  
                                  <td width="30%"><label><b>Photo</b></label></td>  
                                  <td width="70%" style="text-align:center;"><a href="../../uploads/reports/pimg/'.$rows["pimg_newname"].'" target="_blank"> <img src="../../uploads/reports/pimg/'.$rows["pimg_newname"].'" alt="" style="height:150px; width: 150px;"></a></td>  
                             </tr>  
                             <tr>  
                                  <td width="30%"><label><b>Emaill</b></label></td>  
                                  <td width="70%">'.$rows["email"].'</td>  
                             </tr>  
                             <tr>  
                                  <td width="30%"><label><b>Phone</b></label></td>  
                                  <td width="70%">'.$rows["pno"].'</td>  
                             </tr>  
                             <tr>  
                                  <td width="30%"><label><b>Age</b></label></td>  
                                  <td width="70%">'.$rows["age"].'</td>  
                             </tr>  
                             <tr>  
                                  <td width="30%"><label><b>Gender</b></label></td>  
                                  <td width="70%">'.$rows["sex"].'</td>  
                             </tr>  
                             <tr>  
                                   <td width="30%"><label><b>Resident city</b></label></td>  
                                   <td width="70%">'.$rows["city"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Date of missing</b></label></td>  
                                   <td width="70%">'.$rows["dom"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Place of missing</b></label></td>  
                                   <td width="70%">'.$rows["pom"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Height</b></label></td>  
                                   <td width="70%">'.$rows["height"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Weight</b></label></td>  
                                   <td width="70%">'.$rows["weight"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Complexion</b></label></td>  
                                   <td width="70%">'.$rows["cmplxn"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Build</b></label></td>  
                                   <td width="70%">'.$rows["build"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>Hair</b></label></td>  
                                   <td width="70%">'.$rows["hair"].'</td>  
                             </tr>
                             <tr>  
                                   <td width="30%"><label><b>FIR file</b></label></td>  
                                   <td width="70%"><a href="../../uploads/reports/fir/'.$rows["fir_newame"].'" target="_blank">Click to view</a></td>  
                             </tr>  
                             </table></div>
             </div>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
           </div>
                                                  
                  ';  
        }    
        echo $output;  

    }else{
        echo $output = "<h5>No record found</h5>";
    }


}

// ******************************************************************


// check email


if (isset($_POST["check_email"])){
    $email= $_POST['email'];
    $sql = "SELECT * FROM user_reg WHERE email='$email'";
    $enqp = mysqli_query($conn, $sql);

    if(mysqli_num_rows($enqp) > 0){
        echo $output = "<span style='color: red; font-size: 12px;'>Email is already registered.❌</span>";
    }else{
        echo $output = "<span style='color: green; font-size: 12px;'>It's available.✔️</span>";
    }


}

// ******************************************************************
?>