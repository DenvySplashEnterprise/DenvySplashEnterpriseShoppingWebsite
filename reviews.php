<?php
session_start();
include_once('phplib/view.php');
$product_details=getproductdetailsbyid(base64_decode($_GET['id']));
?>

<!DOCTYPE html>
<html>
<head>
<title>DEnVy Splash Enterprise | <?php echo base64_decode($_GET['name']); ?>.</title>
<link rel="icon" href="./img/favicon.png" type="image/x-icon" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
 <script src='js/okzoom.js'></script>
  <script>
    $(function(){
      $('#example').okzoom({
        width: 175,
        height: 175,
        border: "1px solid black",
        shadow: "0 0 5px #000"
      });
    });
  </script>
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<link href="single/css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<!--flex slider-->
<script defer src="single/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="single/css/flexslider.css" type="text/css" media="screen" />
<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
</script>
<!--flex slider-->
<script src="single/js/imagezoom.js"></script>
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 

<script type="text/javascript" src="single/js/move-top.js"></script>
<script type="text/javascript" src="single/js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
	$(document).ready(function() {
	
		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
		};
		
		$().UItoTop({ easingType: 'easeOutQuart' });
		
	});
</script>
<!-- //smooth-scrolling-of-move-up --> 


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
	.singleppt {
		margin: 0px 60px;
	}
</style>
</head>

<?php
include_once('include/nav.php');
?>
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<?php
							viewcategories();
						?>
					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
			<div  class="w3l_banner_nav_right_banner3" 
			style="background:url(images/1.jpg) no-repeat 0px 0px;
						background-size:cover;
	                    background-size:cover;
	                    -moz-background-size:cover;
	                   -o-background-size:cover;
	                   -ms-background-size:cover;">
				
			</div>
			
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->

	<!-- products -->
	<div class="products singleppt">	 
		<div class="container ">  
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
								<?php viewproductimagebyid(base64_decode($_GET['id'])); ?>
							</ul>
						</div>
					</div>
					<div class="col-md-6 single-top-right">
						<h3 class="item_name"><?php echo $product_details['product_name']; ?></h3>
						<p>Processing Time: Item will be delivered out within 2-3 working days, depending on the type of product, quantity and price. Products such as edible goods are supposed to arrive earlier to avoid spoilage </p>
						<p><strong>Product Code</strong> :<?php echo $product_details['SKU']; ?></p>
						
						<div class="single-rating">
							<ul>
								<?php echo averagestars(base64_decode($_GET['id'])); ?>
								
								<li class="rating"><?php echo totalreviews(base64_decode($_GET['id'])); ?> reviews</li>
								<li><a href="reviews.php" name="reviews" id="reviews">View Reviews</a></li>
							</ul> 
						</div>
						<div class="single-price">
							<ul>
								<li>GH&#8373; <?php echo $product_details['selling']; ?>/- </li>  
								<li><del>GH&#8373; <?php echo $product_details['price']; ?>/-</del></li> 
								<li><span class="w3off"><?php  echo (round((($product_details['price'] - $product_details['selling']) * 100) / $product_details['price']));?>% OFF</span></li> 
								<li style="display:none;">Ends on: June,5th</li>
								<li><a href="#"><i class="fa fa-gift" aria-hidden="true"></i> Coupon</a></li>
							</ul>	
						</div> 
						<p class="single-price-text"><?php echo $product_details['description']; ?></p>
						

						<form action="javascript:void(0);" method="post">
								<fieldset>
									<input type="hidden" name="amount" id="price" value="<?php echo $product_details['selling']; ?>" />
									<input type="hidden" name="productid" id="productid" value="<?php echo $product_details['product_id']; ?>" />
									<button type="submit" onclick="AddToCart()" name="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									<span id="txtStatus"></span>	
								</fieldset>
							</form>
						
					</div>
					
				   <div class="clearfix"> </div>  
				</div>
			</div> 
			
		</div>
	</div>
<!--//products--> 



<!-- brands -->
	<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
		<div class="container">
			<h3>You may also like</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<?php viewhomeproduct();  ?>
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //brands -->

<?php
include_once('include/footer.php');
?>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>

<script>
function AddToCart()
{
	var a=document.getElementById("price").value;
	var b=document.getElementById("productid").value;
 	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtStatus").innerHTML = this.responseText;
        }
    };
    var url="addtocart.php?productid="+b+"&price="+a;
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}
</script>

