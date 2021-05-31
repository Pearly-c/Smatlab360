<?php include('profileheader.php'); ?>
<?php

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
            <!--Profile End-->       
           <!---Referals-->
           <section class="bio">
                <div class="my-row" style="height: auto; overflow: hidden;">
                    <?php include('head.php'); ?>
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
  	const api = "pk_live_8af13f4a66c9eddcc46d507ce16302847bbde0e3";
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