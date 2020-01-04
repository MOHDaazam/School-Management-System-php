<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shadinota is School/Versity/College/Madrasha Education Management System</title>
     <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <link rel="shortcut icon" href="img/favicon.ico">

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
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->


  </head>
  <body>
    <?php 
     require('admission_form_admin.php');
     $mysqli = new mysqli('localhost', 'root', '', 'sms') or die(mysqli_error($mysqli));
     $result = $mysqli->query("SELECT * FROM admission_form") or die($mysqli->error);
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
          </header><br>
     <a href="admission_form.php" class="btn btn-success btn-lg">Back</a>
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
                      <h2 class="w3-animate-fading w3-text-white">All Students Information</h2>
                      </div>
                    </div>
                    <div class="card-body">
                     <table class="table table-responsive table-stripped">
                          <thead>
                            <tr>
                              <th>F N</th>
                              <th>L N</th>
                              <th>Roll</th>
                              <th>ID</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Gender</th>
                              <th>DOB</th>
                              <th>Blood</th>
                              <th>Religion</th>
                              <th>Class</th>
                              <th>Section</th>
                              <th>Bio</th>
                              <th>Photo</th>

                              <th colspan="2">Action</th>
                            </tr>
                          </thead>
                          <?php 
                              while($row = $result->fetch_assoc()):
                          ?>
                          <tr>
                          <td><?php echo $row['fname']; ?></td>
                          <td><?php echo $row['lname']; ?></td>    
                          <td><?php echo $row['roll']; ?></td>
                          <td><?php echo $row['admission_id']; ?></td>
                          <td><?php echo $row['email']; ?></td>
                          <td><?php echo $row['phone']; ?></td>
                          <td><?php echo $row['gender']; ?></td>
                          <td><?php echo $row['dob']; ?></td>
                          <td><?php echo $row['blood_group']; ?></td>
                          <td><?php echo $row['religion']; ?></td>
                          <td><?php echo $row['class']; ?></td>
                          <td><?php echo $row['section']; ?></td>
                          <td><?php echo $row['biography']; ?></td>
                          <td><?php echo $row['destination']; ?></td>
                          <td><a href="students_details.php?edit=<?php echo $row['admission_id']; ?>" class="btn btn-info">Details</a></td>
                          <td><a href="admission_form_update.php?edit=<?php echo $row['admission_id']; ?>" class="btn btn-success">Update</a></td>
                          <td><a href="admission_form_delete.php?delete=<?php echo $row['admission_id']; ?>" class="btn btn-danger">Delete</a></td>
                          </tr>
                        <?php endwhile; ?>
                        </table>
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

