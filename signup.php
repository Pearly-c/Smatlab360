<!DOCTYPE html>
<html>

<?php include('header.php'); ?>
	<!--/banner_info-->
	<div class="banner_inner_con">
		<h2>About Us</h2>
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
				<li><a href="index.php">Home</a><span>|</span></li>
				<li>Sign up</li>
			</ul>
		</div>
	</div>
	<!--//banner_info-->
	<!-- /inner_content -->
<div class="banner_bottom">
		<div class="container">
				<div class="tittle-w3ls_head">
				<h3 class="tittle-w3ls three">Sign Up <span>Now </span></h3>
			</div>
			<div class="inner_sec_info_wthree_agile">
				<div class="signin-form">
					<div class="login-form-rec">
						<form action="server.php" method="POST" enctype="multipart/form-data">
							<input type="text" name="fname" placeholder="First Name" required="">
							<input type="text" name="lname" placeholder="Last Name" required="">
							<input type="email" name="email" placeholder="Email" required="">
							<input type="text" name="username" placeholder="Username" required="">
							<input type="text" name="phone" placeholder="Phone Number" required="">
							
							<input type="text" name="referal" placeholder="Referal Code (Optional)" >
							<input type="password" name="password1" id="password1" placeholder="Password" required="">
							<input type="password" name="password2" id="password2" placeholder="Confirm Password" required="">
							<input type="submit" value="Sign Up" name="submit">
							
						</form>
					</div>
					<p class="reg"><a href="#"> By clicking Signup, I agree to your terms</a></p>

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
	<!-- password-script -->
	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
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

