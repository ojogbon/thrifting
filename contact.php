<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cryptocurrency - Landing Page Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cryptocurrency Landing Page Template">
	<meta name="keywords" content="cryptocurrency, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
    <?php include './nav/head.php'; ?>
	<!-- Header section end -->



	<!-- Page info section -->
	<section class="page-info-section">
		<div class="container">
			<h2>Contact Us</h2>
			<div class="site-beradcamb">
				<a href="">Home</a>
				<span><i class="fa fa-angle-right"></i> Contact us</span>
			</div>
		</div>
	</section>
	<!-- Page info end -->



	<!-- Contact section -->
	<section class="contact-page spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<form class="contact-form make-new-input" method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input class="check-form" type="text" placeholder="First Name*:" name="firstName">
									<span><i class="ti-check"></i></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input class="check-form" type="text" placeholder="Last Name*:" name="lastName">
									<span><i class="ti-check"></i></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input class="check-form" type="text" placeholder="Email Adress*:" name="email">
									<span><i class="ti-check"></i></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input class="check-form" type="text" placeholder="Subject*:" name="phoneNumber">
									<span><i class="ti-check"></i></span>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea placeholder="Tell us about your question!" name="message"></textarea>
								</div>


								<button class="site-btn sb-gradients mt-4 add-to-btn">Submit form</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-5 mt-5 mt-lg-0">
					<h1 style="font-size:500px; "><i class="fa fa-phone-square"></i></h1>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->


	<!-- Newsletter section -->
    <!-- Newsletter section -->
    <section class="newsletter-section gradient-bg">
        <div class="container text-white">
            <div class="row">
                <div class="col-lg-7 newsletter-text">
                    <h2>Subscribe to our Newsletter</h2>
                    <p>Sign up for our weekly  updates, insider perspectives and in-depth  analysis.</p>
                </div>
                <div class="col-lg-5 col-md-8 offset-lg-0 offset-md-2">
                    <form class="newsletter-form">
                        <input type="text" placeholder="Enter your email">
                        <button>Get Started</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter section end -->

	<!-- Newsletter section end -->


	<!-- Footer section -->
    <?php include './nav/foot.php'; ?>


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>



	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map.js"></script>
    <script src="js/Contact.js"></script>

</body>
</html>
