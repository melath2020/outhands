<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Outhands</title>
		<!-- Meta tags -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<!-- //Meta tags -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css" media="all" /><!-- Style-CSS -->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet"><!-- font-awesome-icons -->
</head>

<body>
	<section class="w3l-form-36">
		<div class="form-36-mian section-gap">
			<div class="wrapper">
				<div class="form-inner-cont">
					<h3>Login</h3>
					<form class="form-horizontal" method="post" enctype="multipart" action="<?php echo base_url();?>insert">
						
						<div class="form-input">
							<span class="fa fa-envelope-o" aria-hidden="true"></span> <input type="email" name="email" placeholder="Email" required />
						</div>
						<div class="form-input">
							<span class="fa fa-key" aria-hidden="true"></span><input type="password" name="password" placeholder="Password"
								required />
				</div>
						
						
						<div class="login-remember d-grid">
							<label class="check-remaind">
								<input type="checkbox">
								<span class="checkmark"></span>
								<p class="remember">Remember me</p>
							</label>
							<button class="btn theme-button">Login</button>
						</div>
					</form>
					<div class="social-icons">
						<p class="continue"><span>Or</span></p>
						<div class="social-login">
						<a href="#facebook">
							<div class="facebook">
								<span class="fa fa-facebook" aria-hidden="true"></span>
								
							</div>
						</a>
						<a href="#google">
							<div class="google">
								<span class="fa fa-google-plus" aria-hidden="true"></span>
							</div>
						</a>
					</div>
				</div>
					<p class="signup">Register Here <a href="index" class="signuplink">Register</a></p>
				</div>

				<!-- copyright -->
				</div>
				<!-- //copyright -->
			</div>
		</div>
	</section>
</body>
</html>