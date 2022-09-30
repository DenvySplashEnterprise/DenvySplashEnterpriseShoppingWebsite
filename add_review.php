<?php

session_start();
include_once('phplib/controler.php');
if(!isset($_SESSION['UserEmail']) && !isset($_SESSION['UserFullName']))
{
	header("location:logout.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>DEnVy Splash Enterprise | Add Review</title>
<link rel="icon" href="./img/favicon.png" type="image/x-icon" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<script src="js/jquery-1.11.1.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- js -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-- //js -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<style type="text/css">
	body {
		background-image: url(images/bg2.png);
		background-size: 100%;
		background-repeat: no-repeat;
		background-color: #000000;
	}
	.inner {
		background-color: #fff;
		-webkit-box-shadow: 0px 0px 31px 1px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 31px 1px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 31px 1px rgba(0,0,0,0.75);
	}
	.wthree_banner_bottom_left_grid:hover
			{
    -webkit-animation: flash 1s;
    animation: flash 1s;
			}
	.wthree_banner_bottom_left {
		padding: 10px;

	}
	
</style>
<link rel="stylesheet" href="css/star-rating.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="css/themes/krajee-fa/theme.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="css/themes/krajee-svg/theme.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="css/themes/krajee-uni/theme.css" media="all" type="text/css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/star-rating.js" type="text/javascript"></script>
    <script src="js/themes/krajee-fa/theme.js" type="text/javascript"></script>
    <script src="js/themes/krajee-svg/theme.js" type="text/javascript"></script>
    <script src="js/themes/krajee-uni/theme.js" type="text/javascript"></script>
</head>
	<style type="text/css">
		.rating-container .caption {
		display: none;
	}
	.rating-container .clear-rating {
    padding-right: 5px;
    display: none;
	</style>
<body>
<!-- Dickson's first header starts -->
	<!-- Dickson's first header starts -->
	<!-- Dickson's first header starts -->
<div width="100%" style="background:#000000">
	<div class="container inner" style="background:#fff; margin:0 auto;">
		<img src="advertimages/calltoorder.gif" alt="DENVY SPLASH ENTERPRISE TOP BANNER" height="100%" width="100%">
	</div>
</div>
	<!-- Dickson's first header ends -->
	<!-- Dickson's first header ends -->
	<!-- Dickson's first header ends -->
<div class="container inner">
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="offer.php">Special Offers !</a>
		</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account <span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<?php
									if(isset($_SESSION['UserEmail']) && isset($_SESSION['UserFullName']))
									{
										echo "
											<li><a href='order.php?name=WW91ciBPcmRlciBIaXN0b3J5'>Order History</a></li>
											<li><a href='myaccount.php?name=TXkgQWNjb3VudA=='>Account</a></li>
											<li><a href='order.php?name=WW91ciBPcmRlciBIaXN0b3J5'>Track Order</a></li>
											<li><a href='logout.php'>Log Out</a></li>
										";
									}
									else
									{
										echo "
											<li><a href='login.php?name=".base64_encode('User Login')."'>Login</a></li>
								<li><a href='register.php?name=".base64_encode('Create New Account')."'>Sign Up</a></li>
										";
									}
								?>
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="product_list_header">  
			<form action="cart.php?name=Q2FydA==" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="View cart" class="button" />
                </fieldset>
            </form>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="contact.php">Contact</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- here starts scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
	<div class="logo_products" style="background-color: #000; background-image: url('img/bg.png'); padding-top: 0px; padding-bottom: 0px;">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<a href="index.php"><img src="img/logo.png" class="logo2"></a>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items" style="color:#fff;">
					<li><a href="index.php" style="color:#fff;">Home</a><i>/</i></li>
					<li><a href="about.php" style="color:#fff;">About Us</a><i>/</i></li>
					<li><a href="products.php" style="color:#fff;">Products</a></li>
					<!--li><a href="services.php" style="color:#fff;">Services</a></li-->
				</ul>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email" >
					<li style="color:#fff;"><i class="fa fa-phone" style="color:#fff;" aria-hidden="true"></i>(+233) 546969778</li>
					<li style="color:#fff;"><i class="fa fa-envelope-o" style="color:#fff;" aria-hidden="true"></i><a href="mailto:workandmanymore@gmail.com" style="color:#fff;">workandmanymore@gmail.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home </a></li>
				<li> <span>|</span> Add Review</li>
				<li style="color:#fff; font-weight:bolder; float:center;"><span>|</span><a href="services.php" style="color:#fff; font-weight:bolder">Our Services</a><span>|</span></li>
			</ul>
		</div>
	</div>
<div style="margin-top: 50px;">&nbsp;</div>

<div class="col-sm-8 col-sm-offset-2">
<?php 
if(isset($_POST['btnSubmit']))
createreview($_POST['txtProductId'],$_POST['txtTitle'],$_POST['txtComment'],$_POST['txtRate']);
 ?>
<form action="add_review.php?productid=<?php echo $_GET['productid']; ?>" method="post"> 
	<div class="row">
		<div class="form-group col-sm-12">
  			<label for="usr">Title:</label>
  			<input type="text" class="form-control" name="txtTitle" required id="usr">
		</div>
		<div class="form-group col-sm-12">
  			<label for="usr">Rating:</label>
  			<input type="text" id="rate" class="kv-uni-star rating-loading" name="txtRate"   value="3" data-size="xs" title="" >
		</div>
		<div class="form-group col-sm-12">
  			<label for="usr">Comment:</label>
  			<textarea class="form-control" required name="txtComment"></textarea>
		</div>
		<input type="hidden" name="txtProductId" value="<?php echo base64_decode($_GET['productid']); ?>">
		<div class="form-group col-sm-12">
  			<button class="btn btn-success" name="btnSubmit"> Comment Now</button>
		</div>
	</div>
</form>	
</div>

<div style="margin-bottom: 300px;">&nbsp;</div>
<div style="margin-bottom: 100px;">&nbsp;</div>


<?php
include_once('include/footer.php');
?>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
 $(document).on('ready', function () {
        $('.kv-gly-star').rating({
            containerClass: 'is-star'
        });
        $('.kv-gly-heart').rating({
            containerClass: 'is-heart',
            defaultCaption: '{rating} hearts',
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            },
            filledStar: '<i class="glyphicon glyphicon-heart"></i>',
            emptyStar: '<i class="glyphicon glyphicon-heart-empty"></i>'
        });
        $('.kv-fa').rating({
            theme: 'krajee-fa',
            filledStar: '<i class="fa fa-star"></i>',
            emptyStar: '<i class="fa fa-star-o"></i>'
        });
        $('.kv-fa-heart').rating({
            defaultCaption: '{rating} hearts',
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            },
            theme: 'krajee-fa',
            filledStar: '<i class="fa fa-heart"></i>',
            emptyStar: '<i class="fa fa-heart-o"></i>'
        });
        $('.kv-uni-star').rating({
            theme: 'krajee-uni',
            filledStar: '&#x2605;',
            emptyStar: '&#x2606;'
        });
        $('.kv-uni-rook').rating({
            theme: 'krajee-uni',
            defaultCaption: '{rating} rooks',
            starCaptions: function (rating) {
                return rating == 1 ? 'One rook' : rating + ' rooks';
            },
            filledStar: '&#9820;',
            emptyStar: '&#9814;'
        });
        $('.kv-svg').rating({
            theme: 'krajee-svg',
            filledStar: '<span class="krajee-icon krajee-icon-star"></span>',
            emptyStar: '<span class="krajee-icon krajee-icon-star"></span>'
        });
        $('.kv-svg-heart').rating({
            theme: 'krajee-svg',
            filledStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            emptyStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            defaultCaption: '{rating} hearts',
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            },
            containerClass: 'is-heart'
        });

        $('.rating,.kv-gly-star,.kv-gly-heart,.kv-uni-star,.kv-uni-rook,.kv-fa,.kv-fa-heart,.kv-svg,.kv-svg-heart').on(
                'change', function () {
                    console.log('Rating selected: ' + $(this).val());
                });
    });
</script>

