<?php

    $mysqli = new mysqli('localhost', 'root', '', 'sms') or die(mysqli_error($mysqli));
  
     if(isset($_POST['admission_form'])){
     	$fname = $_POST['fname'];
     	$lname = $_POST['lname'];
     	$roll = $_POST['roll'];
     	$admission_id = $_POST['admission_id'];
     	$email = $_POST['email'];
     	$phone = $_POST['phone'];
     	$gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $blood_group = $_POST['blood_group'];
        $religion = $_POST['religion'];
        $class = $_POST['class'];
        $section = $_POST['section'];
        $biography = $_POST['biography'];
        $photo = $_POST['photo'];

        // Get image name
        $destination = "images/".$_FILES['photo']['name'];
        $filename = $_FILES['photo']['tmp_name'];
        move_uploaded_file($filename, $destination);

        $mysqli->query("insert into admission_form(fname, lname, roll, admission_id, email, phone, gender, dob, blood_group, religion, class, section, biography, photo) values('$fname', '$lname', '$roll', '$admission_id', '$email', '$phone', '$gender', '$dob', '$blood_group', '$religion', '$class', '$section', '$biography', '$destination')");

        	$_SESSION['message'] = "Admission Form Data Inserted Successfully!!";
			$_SESSION['msg_type'] = "success";

			header("location:admission_form.php");

     }

  ?>