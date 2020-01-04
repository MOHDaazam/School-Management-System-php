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
    <link rel="stylesheet" href="css/style.css">
    <!-- Favicon-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->

  </head>
  <body>
    <?php 
     $admission_id = $_GET["edit"];
     $mysqli = new mysqli('localhost', 'root', '', 'sms') or die(mysqli_error($mysqli));
     $result = $mysqli->query("SELECT * FROM admission_form where admission_id = $admission_id") or die($mysqli->error);
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
                      <h2 class="w3-animate-fading w3-text-white">Students Details</h2>
                      </div>
                    </div>
                    <div class="card-body">
                       <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h3 class="title">About Me</h3>
                    </div>
                    <div class="price-value">
                        <span class="amount">$10</span>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="pricingTable green">
                    <div class="pricingTable-header">
                        <h3 class="title">Wan</h3>
                    </div>
                    <div class="price-value">
                        <span class="amount">$20</span>
                    </div>
                    <span class="time">Per Month</span>
                    <ul class="pricing-content">
                     <?php 
                          while($row = $result->fetch_assoc()):
                      ?>
                        <li class="w3-text-blue w3-xlarge">First Name : <?php echo $row['fname']; ?></li>
                        <li>Last Name : <?php echo $row['lname']; ?></li>
                        <li>Roll : <?php echo $row['roll']; ?></li>
                        <li>Email : <?php echo $row['email']; ?></li>
                        <li>Phone : <?php echo $row['phone']; ?></li>
                        <li>Gender : <?php echo $row['gender']; ?></li>
                        <li>Date of Birth : <?php echo $row['dob']; ?></li>
                        <li>Blood Group : <?php echo $row['blood_group']; ?></li>
                        <li>Religion : <?php echo $row['religion']; ?></li>
                        <li>Class : <?php echo $row['class']; ?></li>
                        <li>Section : <?php echo $row['section']; ?></li>
                        <li>Biography : <?php echo $row['biography']; ?></li>
                        <?php endwhile; ?> 
                    </ul>
                   
                </div>
            </div>
        </div>
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

