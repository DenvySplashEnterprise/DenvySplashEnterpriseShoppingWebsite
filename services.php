<?php
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/view.php');
include_once('phplib/controler.php');
if(!isset($_GET['name']))
{
	echo "<script>window.open('services.php?name=".base64_encode('Our Services')."','_self');</script>";
}
?>

<!-- services -->
		<div class="services">
			<h3>Services</h3>
			<div class="w3ls_service_grids">
				<div class="col-md-5 w3ls_service_grid_left">
					<h4>A Solution for Every Need</h4>
					<p>At DENVY SPLASH ENTERPRISE, 
					we recognize that a Business Management Platform in prodcut delivery needs to be as flexible as its customers are unique.
					And that's a challenge we readily embrace. So whether your needs are for that big day in couples’ lives, 
					or a special reason or one of those tempting moments to pamper yourself there is always something for everyone, for all occasions!. 
					DENVY SPLASH ENTERPRISE has the expertise to get you on your way.</p>
				</div>
				<div class="col-md-7 w3ls_service_grid_right">
					<div class="col-md-4 w3ls_service_grid_right_1">
						<img src="images/18.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="col-md-4 w3ls_service_grid_right_1">
						<img src="images/19.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="col-md-4 w3ls_service_grid_right_1">
						<img src="images/20.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3ls_service_grids1">
				<div class="col-md-6 w3ls_service_grids1_left">
					<img src="images/4.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-6 w3ls_service_grids1_right">
					<ul>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>quality unique fashion clothing and accessories for Ladies and Men</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>IT related services (website development and management etc...)</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>general products advertisement for Our Customers</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>laptop and Phone accessories and repairs</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>DELIVERY SERVICES</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>MUSIC PRODUCTION</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>mobile money services, credit card sales, transfers and general registrations</li>
					</ul>
					<!--a href="single.php">Shop Now</a-->
					<a href="allproduct.php">Shop Now</a>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //services -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- services-bottom -->
	<div class="services-bottom">
		<div class="container">
			<div class="col-md-3 about_counter_left">
				<i class="glyphicon glyphicon-user" aria-hidden="true" style="background-color:#232f3e"></i>
				<p class="counter">147</p> 
				<h3>Followers</h3>
			</div>
			<div class="col-md-3 about_counter_left">
				<i class="glyphicon glyphicon-piggy-bank" aria-hidden="true" style="background-color:#232f3e"></i>
				<p class="counter">50</p> 
				<h3>Savings</h3>
			</div>
			<div class="col-md-3 about_counter_left">
				<i class="glyphicon glyphicon-export" aria-hidden="true" style="background-color:#232f3e"></i>
				<p class="counter">1</p> 
				<h3>Support</h3>
			</div>
			<div class="col-md-3 about_counter_left">
				<i class="glyphicon glyphicon-bullhorn" aria-hidden="true" style="background-color:#232f3e"></i>
				<p class="counter">894</p> 
				<h3>Popularity</h3>
			</div>
			<div class="clearfix"> </div>
			<!-- Stats-Number-Scroller-Animation-JavaScript -->
				<script src="js/waypoints.min.js"></script> 
				<script src="js/counterup.min.js"></script> 
				<script>
					jQuery(document).ready(function( $ ) {
						$('.counter').counterUp({
							delay: 10,
							time: 1000
						});
					});
				</script>
			<!-- //Stats-Number-Scroller-Animation-JavaScript -->

		</div>
	</div>
<!-- //services-bottom -->
<?php
include_once('include/footer.php');
?>