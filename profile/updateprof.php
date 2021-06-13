<?php
session_start();

include('../db.php');


if(isset($_POST['update'])) {
$id = $_POST['id'];
$firstname = $_POST['first'];
$lastname = $_POST['lname'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$gender = $_POST['sex'];
//$image = $_FILES['image']['name'];
$username = $_SESSION['username'];

  	// image file directory
//$target = "images/".basename($image);

	//if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
	$update="UPDATE users SET id=?, firstname=?, lastname=?, phone=?, dob=? WHERE username=?";

	$stmt = $conn->prepare($update);
	$stmt->bind_param("isssss", $id, $firstname, $lastname, $phone, $dob, $username);
	$stmt->execute();
	if($stmt->execute()) {
		header("Location: successup.php" );
	}else{
	header("location: profile.php");
}

}





//Bank Details Update

include('../db.php');


if(isset($_POST['submit'])) {
$bname = $_POST['bank'];
$accname = $_POST['accname'];
$account = $_POST['accnumb'];
$scode = $_POST['sort'];
$username = $_SESSION['username'];



	$update="UPDATE users SET bank=?, accname=?, accnum=?, sort=? WHERE username=?";

	$stmt = $conn->prepare($update);
	$stmt->bind_param("sssss", $bname, $accname, $account, $scode, $username);
	$stmt->execute();
	if($stmt->execute()) {
		header("Location: profile.php" );
	}else{
	header("location: profile.php");
}

}


?>

