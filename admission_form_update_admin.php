<?php 

$mysqli = new mysqli('localhost', 'root', '', 'sms') or die(mysqli_error($mysqli));
?>

<?php 
if(isset($_GET['edit'])){
$admission_id = $_GET['edit'];
$update = false;
$result = $mysqli->query("select * from  admission_form where admission_id = '$admission_id'") or die($mysqli->error());
$row = $result->fetch_array();

$fname = $row['fname'];
$lname = $row['lname'];
$roll = $row['roll'];
$email = $row['email'];
$phone = $row['phone'];
$gender = $row['gender'];
$dob = $row['dob'];
$blood_group = $row['blood_group'];
$religion = $row['religion'];
$class = $row['class'];
$section = $row['section'];
$biography = $row['biography'];
$photo = $row['photo'];

}

if(isset($_POST['admission_update'])){
    
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$roll = $_POST['roll'];
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
	$admission_id = $_POST['admission_id'];


	mysqli_query($mysqli, "UPDATE  admission_form set fname = '$fname', lname = '$lname', roll = '$roll', email = '$email', phone = '$phone', gender = '$gender', dob = '$dob', blood_group = '$blood_group', religion = '$religion', class = '$class', section = '$section', biography = '$biography', photo = '$photo' where admission_id = '$admission_id'");
	

	$_SESSION['message'] = "Admission Form Updated Successfully!!";
	$_SESSION['msg_type'] = "success";

	header("location: admission_form.php");
}


?>