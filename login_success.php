<!DOCTYPE html>
<html>
<head>
	<title>Facebook LogIn/LogUp</title>
	<!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>css/register.css" rel="stylesheet">
</head>
<body>
	<div class="header">
		<div class="container">
				<a href="" class="logo">
					<img width="17%"  style="margin-top: 25px;" src="<?php echo base_url(); ?>images/facebook-white.png">
				</a>
				<div class="login-form">
				<form method="post" action="login_success/logout">
					<table class="form-content"> 
						<tr>
							<td class="padding-front" style="padding-top: 25px;">
								<input class="bttn" type="submit" name="submit" value="Log Out">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
	<div class="register-area">
		<div class="container">
			<div class="left-content">
				<div class="content-one">
					Facebook helps you connect and share with the people in your life.
				</div>
				<img class="img" src="<?php echo base_url(); ?>images/facebook2.png">
			</div>	
			<div class="reight-content-success">
				<div class="reight-success-login">
					<div class="content-two">
						Login Successfull
					</div>
					<div class="content-three">
						Hello You are here
					</div>
					<div class="content-success-three">
						<img width="50%" src="<?php echo base_url(); ?>images/facebook-friends.jpg">
					</div>
				</div>	
			</div>
		</div>
	</div>
	<div class="pagefooter">
		<div class="container">
			<div class="languages">
				<ul>
					<li>
						English (UK)
					</li>
					<li>
						<a href="#" title="Kannada">Kannada</a>
					</li>
					<li>
						<a href="#" title="Tamil">Thamil</a>
					</li>
					<li>
						<a href="#" title="Telugu">Telugu</a>
					</li>
					<li>
						<a href="#" title="Hindi">Hindi</a>
					</li>
					<li>
						<a href="#" title="Malayalam">Malayalam</a>
					</li>
					<li>
						<a href="#" title="more"><button>+</button></a>
					</li>
				</ul>
			</div>
			<div class="footer-row"></div>
			<div class="page-info">
				<table class="info-table" cellpadding="0" cellspacing="0">
					<tr>
						<td>
						<a href="">Sign Up</a>
						</td>
						<td><a href="">Log In</a></td>
						<td><a href="">Messenger</a></td>
						<td><a href="">Facebook Lite</a></td>
						<td><a href="">Mobile</a></td>
						<td><a href="">Find Friends</a></td>
						<td><a href="">People</a></td>
						<td><a href="">Pages</a></td>
						<td><a href="">Places</a></td>
						<td><a href="">Games</a></td>
						<td><a href="">Locations</a></td>
					</tr>
					<tr>
						<td><a href="">Celebrities</a></td>
						<td><a href="">Marketplace</a></td>
						<td><a href="">Groups</a></td>
						<td><a href="">Recipes</a></td>
						<td><a href="">Sports</a></td>
						<td><a href="">Moments</a></td>
						<td><a href="">Instagram</a></td>
						<td><a href="">About</a></td>
						<td><a href="">Premium privacy policy</a></td>
						<td><a href="">Standard privacy policy</a></td>
						<td><a href="">Cookies</a></td>
					</tr>
					<tr>
						<td><a href="">Acceptable Use Policy</a></td>
						<td><a href="">Standard Terms of Service</a></td>
						<td><a href="">Help</a></td>
					</tr>
				</table>
			</div>
			<div class="copyright">
				<span>Facebook @ 2017</span>
			</div>
		</div>
	</div>
</body>
</html>