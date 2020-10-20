<?php
session_start();
if(!isset($_SESSION['loggedin']))
{
    header('Location: ../login.php');
    exit;
}
include '../dbconnect.php';
?>
<?php
$stmt=$conn->prepare('SELECT Name, Phone, Email, Age, blood, gender FROM model WHERE Email=? ');
// $run_result = mysqli_query($conn,$result_query);
$stmt -> bind_param('s',$_SESSION['Email']);
$stmt->execute();
$stmt -> bind_result($Name, $Phone, $Email, $Age, $blood, $gender);
$stmt ->fetch();
$stmt -> close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile & Symptoms</title>

   
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/responsive.css"/>
</head>
<body>
<div class="row">
    <div class="col-sm-6">
  <div class="boxxx">
      <div class="glass"></div>
  <div class="content">
  <!-- <img src="../img/avatar.png" class="avatar"> -->
    <h2 style="margin-bottom:20px; text-align: center; color:#ffffff;">Patient Information</h2>
    <hr>
    <h3>Patient's Name: <?= $Name ?> </h3>
    <h3>Age: <?= $Age ?> </h3>
    <h3>Gender: <?= $gender ?> </h3>
    <h3>Contact No: <?= $Phone ?> </h3>
    <h3>Email id: <?= $Email ?> </h3>
    <h3>Blood group: <?= $blood ?> </h3>
    </div>
  </div>
  </div>
  <div class="col-sm-6">
  <div class="boxxx">
    <div class="glass"></div>
  <div class="content">
  <h2 style="text-align: center; color:#ffffff;">Enter Symptoms</h2>
  <form
                class="form-wrap"
                action=""
                method="post"
              >

                <textarea
                  name="symptoms"
                  class="form-control sym"
                  
                  rows="5"
                  placeholder="Clearly Enter your symptoms"
                  onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Clearly Enter your symptoms'"
                ></textarea> 
                <br><br>
                <div class="text-center confirm_btn_box">
                  <button
                    type="submit"
                    name="submit"
                    class="main_btn text-uppercase"
                  >
                    Submit
                  </button>
                 </div>
            </form>
            </div>
  
  
  </div>
  </div>
  </div>
<?php
  if (isset($_POST['submit']))
    {
      $symptoms=$_POST['symptoms'];
      if($symptoms !=''){
        header("Location: http://localhost:5000/?symptoms=".$symptoms);
      }
      else{
        echo'Please enter your symptoms';
      }
    }
      ?>
   <style>

body {
      height: 100%;
    width: 100%;
  
background-color: #010615;
font-family: "Kaushan Script","Helvetica Neue",Helvetica,Arial,cursive; 
	background-attachment: fixed;	
  background-size: cover;
  overflow-x: hidden;
  justify-content: center;
  align-items: center;

    }
    .boxxx{
      position: relative;
      width: 320px;
      height: 380px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
  align-items: center;
  background-color: #060c21;
  margin: 80px;
    }
    .boxxx:before{
      content: '';
      position: absolute;
      top: -1px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      background: #fff;
      z-index: -1;
    }
    .boxxx:after{
      content: '';
      position: absolute;
      top: -1px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      background: #fff;
      z-index: -2;
      filter: blur(40px);
    }
    .boxxx:nth-child(1):before,
    .boxxx:nth-child(1):after
    {
      background: linear-gradient(235deg,#89ff00,#010615,#00bcd4);
    }
    
    .boxxx .glass{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: block;
      background: rgba(255, 255, 255, .1);
      pointer-events: none;
    }

    .boxxx .content h3{
   color:#ffffff;
   font-size:18px;
    }
    .sym{
      width:300px;
      margin-top:20px;
      padding:15px;
    }


     </style>

    <script src="../js/mail-script.js"></script>
    <script src="../js/custom.js"></script>
</body>
</html>