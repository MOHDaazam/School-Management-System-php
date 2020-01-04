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
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->


  </head>
  <body>
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
                      <h2 class="w3-animate-fading w3-text-white">Add New Students</h2>
                      </div>
                    </div>
                    <div class="card-body">
                      <form action="admission_form_admin.php" method="POST">
                        <div class="row">
                          <div class="col-lg-6 w3-panl w3-leftbar w3-border-blue">
                            <div class="form-group has-success">
                          <label for="fname" class="w3-text-orange w3-large">Title<span class="w3-badge w3-blue">*</span></label>
                          <input type="text" name="fname" id="fname" class="form-control is-valid" placeholder="First Name" required="">
                         </div>
                        </div>
                        <div class="col-lg-6 w3-leftbar w3-border-blue">
                        <div class="form-group has-success">       
                          <label class="w3-text-orange w3-large" for="lname">Details<span class="w3-badge w3-blue">*</span></label>
                          <input type="text" name="lname" id="lname" class="form-control is-valid" placeholder="Last Name" required="">
                        </div>
                      </div>
                      </div>
                       <div class="row">
                          <div class="col-lg-6 w3-panl w3-leftbar w3-border-blue">
                            <div class="form-group has-success">
                          <label for="fname" class="w3-text-orange w3-large">Posted By<span class="w3-badge w3-blue">*</span></label>
                          <input type="text" name="fname" id="fname" class="form-control is-valid" placeholder="First Name" required="">
                         </div>
                        </div>
                        <div class="col-lg-6 w3-leftbar w3-border-blue">
                        <div class="form-group has-success">       
                          <label class="w3-text-orange w3-large" for="lname">Date<span class="w3-badge w3-blue">*</span></label>
                          <input type="text" name="lname" id="lname" class="form-control is-valid" placeholder="Last Name" required="">
                        </div>
                      </div>
                      </div>
                        <div class="form-group">       
                          <input type="submit" value="Add New" class="btn btn-primary w3-xlarge w3-ripple">
                          <input type="submit" value="Reset" class="btn btn-success btn-lg">
                        </div>
                      
                      </form>
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