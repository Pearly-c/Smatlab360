<!DOCTYPE html>
<html>

<?php include('header.php'); ?>
	<!--/banner_info-->
	<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
				<li><a href="index.php">Home</a><span>|</span></li>
				<li>Signin</li>
			</ul>
		</div>
	</div>
	<!--//banner_info-->
	<!-- /inner_content -->
	<div class="banner_bottom">
		<div class="container">
			<div class="tittle-w3ls_head">
				<h3 class="tittle-w3ls three">SignIn to <span>your Account </span></h3>
			</div>
			<div class="inner_sec_info_wthree_agile">
				<div class="signin-form">
					<div class="login-form-rec">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
							<input type="email" name="email" placeholder="E-mail" required="">
							<input type="password" name="pwd" placeholder="Password" required="">
							<div class="tp">
								<input type="submit" value="Signin">
							</div>
							<?php
								//session_start();
								if($_SERVER["REQUEST_METHOD"] == "POST"){
									$email = $_POST["email"];
									$pwd = $_POST["pwd"];
									$servername = "localhost";
									$dbname = "smatlab";
									$password =  "";
									$username = "root";
									$conn = new mysqli($servername,$username, $password, $dbname);
									
									$sql = "SELECT * FROM users WHERE email = '$email' AND passwords = '$pwd'";
									if($conn->connect_error){
										die("CONNECTION FAILED"." ".$conn->connect_error);
									}
									$result = $conn->query($sql); 
									
									if($result->num_rows > 0){
										$_SESSION["email"] = $email;
									while($row = $result->fetch_assoc()){
		
									}
										header("Location: ");           
									}
									else{
										echo '<script>alert("Failed to sign in")</script>';
									}
									$conn->close();
								}
							?>
						</form>
					</div>
					<div class="login-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
					<p><a href="signup.php"> Don't have an account?</a></p>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
<?php include('footer.php'); ?>
	<!-- //footer -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>



</body>

</html>