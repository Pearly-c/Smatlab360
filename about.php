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
				<li>About</li>
			</ul>
		</div>
	</div>
	<!--//banner_info-->
	<!--/ab-->
	<div class="banner_bottom">
		<div class="container">
			<h3 class="tittle-w3ls">About Us</h3>
			<div class="inner_sec_info_wthree_agile">
				<div class="help_full">

					<div class="col-md-6 banner_bottom_grid help">
						<img src="images/abs.png" alt=" " class="img-responsive">
					</div>
					<div class="col-md-6 banner_bottom_left">
						<h4></h4>
						<p>Smatlab360 is a human capacity and entrepreneurship development programme with aim of improving the skills and knowledge of entrepreneurs through our various training and innovative products and services and also be able to make a lot of money during the process of learning.

</p>
						<p>Becoming a professional and successful Entrepreneur is a journey of great commitment, we are here to simplify and reduce the learning curve for you.
Our approach is quite unconventional, exciting and guarantees ultimate success. The most interesting thing here is that you LEARN and EARN BIG simultaneously. The longer you stay with us, the more inspired you are to become more.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

		</div>
	</div>
	<!--//ab-->
	<!--/what-->
	<div class="works" id="works">
		<div class="container">
			<h3 class="tittle-w3ls cen">Our Affiliate Plan</h3>
			<div class="inner_sec_info_wthree_agile">
				<div class="ser-first">
					<div class="col-md-3 ser-first-grid text-center">
						<a href="signup.php"><span class="fa fa-shield" aria-hidden="true"></span></a>
						<a href="signup.php"><h3>Register</h3></a>
						<p>Register with one time payment of $20 (#6,000)</p>
					</div>
					<div class="col-md-3 ser-first-grid text-center">
						<span class="fa fa-pencil" aria-hidden="true"></span>
						<a href="signin.php"><h3>Refer</h3></a>
						<p>Refer someone to join the company with your referrer link</p>
					</div>
					<div class="col-md-3 ser-first-grid text-center">
						<span class="fa fa-star" aria-hidden="true"></span>
						<a href="signin.php"><h3>Earn</h3></a>
						<p>earn $10 (#3,000) on anyone that join the company through your referrer link</p>
					</div>
					<div class="col-md-3 ser-first-grid text-center">
						<span class="fa fa-thumbs-up" aria-hidden="true"></span>
						<a href="signin.php"><h3>Withdraw</h3></a>
						<p>Withdraw minimum of $20 into your bank account within 24 hours</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

		</div>
	</div>
	<!--//what-->
		
		<!-- //team -->
	
	<!--/bottom-->

	<!--//bottom-->
	<!--/testimonials-->
		<?php include('testimonial.php'); ?>
	<!--//testimonials-->
	<!-- /newsletter-->
	<div class="newsletter_w3ls_agileits">
		<div class="col-sm-6 newsleft">
			<h3>Sign up for Newsletter !</h3>
		</div>
		<div class="col-sm-6 newsright">
			<form action="#" method="post">
				<input type="email" placeholder="Enter your email..." name="email" required="">
				<input type="submit" value="Submit">
			</form>
		</div>

		<div class="clearfix"></div>
	</div>
	<!-- //newsletter-->

	<!-- footer -->
	<?php include('footer.php'); ?>
	<!-- //footer -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
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