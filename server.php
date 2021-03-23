<?php 
  session_start();

  // variable declaration
  $username = "";
  $email    = "";
  $errors = array(); 
  $_SESSION['success'] = "";

  // connect to database
include('db.php');

  // REGISTER USER
  
// ... 

  // LOGIN USER
  if (isset($_POST['login_user'])) {
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
      $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
       $stmt->bind_param("ss", $username, $password);
         $stmt->execute();
         $row = $stmt->get_result();
         if (mysqli_num_rows($row) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Welcome, " . $_SESSION['username'];
            header('location: ../account/index.php');
         }else {
            array_push($errors, "Wrong username/password combination");
         }
      }
   }

?>