<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

<head>
	<title>Outhance</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords"
		content="Registration / Login form Responsive Widget, Login forms,Flat Pricing tables,Flat Drop downs  Sign up Web forms, Login sign up Responsive web Forms," />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Custom CSS -->
	<link href="<?php echo base_url();?>assets/css/style.css" rel='stylesheet' type='text/css' />
	<!-- font CSS -->
	<!--
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">-->
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
		crossorigin="anonymous"></script>
	<link href="//fonts.googleapis.com/css?family=Signika:300,400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">

	<!--font CSS-->
	<script src="<?php echo base_url();?>assets/js/jquery2.0.3.min.js"></script>
</head>

<body class="dashboard-page">
	<div class="main-grid">
		<div class="agile-grids">
			<!-- validation -->
			<div class="grids"><a href="adminlogin"><button type="button" class="btn btn-success">ADMIN LOGIN</button></a>

			</div>

			<div class="forms-grids">
				<div class="forms3">
					<div class="w3agile-validation w3ls-validation">
						<div class="panel panel-widget agile-validation register-form">
							<div class="validation-grids widget-shadow" data-example-id="basic-forms">
								<div class="input-info">
									<h3>Register Here :</h3>
								</div>
								<div class="form-body form-body-info">
								<form class="form-horizontal" method="post" enctype="multipart" action="<?php echo base_url();?>insert">
										<div class="form-group valid-form">
											<input type="text" class="form-control" id="inputName" name="username"
												placeholder="Username" required="">
										</div>
										<div class="form-group has-feedback">
											<input type="email" class="form-control" name="email" placeholder="Email"
												data-error="That email address is invalid" required="">
											<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
											<span class="help-block with-errors">Please enter a valid email
												address</span>
										</div>
										
										<div class="form-group">
											<input type="password" data-toggle="validator" data-minlength="6"
												class="form-control" id="inputPassword" name="password"
												placeholder="Password" required="">
											<span class="help-block">Minimum of 6 characters</span>
										</div>
										<div class="form-group valid-form">
											<input type="text" class="form-control" id="inputName" name="phone"
												placeholder="Phone" required="">
										</div>
										<div class="form-group valid-form">
											<input type="text" class="form-control" id="inputName" name="country"
												placeholder="Country" required="">
										</div>
										<div class="form-group valid-form">
											<input type="text" class="form-control" id="inputName" name="state"
												placeholder="State" required="">
										</div>
										<div class="form-group valid-form">
											<input type="text" class="form-control" id="inputName" name="city"
												placeholder="city" required="">
										</div>
										<div class="form-group valid-form">
                 					 <label class="control-label col-md-3"><h5>image</h5></label>
									  <input class="form-control col-md-8" type="file" name="Image">
                						  </div>
										<div class="form-group">
											<div class="radio">
												<label>
													<input type="radio" value="female" name="gender" required="">
													Female
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" value="male" name="gender" required="">
													Male
												</label>
											</div>
										</div>
										<div class="form-group">
											<div class="checkbox">
												<label>
													<input type="checkbox" id="terms"
														data-error="Before you wreck yourself" required="">
													I have read and accept terms of use.
												</label>
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="panel panel-widget agile-validation">
							<div class="validation-grids validation-grids-right login-form">
								<div class="widget-shadow login-form-shadow" data-example-id="basic-forms">
									<div class="input-info">
										<h3>User Login :</h3>
									</div>
									<div class="form-body form-body-info">
									<form class="form-horizontal" method="post" enctype="multipart" action="<?php echo base_url();?>sign">											<div class="form-group has-feedback">
												<input type="text" class="form-control" name="username"
													placeholder="Enter Your Username"
													data-error="Bruh, that email address is invalid" required="">
												<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
											</div>
											<div class="form-group">
												<input type="password" data-toggle="validator" data-minlength="6"
													class="form-control" id="inputPassword1" name="password"
													placeholder="Password" required="">
											</div>
											<div class="bottom">
												<div class="form-group">
													<div class="checkbox">
														<label>
															<input type="checkbox" id="terms1"
																data-error="Before you wreck yourself" required="">
															Remember me
														</label>
														<div class="help-block with-errors"></div>
													</div>
												</div>
												<div class="form-group">
													<button type="submit"
														class="btn btn-primary">Login</button>				
														<a href="'.base_url().'google_login"><img src="<?php echo base_url();?>assets/images\download.png" alt="" class="src">

												</div>
												<div class="clearfix"> </div>
												
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>


	<script type="text/javascript" src="js/valida.2.1.6.min.js"></script>
	<script type="text/javascript">

		$(document).ready(function () {

			// show Valida's version.
			$('#version').valida('version');

			// Exemple 1
			$('.valida').valida();

			// Exemple 2
			/*
			$('.valida').valida({

				// basic settings
				validate: 'novalidate',
				autocomplete: 'off',
				tag: 'p',

				// default messages
				messages: {
					submit: 'Wait ...',
					required: 'Este campo é obrigatório',
					invalid: 'Field with invalid data',
					textarea_help: 'Digitados <span class="at-counter">{0}</span> de {1}'
				},

				// filters & callbacks
				use_filter: true,

				// a callback function that will be called right before valida runs.
				// it must return a boolan value (true for good results and false for errors)
				before_validate: null,

				// a callback function that will be called right after valida runs.
				// it must return a boolan value (true for good results and false for errors)
				after_validate: null

			});
			*/

			// setup the partial validation
			$('#partial-1').on('click', function (ev) {
				ev.preventDefault();
				$('#res-1').click(); // clear form error msgs
				$('form').valida('partial', '#field-1'); // validate only field-1
				$('form').valida('partial', '#field-1-3'); // validate only field-1-3
			});

		});

	</script>
	<!-- //input-forms -->
	<!--validator js-->
	<script src="js/validator.min.js"></script>
	<!--//validator js-->
</body>

</html>