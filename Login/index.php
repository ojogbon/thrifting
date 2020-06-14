<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 logIn">
				<form class="login100-form validate-form login-for-form">
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>


					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 username" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100 pass" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100 " id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="notYetAMember">
								Not Yet a Member?
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn login-dope-card">
							Login
						</button>
					</div>


				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>

            <!----------Registration------->
            <div class="wrap-login100 registerCover" style="display: none;">
				<form class="login100-form validate-form make-new-input">
					<span class="login100-form-title p-b-43">
						 Join Us
					</span>


					<div class="wrap-input100 validate-input" data-validate = "Valid first name is required ">
						<input class="input100" type="text" name="firstName">
						<span class="focus-input100"></span>
						<span class="label-input100">First Name</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid last name is required">
						<input class="input100" type="text" name="lastName">
						<span class="focus-input100"></span>
						<span class="label-input100">Last Name</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid Phone is required: ex@abc.xyz">
						<input class="input100" type="text" name="phoneNumber">
						<span class="focus-input100"></span>
						<span class="label-input100">Phone Number</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Confirm Password is required">
						<input class="input100" type="password" name="confirmPass">
						<span class="focus-input100"></span>
						<span class="label-input100">Confirm Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">

						</div>

						<div>
							<a href="#" class="alreadyAmember">
								Already a member?
							</a>
						</div>
					</div>
<p><b>10%</b> of the total daily,weekly,monthly or yearly savings will be for the <b>Admin</b> <input type="checkbox" class="agreeded" />Agreeded?</p>

					<div class="container-login100-form-btn">
						<button  type="submit"  class="login100-form-btn add-to-btn">
							Register
						</button>
					</div>


				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
    <script src="../js/User.js"></script>

</body>
</html>
