<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Action</title>

</head>

<body>
	<?php


    
 
$firstnameErr = $lastnameErr = $genderErr = $dobErr = $religionErr = $presentAddressErr = $emailErr = $personalWebsiteLinkErr = $userNameErr = $passErr = $confirmPassErr = $matchErr = "";


$firfstname = $lastname = $gender = $dob = $religion = $presentAddress = $permanentAddress = $phone = $email = $personalWebsiteLink = $userName = $pass = $confirmPass = $id = "";

$isChecked = false;
$isValid = true;
$flag = false;

if ($_SERVER['REQUEST_METHOD'] === "POST")
 {
	function test($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);

		return $data;
	}
	

	$firstname = test($_POST['firstame']);
	$lastname = test($_POST['lastname']);

	if (isset($_POST['gender'])) {
		$gender = test($_POST['gender']);
	}
	else {
		$gender = NULL;
	}

	$dob = test($_POST['dob']);
	
	$phone = test($_POST['phone']);
	$email = test($_POST['email']);
	$userName = test($_POST['username']);
	$pass = test($_POST['pass']);
	$confirmPass = test($_POST['confirmPass']);

	$today = date("Y-m-d");
	$diff = date_diff(date_create($dob), date_create($today));
	$diff = (int)$diff->format('%y');

	$isChecked = true;

	if (empty($firstname)) {
		$isValid = false;
		echo "<b>Error: Please enter your first name</b>";
		echo "<br><br>";
	}
	if (empty($lastname)) {
		$isValid = false;
		echo "<b>Error: Please enter your last name</b>";
		echo "<br><br>";
	}
	if (empty($gender)) {
		$isValid = false;
		echo "<b>Error: Please select a gender</b>";
		echo "<br><br>";
	}
	if (empty($dob)) {
		$isValid = false;
		echo "<b>Error: Please insert your birth date</b>";
		echo "<br><br>";
	}
	else if ($diff < 18) {
		$isValid = false;
		echo "<b>Error: You are not old enough</b>";
		echo "<br><br>";
	}
	if (!empty($phone) and !preg_match('/^[0][1][0-9]{3}-[0-9]{6}/i', $phone)) {
		$isValid = false;
		echo "<b>Error: Invalid phone number</b>";
		;
		echo "<br><br>";
	}
	if (empty($email)) {
		$isValid = false;
		echo "<b>Error: Please enter your email address</b>";
		echo "<br><br>";
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$isValid = false;
		echo "<b>Error: Please check your email again</b>";
		echo "<br><br>";
	}
	if (empty($userName)) {
		$isValid = false;
		echo "<b>Error: Please enter your user name</b>";
		echo "<br><br>";
	}
	if (empty($pass)) {
		$isValid = false;
		echo "<b>Error: Please enter your password</b>";
		echo "<br><br>";
	}
	if (empty($confirmPass)) {
		$isValid = false;
		echo "<b>Error: Please enter your password for confirmation</b>";
		echo "<br><br>";
	}
	else if ($pass !== $confirmPass) {
		$isValid = false;
		echo "<b>Error: Password didn't match</b>";
		echo "<br><br>";
	}
	
	




	if ($sql)
	{
	 //echo "<h3>Data Insertion Successful</h3>";
		  header('Location:../view/login.php');
	}
	else{
		echo "<h3>sql kam kore nai nai</h3>";
	}
}
    




?>



	<a href="../view/registration.html" >Go back </a>
	
</body>
</html>