<?php
  session_start();

  // variable declaration
  $username = "";
  $email    = "";
  $errors = array(); 
  $_SESSION['success'] = "";
include('db.php');

      if (isset($_POST['submit'])) {
     $firstname = mysqli_real_escape_string($conn, $_POST['fname']);
      $lastname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
      $phone = mysqli_real_escape_string($conn, $_POST['phone']);
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $ref_by = mysqli_real_escape_string($conn, $_POST["referal"]);
      $password_1 = mysqli_real_escape_string($conn, $_POST['password1']);
      $image = $_FILES['image']['name'];
      $password_2 = mysqli_real_escape_string($conn, $_POST['password2']);
      $refcode = rand(100000,999999);//referal code generator
      $balance = "";
      $level = "One";   
      


      // form validation: ensure that the form is correctly filled
      if (empty($firstname)) { array_push($errors, "Names are required"); }
      if (empty($lastname)) { array_push($errors, "Last name is required"); }
      if (empty($email)) { array_push($errors, "Email is required"); }
      if (empty($phone)) { array_push($errors, "Phone Number is required"); }
      if (empty($username)) { array_push($errors, "Username is required"); }
      if (empty($password_1)) { array_push($errors, "State Number is required"); }
      if (empty($password_2)) { array_push($errors, "Job Code is required"); }
      if (empty($image)) { array_push($errors, "File is required"); }

       if ($password_1 != $password_2) {
         array_push($errors, "The two passwords do not match");
      }
         // image file directory
      $target = "profile/images/".basename($image);
      // register user if there are no errors in the form
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
         if (count($errors) == 0) {
         $password = md5($password_1);//encrypt the password before saving in the database
         $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, username, passwords, level, affcode, refBy, balance, picimage) 
                 VALUES(?,?,?,?,?,?,?,?,?,?)");
         $stmt->bind_param("ssssssssss", $firstname, $lastname, $email, $username, $password, $level, $refcode, $ref_by, $balance, $image);
         $stmt->execute();
         $_SESSION['username'] = $username;
         header('location:success.php');

   }else{
      header('location: signup.php');
      }

}
}


// LOGIN USER
  if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($username)) {
      array_push($errors, "Username is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
      $password = md5($password);
      $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND passwords=?");
       $stmt->bind_param("ss", $username, $password);
         $stmt->execute();
         $row = $stmt->get_result();
         if (mysqli_num_rows($row) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Welcome, " . $_SESSION['username'];
            header('location: profile/profile.php');
         }else {
            array_push($errors, "Wrong username/password combination");
         }
      }
   }

?>