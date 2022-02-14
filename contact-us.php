<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Rhino Paper - Contact Us</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<script type="text/javascript" src="js/modernizr.js"></script>
	</head>
	<body>
		<header id="header">
			<div class="container">
				<a href="home" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<img src="images/rhino-logo.png" class="logo">
				</a>
				<nav class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-md-offset-1 col-lg-offset-1">
					<li class="col-lg-3 col-sm-3 col-xs-3"><a href="about-us">About Us</a></li>
					<li class="col-lg-3 col-sm-3 col-xs-3"><a href="rhino-rewards">Rhino Rewards</a></li>
					<li class="col-lg-3 col-sm-3 col-xs-3"><a href="contact-us" class="active">Contact Us</a></li>
					<li class="col-lg-3 col-sm-3 col-xs-3"><a href="quick-order" class="cta">Quick Order</a></li>
				</nav>
			</div>
		</header>
		<div class="container">
			<div class="col-lg-12">
				<img src="images/contact-us-img.png" class="subhero">
			</div>
		</div>
		<div class="container">
			<div class="col-lg-12">
				<div class="clearfix page">
				<div class="col-lg-4">
					<div class="whitebg">
						<h1>Contact Us</h1>
						<p>
							Rhino Paper &amp; Marketing’s Head Office is located in Fort Lauderdale, Florida. We also have a satellite office in Naples, Florida as well as having over 50 stocked warehouses and conversion facilities throughout North America. 
						</p>
						<address>
							3540 N.W. 56th St Suite #208
							Ft. Lauderdale, Florida 33309
						</address>
						<p>
							Ft. Lauderdale: 954-974-6456 
							Ft. Lauderdale Fax: 954-974-6908 
							Naples Phone: 239-643-7777 
							Naples Fax: 239-643-7778 
							Toll Free: 1-888-74RHINO( 74466 )
							Email: <a href="mailto:jason@rhinopaper.com">jason@rhinopaper.com</a>
						</p>
					</div>
				</div>
				<div class="col-lg-8 lb">
					<div class="page ">
						<h2>
							For more information, complete the form below. Our staff will contact you with a reply to your requests or comments.
						</h2>
						<form action="email-contact.php" method="POST" class="contact-form">
							<div class="col-lg-6 col-sm-12">
								<select name="dest" id="dest" class="col-lg-12 col-sm-12 col-md-12" required>
									<option value="">Select a Destination</option>
									<option value="One">One</option>
									<option value="Two">Two</option>
									<option value="Three">Three</option>
								</select>
								<input type="text" class="col-lg-12 col-sm-12 col-md-12" placeholder="Full Name*" name="name" required>
								<input type="email" class="col-lg-12 col-sm-12 col-md-12" placeholder="Email*" name="email" required>
								<input type="text" class="col-lg-12 col-sm-12 col-md-12" placeholder="Telephone*" name="phone" required>
							</div>
							<div class="col-lg-6 col-sm-12">
								<input type="text" class="col-lg-12 col-sm-12 col-md-12" placeholder="Subject" name="subject">
								<textarea class="col-lg-12 col-sm-12 col-md-12" rows="6" placeholder="Comments*" name="comments" required></textarea>
								<div class="buttons">
									<input type="submit" value="Submit" class="pull-right">
								</div>
								<h4 class="response-message"></h4>
							</div>	
						</form>
					</div>
				</div>
				
			</div>
			</div>
			
			
		</div>
		<footer id="footer">
			<div class="container">
				<div class="col-lg-12">
					<p>
						&copy; 2016 Rhino Paper &amp; Marketing – All Rights Reserved.  <a href="privacy-policy">Privacy Policy</a>  |  <a href="terms-of-use">Terms of Use</a>
					</p>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/contact-form.js"></script>
	</body>
</html>