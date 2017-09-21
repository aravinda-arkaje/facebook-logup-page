<!DOCTYPE html>
<html ng-app="">
<head>
	<title>Facebook LogIn/LogUp</title>
	<!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>css/register.css" rel="stylesheet">

   <!--  <script type="text/javascript">
    	function submit($firstname,$surname,$email) {
    		// body...
    		<?php

		  		// $this->session->unset_userdata($firstname);
		  		// $this->session->unset_userdata($surname);
		  		// $this->session->unset_userdata($email);
				  
    		?>
    	}
    	document.getElementById("demo");
    </script> -->
</head>
<body>
	<div class="header">
		<div class="container">
				<a href="" class="logo">
					<img width="17%"  style="margin-top: 25px;" src="<?php echo base_url(); ?>images/facebook-white.png">
				</a>
			<div class="login-form">
				<form method="post" action="register_success_controller/successfull">
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
					Pleace fill more information
				</div>
				<div class="content-three">
					The informations that you provided is safe and used give you more features of your teast.
				</div>
			</div>
			<div class="contents" ng-model="register">
				<form class="form-horizontal" method="post" action="register_success_controller/moredetails">

					<?php
						$firstname = $this->session->userdata('firstname');
						$surname = $this->session->userdata('surname');
						$name = $firstname.' '.$surname;
						$email = $this->session->userdata('email');
					?>

					<div class="form-group">
					    <label for="" class="col-sm-2 control-label">Name</label>
					    <div class="col-sm-10">
					      <button class="form-control btn btn-primary btn-fixed" id="name" name="name"><?php echo $name;?></button>
					    </div>
				 	</div>
				  	<div class="form-group">
					    <label for="" class="col-sm-2 control-label">Email</label>
					    <div class="col-sm-10">
					      <button class="form-control btn btn-primary btn-fixed" id="email" name="email"><?php echo $email;?></button>
					    </div>
				 	</div>
				 	<div class="form-group">
					    <label for="" class="col-sm-2 control-label">Contact info</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="number" name="number" placeholder="Mobile number" pattern="[6-9]{1}[0-9]{9}" required>
					    </div>
				 	</div>
				 	<div class="form-group">
					    <label for="" class="col-sm-2 control-label">Address</label>
					    <div class="col-sm-10">
					      <input type="text" name="address" class="form-control" placeholder="Country, State, City, Street, Door number, Pin code" pattern="[A-Za-z]{2,30}[,]{1}[A-Za-z]{2,30}[,]{1}[A-Za-z]{2,30}[,]{1}[A-Za-z]{2,30}[,]{1}[0-9]{1,4}[,]{1}[0-9]{3,8}" required>
					      <p style="color: #ff3033;">* India,Karnataka,Mangaluru,Ponaji,25,581350</p>
					    </div>
				 	</div>
				 	<div class="form-group">
					    <label for="" class="col-sm-2 control-label">Education</label>
					    <div class="col-sm-10">
					      <input type="text" name="education" class="form-control" placeholder="Institution name, Field of study, Location" pattern="[A-Za-z]{2,30}[,]{1}[A-Za-z]{2,30}[,]{1}[A-Za-z]{2,30}[,]{1}[A-Za-z]{2,30}" required>
					      <p style="color: #ff3033;">* SDMIT,BE,CSE,Ujire</p>
					    </div>		    
				 	</div>
				 	<div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <input type="submit" class="btn btn-default" value="Save" id="refresh">
					    </div>
				  	</div>
				</form>
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
