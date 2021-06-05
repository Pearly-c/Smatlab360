<?php
include('../db.php');


if(isset($_POST['submit'])) {
$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$balance = $_POST['amount'];
$image = $_FILES['image']['name'];

  	// image file directory
$target = "/images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
	$update="UPDATE users SET names=?, username=?, phone=?, balance=?, picimage=? WHERE id=?";

	$stmt = $conn->prepare($update);
	$stmt->bind_param("sssssssi", $name, $username, $email, $phone, $balance, $password, $image, $id);
	$stmt->execute();
	if($stmt->execute()) {
		header("Location: admprofile.php?id=$id" );
	}else{
	header("location: edit-account.php?id=$id");
}

}

}


?>

