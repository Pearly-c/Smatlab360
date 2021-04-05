<?php 
   session_start(); 

include('errors.php'); 

$errors = array(); 


   if (!isset($_SESSION['username'])) {
      $_SESSION['msg'] = "You must log in first";
      $ref = $_SESSION['affcode'];
      header('location: ../signin.php');
   }

   if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['username']);
      header("location: ../signin.php");
   }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title></title>

        <!--icon -->
        <link rel="icon" href="" type="image/x-icon" />
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
        <!-- Google Fonts Roboto -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet"/>
        <!-- Your custom styles (optional) -->
        <link rel="stylesheet" href="css/profile.css">
    </head>
    <body>
        <main>
            <!--Profile-->
           <section>
<?php
include('../db.php');

$uploaduser = $_SESSION['username'];
$stmt =$conn->prepare("SELECT * FROM users WHERE username=?");
$stmt->bind_param("s", $uploaduser);
$stmt->execute();
$row = $stmt->get_result();
while ($result= $row->fetch_assoc()) {
    echo "<div class='x-container'>
                    <div class='profile-header'>
                        <div class='profile-img'>
                            <img src='images/".$result['picimage']."' alt='Image' />
                        </div>
                        <div class='profile-nav-info'>
                            <h3 class='user-name'>  $result[firstname] $result[lastname]</h3>
                            <div class='address'>
                                <p class='state' style='color: #212237;'>
                                    Level: 
                                </p>
                                <span class='country' style='color: #2ecc71;'>
                                    $result[level]
                                </span>
                            </div>
                        </div>

                        <div class='account'>
                            <h3>Balance</h3>
                            <span>$result[balance]</span>
                        </div>";
                    }

                ?>
                        
                        <div id="hamburger" onclick="openNav()">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div id="myNav" class="overlay">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <div class="overlay-content">
                                <a href="../index.php" onclick="closeNav()">Home</a>
                                <a href="contact.html">Entrepreneur</a>
                                <a href="faq.html">Deposit</a>
                                <a href="faq.html">withdrawal</a>
                                <a href="faq.html">Support</a>
                                <a href="logout.php">logout</a>
                            </div>
                        </div>
                    </div>
                </div>
           </section>  
           <section class="hide-account">
                <div>
                    <h3>Balance</h3>
                    <span>40,000</span>
                </div>
           </section>
            <!--Profile End-->       
           <!---Referals-->
           <section class="bio">
                <div class="my-row">
                    <div class="menu">
                        <span>Home</span><br><br>
                        <span>Entrepreneur</span><br><br>
                        <span>Deposit</span><br><br>
                        <span>withdrawal</span><br><br>
                        <span>Support</span><br>
                        <a href="logout.php">logout</a>
                    </div>
                    <div class="referals">
                        <div><h3>Referrals</h3></div><br>
                     
                        <div>
                            <div class="main-bd">
                                <div class="row">
                             
<div class="col-md-12">
<form>
    <p>Amount: <input type="number" name=""></p>
    <p><input type="Submit" name="submit"></p>
</form>
</div>
</div>
</div>
</div>
</div> 
</div>
</section>
<!---Referals End-->
</main>
<!--- Script Source Files -->
        <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
        <script src="js/profile.js"></script>
        <!--- End of Script Source Files -->
    </body>
</html>