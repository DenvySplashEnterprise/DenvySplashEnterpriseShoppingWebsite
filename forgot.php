<?php
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/view.php');
include_once('phplib/controler.php');
if(!isset($_GET['name']))
{
 echo "<script>window.open('forgot.php?name=UGFzc3dvcmQgUmVjb3Zlcnk=','_self');</script>";
}
?>


<!-- login -->
	<div class="w3_login">
		<h3>Password Recovery</h3>
		<div class="w3_login_module">
				<div class="module form-module">
				  <?php
				  if(isset($_POST['submit']))
				  {
				  	forgot($_POST['txtEmail']);
				  }
				  ?>
				  <div class="form">
					<h2>Enter your e-mail address</h2>
					<form action="forgot.php?name=UGFzc3dvcmQgUmVjb3Zlcnk=" method="post">
					  <input type="text" name="txtEmail" placeholder="Email" required=" ">
					  <!--input type="password" name="txtPassword" placeholder="Password" required=" ">
					  <input type="hidden" name="txtredirurl" value="<!--?php if(isset($_GET['redirurl'])){echo $_GET['redirurl']; } ?>"-->
					  <input type="submit" value="Submit" name="submit">
					</form>
				  </div>
				  <div class="form">
					<h2>Enter your e-mail address</h2>
					<form action="forgot.php?name=UGFzc3dvcmQgUmVjb3Zlcnk=" method="post">
					  <input type="text" name="txtEmail" placeholder="Email" required=" ">
					  <!--input type="password" name="txtPassword" placeholder="Password" required=" ">
					  <input type="hidden" name="txtredirurl" value="<!--?php if(isset($_GET['redirurl'])){echo $_GET['redirurl']; } ?>"-->
					  <input type="submit" value="Submit"  name="submit">
					</form>
				  </div>
				  <div class="cta"><a href="register.php">Register A New Account</a></div>
				</div>
		</div>
	</div>
<!-- //login -->


























<?php
include_once('include/footer.php');
?>