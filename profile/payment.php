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
<html>
<head>
	<title>Payment</title>
</head>
<body>
	<div class="container">
		<h2>Hello <?php echo $fname; ?>, you want to make a deposit of</h2>
		<h3><?php echo $amt; ?></h3>
		<form >
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <button type="button" onclick="payWithPaystack()"> Confirm </button> 
  <button type="button" href="deposit.php"> Decline </button> 
</form>
 
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

</body>
</html>