<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shadinota is School/Versity/College/Madrasha Education Management System</title>
     <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    

    <!-- style tags list-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->


  </head>
  <body>
        <?php 

     $mysqli = new mysqli('localhost', 'root', '', 'sms') or die(mysqli_error($mysqli));
     ?> 
     <?php
        require('admission_form_admin.php');
    ?> 
    <?php
        require('admission_form_update_admin.php');
        $update = true;
    ?>
    <div class="page">
      <!-- Main Navbar-->
     <?php include('includes/header.php') ?>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
      <?php include('includes/sidebar.php') ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
           <?php 

          if(isset($_SESSION['message'])): ?>
          <div class="alert alert-<?=$_SESSION['msg_type']; ?>">
           <?php 
           echo $_SESSION['message'];
           unset($_SESSION['message']);
           ?> 
          </div>
          <?php endif; ?>

	<!--middle content-->
           <section>
             <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Refresh</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <div class="w3-panel w3-green">
                      <h2 class="w3-animate-fading w3-text-white">Delete Students</h2>
                      </div>
                    </div>
                    <div class="card-body">
      						<?php

      					if(isset($_GET['delete'])){
      						$admission_id = $_GET['delete'];
      						$mysqli->query("DELETE FROM admission_form where admission_id = '$admission_id'") or die($mysqli->error());

      						$_SESSION['message'] = "Record has been Deleted!!";
      					  $_SESSION['msg_type'] = "danger";

      					    header("location: admission_form.php");
      					}

      					 ?>
    </div>

</div>
  </div>
                  </div>
           </section>

          <!-- Page Footer-->
          <?php include('includes/footer.php') ?>
        </div>
      </div>
    </div>
  <!-- js file list -->
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->

   <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>