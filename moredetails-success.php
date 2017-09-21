<!DOCTYPE html>
<html ng-app="">
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
				<form method="post" action="register_success/successfull">
					<table class="form-content"> 
						<tr>
							<td class="padding-up padding-back">Email or Phone</td>
							<td class="padding-up padding-front padding-back">Password</td>
						</tr>
						<tr>
							<td class="padding-up padding-back">
								<input style="color: #000000;" type="email" class="mail" name="email" id="login-mail">
							</td>
							<td class="padding-up padding-front padding-back">
								<input style="color: #000000;" type="password" class="password" name="password" id="login-password">
							</td>
							<td class="padding-up padding-front">
								<input class="bttn" type="submit" name="submit" value="Log In">
							</td>
						</tr>
						<tr>
							<tbody>
								<td class="padding-up padding-back"></td>
								<td class="padding-up padding-front">
									<a style="color:#9cb4d8;" href="">Forgotten accont?</a>
								</td>
								<td class="padding-up"></td>
							</tbody>	
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
	<div class="register-area">
		<div class="container">
			<div class="reight-content-one">
				<div class="content-two">
					All set 
				</div>
				<div class="content-three">
					Ready ... Study ... Go
				</div>
			</div>
			<div class="contents" ng-model="register">
				
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
	<!-- angular min and movie angular file link -->
	<!-- <script src="<?php echo base_url(); ?>js/angular.min.js"></script> -->
</body>
</html>