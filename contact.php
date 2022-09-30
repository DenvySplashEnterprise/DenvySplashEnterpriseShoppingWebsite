





<?php
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/controler.php');
include_once('phplib/view.php');
if(!isset($_GET['name']))
{
 echo "<script>window.open('contact.php?name=Q29udGFjdA==','_self');</script>";
}
?>
<!-- mail -->
		<div class="mail">
			<h3>Mail Us</h3>
			<div class="agileinfo_mail_grids">
				<div class="col-md-4 agileinfo_mail_grid_left">
					<ul>
						<li><i class="fa fa-home" aria-hidden="true"></i></li>
						<li>address<span>Ebenezer St.,Akim-Oda,EB-0162-4252</span></li>
					</ul>
					<ul>
						<li><i class="fa fa-envelope" aria-hidden="true"></i></li>
						<li>email<span><a href="mailto:workandmanymore@gmail.com">workandmanymore@gmail.com</a></span></li>
					</ul>
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i></li>
						<li>call to us<span>(+233) 546969778</span></li>
					</ul>
				</div>
				<div class="col-md-8 agileinfo_mail_grid_right">
					<form action="contact.php" method="post">
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" maxlength="80" name="Name" value="Name*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name*';}" required="true">
							<input type="email" name="Email" maxlength="80" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}" required="true">
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
						<input type="text" class="form-control" maxlength="10" onkeydown="return ( event.ctrlKey || event.altKey 
                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )" minlength="10" required name="Telephone" value="Telephone*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone*';}">
							
						<input type="text" name="Subject" maxlength="150" value="Subject*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject*';}" required="true">
						</div>
						<div class="clearfix"> </div>
						<textarea  name="Message" maxlength="500" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" name="submit" value="Submit">
						<input type="reset" value="Clear">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //mail -->
<!-- map -->
	<div class="map">
		<iframe src="https://www.google.com/maps?q=Akim%20State%20University%20College%2C%20Winneba%20-%20Akim%20Oda%20Road%2C%20Ghana&z=14&t=k&ie=UTF8&output=embed" style="border:0"></iframe>
	</div>
<!-- //map -->
<?php  
if(isset($_POST['submit']))
{
  placehelp($_POST['Name'],$_POST['Email'],$_POST['Telephone'],$_POST['Subject'],$_POST['Message']);
}
include_once('include/footer.php');
?>