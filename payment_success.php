<?php
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/view.php');
include_once('phplib/controler.php');


?>

<div style="margin-top: 150px;">&nbsp;</div>

<section class="payment_status">
	
	<div class="alert alert-success text-center">
  		<strong>Success!</strong> Your order with <strong>DENVY SPLASH ENTERPRISE</strong> is placed successfully. <b>Make Payments</b> To <strong>054 6969 778</strong><br/>
		<a href="order.php"><b>Track Your Order</b>.</a>
		
	</div>
	<div class="alert alert-success text-center"> Dear Customer, make payments to confirm your order. Cash On Delivery buyers are exempted since they will incur higher charges on delivery.<br/>
		Use "<a href="order.php" title="Go to 'My Account' tab, choose 'Order History' or 'Track Order' from the dropdown list to view your 'Order No.'">Order No.</a>" as your Mobile Money "<a>Reference</a>".
		<b>Thank you.</b>
	</div>
	

</section>

<div style="margin-bottom: 150px;">&nbsp;</div>

<?php
include_once('include/footer.php');
?>