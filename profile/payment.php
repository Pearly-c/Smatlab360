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
<?php
//sanitize form inputs
$sanitizer = filter_var_array($_POST, FILTER_SANITIZE_STRING);

//Collect user's data
$amt = $sanitizer['amount'];

//Make sure fields are not empty
if(empty($amt)) {
	header("Location: deposit.php");
}else{
include('../db.php');
$user = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username='$user'";
$run_query = mysqli_query($conn, $query);
while($res = mysqli_fetch_assoc($run_query)) {



$fname = $res['firstname'];
$lname = $res['lastname'];
$email = $res['email'];
}
}

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <title>Payment</title>

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
                                <a href="../profile/profile.php">Profile</a>
                                <a href="#">Entrepreneur</a>
                                <a href="deposit.php">Deposit</a>
                                <a href="withdraw.php">withdrawal</a>
                                <a href="#">Support</a>
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
                <div class="my-row" style="height: auto; overflow: hidden;">
                    <div class="menu">
                        <span><a href="../index.php" style="color: white">Home</a></span><br><br>
                        <span><a href="../profile/profile.php" style="color: white">Profile</a></span><br><br>
                        <span><a href="#" style="color: white">Entrepreneur</a></span><br><br>
                        <span><a href="deposit.php" style="color: white">Deposit</a></span><br><br>
                        <span><a href="withdraw.php" style="color: white">withdrawal</a></span><br><br>
                        <span><a href="#" style="color: white">Support</a></span><br><br>
                        <span><a href="logout.php" style="color: white">logout</a></span>
                    </div>
                    <div class="referals">
                        <div><h3>Deposit</h3></div><br><br>
                     
                        <div>
                            <div class="main-bd" style="display: block;">
                                <div class="row">
                                    <div class="col-md-12">
                                       <div style="text-align: center;">
                                          <h4 class="confirm-text">Hello <?php echo $fname; ?>, you want to make a deposit of</h4>
                                          <h4><?php echo $amt; ?></h4><br>
                                          <form >
                                             <script src="https://js.paystack.co/v1/inline.js"></script>
                                             <button type="button" class="btn btn-success confirm-button" onclick="payWithPaystack()"> Confirm </button>
                                             <button type="button"  class="btn btn-danger" href="deposit.php"> Decline </button> 
                                          </form>
                                       </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </section>
            <!---Referals End-->
</main>
 
<script>
  function payWithPaystack(){
  	const api = "pk_test_14d74c5a63be284be24299124f8cf2798e2dad70";
    var handler = PaystackPop.setup({
      key: api,
      email: '<?php echo $email; ?>',
      amount: <?php echo $amt*100; ?>,
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      firstname: "<?php echo $fname; ?>",
      lastname: "<?php echo $lname; ?>",
      metadata: {
         custom_fields: [
            {
                display_name: "<?php echo $fname; ?>",
                variable_name: "<?php echo $lname; ?>",
                value: "+2348012345678"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>
	</div>
  <!--- Script Source Files -->
  <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
        <script src="js/profile.js"></script>
        <!--- End of Script Source Files -->
</body>
</html>