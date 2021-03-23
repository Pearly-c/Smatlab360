

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
				<li>Portfolio</li>
			</ul>
		</div>
	</div>
	<!--//banner_info-->
	<!--/ab-->
	<div class="banner_bottom">
		<div class="container">
			<h3 class="tittle-w3ls">Projects</h3>
			<div class="inner_sec_info_wthree_agile">
				<!--/projects-->
				<ul class="portfolio-categ filter">
					<li class="port-filter all active">
						<a href="#">All</a>
					</li>
					<li class="cat-item-1">
						<a href="#" title="Category 1">Category 1</a>
					</li>
					<li class="cat-item-2">
						<a href="#" title="Category 2">Category 2</a>
					</li>
					<li class="cat-item-3">
						<a href="#" title="Category 3">Category 3</a>
					</li>
					<li class="cat-item-4">
						<a href="#" title="Category 4">Category 4</a>
					</li>
				</ul>


				<ul class="portfolio-area">

					<li class="portfolio-item2" data-id="id-0" data-type="cat-item-4">
						<div>
							<span class="image-block block2 img-hover">
							<a class="image-zoom" href="images/g1.jpg" rel="prettyPhoto[gallery]">
							
									<img src="images/g1.jpg" class="img-responsive" alt="Conceit">
									<div class="port-info">
											<h5>View Project</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-1" data-type="cat-item-2">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="images/g2.jpg" rel="prettyPhoto[gallery]">
								
									<img src="images/g2.jpg" class="img-responsive" alt="Conceit">
								      <div class="port-info">
											<h5>View Project</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="images/g3.jpg" rel="prettyPhoto[gallery]">
							
									<img src="images/g3.jpg" class="img-responsive" alt="Conceit">
								<div class="port-info">
											<h5>View Project</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-3" data-type="cat-item-4">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="images/g4.jpg" rel="prettyPhoto[gallery]">
								
									<img src="images/g4.jpg" class="img-responsive" alt="Conceit">
									<div class="port-info">
											<h5>View Project</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="images/g5.jpg" rel="prettyPhoto[gallery]">
								
									<img src="images/g5.jpg" class="img-responsive" alt="Conceit">
									<div class="port-info">
											<h5>View Project</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-5" data-type="cat-item-2">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="images/g6.jpg" rel="prettyPhoto[gallery]">
								
									<img src="images/g6.jpg" class="img-responsive" alt="Conceit">
									<div class="port-info">
											<h5>View Project</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-6" data-type="cat-item-1">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="images/g7.jpg" rel="prettyPhoto[gallery]">
							
									<img src="images/g7.jpg" class="img-responsive" alt="Conceit">
								      <div class="port-info">
											<h5>View Project</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="images/g8.jpg" rel="prettyPhoto[gallery]">
								
									<img src="images/g8.jpg" class="img-responsive" alt="Conceit">
										<div class="port-info">
											<h5>View Project</h5>
											<p>Add Some Description</p>
										</div>
							
							</a>
						</span>
						</div>
					</li>
					<li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="images/g1.jpg" rel="prettyPhoto[gallery]">
								
									<img src="images/g1.jpg" class="img-responsive" alt="Conceit">
										<div class="port-info">
											<h5>View Project</h5>
											<p>Add Some Description</p>
										</div>
							
							</a>
						</span>
						</div>
					</li>


					<div class="clearfix"></div>
				</ul>
				<!--end portfolio-area -->

			</div>

		</div>
		<!--//projects-->

	</div>
	<!--//bottom-->

	<!-- footer -->
<?php include('footer.php'); ?>
	<!-- //footer -->
	<!-- //footer -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>

	<!-- js -->
	<!-- Smooth-Scrolling-JavaScript -->
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll, .navbar li a, .footer li a").click(function (event) {
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //Smooth-Scrolling-JavaScript -->
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
	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	<script src="js/jquery.quicksand.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->
</body>

</html>