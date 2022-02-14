<?php 
	session_start();

	foreach($_POST as $k=>$v) {
		$_SESSION['post'][$k]=$v;
	}
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Rhino Paper - Quick Order - Page 3</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body class="quickorder">
		<header id="header">
			<div class="container">
				<a href="home" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<img src="images/rhino-logo.png" class="logo">
				</a>
				<nav class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-md-offset-1 col-lg-offset-1">
					<li class="col-lg-3 col-sm-3 col-xs-3"><a href="about-us">About Us</a></li>
					<li class="col-lg-3 col-sm-3 col-xs-3"><a href="rhino-rewards">Rhino Rewards</a></li>
					<li class="col-lg-3 col-sm-3 col-xs-3"><a href="contact-us">Contact Us</a></li>
					<li class="col-lg-3 col-sm-3 col-xs-3"><a href="quick-order" class="cta active">Quick Order</a></li>
				</nav>
			</div>
		</header>
		<div class="container offset clearfix">
			<header class="header col-lg-12">
				<div class="tanbg clearfix">
					<h1 class="pull-left">Quick Order</h1>
					<div class="step pull-right">
						<h5 class="text-right">Step <span>3</span></h5>
						<h4>Order Summary</h4>
					</div>
				</div>
			</div>
		</div>
		<form class="container contact-form" type="POST" action="email-order" enctype="multipart/form-data">
			<input type="hidden" id="customername" name="customername" value="<?php echo $_GET["customername"]; ?>">
			<input type="hidden" id="contactname" name="contactname" value="<?php echo $_GET["contactname"]; ?>">
			<input type="hidden" id="shippingaddress" name="shippingaddress" value="<?php echo $_GET["shippingaddress"]; ?>">
			<input type="hidden" id="shippingcity" name="shippingcity" value="<?php echo $_GET["shippingcity"]; ?>">
			<input type="hidden" id="shippingstate" name="shippingstate" value="<?php echo $_GET["shippingstate"]; ?>">
			<input type="hidden" id="shippingzip" name="shippingzip" value="<?php echo $_GET["shippingzip"]; ?>">
			<?php
				if($_GET["billingaddress"]){
					echo '<input type="hidden" id="billingaddress" name="billingaddress" value="'. $_GET["billingaddress"] . '">';
					echo '<input type="hidden" id="billingcity" name="billingcity" value="'. $_GET["billingcity"] . '">';
					echo '<input type="hidden" id="billingstate" name="billingstate" value="'. $_GET["billingstate"] . '">';
					echo '<input type="hidden" id="billingzip" name="billingzip" value="'. $_GET["billingzip"] . '">';
				} 
			?>
			
			<input type="hidden" id="email" name="email" value="<?php echo $_GET["email"]; ?>">
			<input type="hidden" id="phone" name="phone" value="<?php echo $_GET["phone"]; ?>">
			<input type="hidden" id="verbal" name="verbal" value="<?php echo $_GET["verbal"]; ?>">
			<input type="hidden" id="type" name="type" value="<?php echo $_GET["type"]; ?>">
			<input type="hidden" id="partsku" name="partsku" value="<?php echo $_GET["partsku"]; ?>">
			<input type="hidden" id="quantity" name="quantity" value="<?php echo $_GET["quantity"]; ?>">
			<input type="hidden" id="description" name="description" value="<?php echo $_GET["description"]; ?>">
			<input type="hidden" id="promo" name="promo" value="<?php echo $_GET["promo"]; ?>">
			<input type="hidden" id="coupon" name="coupon" value="<?php echo $_GET["coupon"]; ?>">
			<div class="page clearfix">
				<div class="col-lg-6 pt15 whitebg">
					<div class="greybg pad">
						<h3><strong>Order Number:</strong> <span class="redtext">Pending...</span></h3>
						<h4>All orders will be confirmed via email or phone.</h4>
					</div>
					<br><br>
					<div class="borderbox pad">
						<h3>Contact Information</h3>
						<br>
						<ul class="contactinfo">
							<li>
								<label>Customer Name: <span class="redtext"><?php echo $_GET["customername"]; ?></span></label>
							</li>
							<li>
								<label>Contact Name: <span class="redtext"><?php echo $_GET["contactname"]; ?></span></label>
							</li>
							<li>
								<label>Phone Number: <span class="redtext"><?php echo $_GET["phone"]; ?></span></label>
							</li>
							<li>
								<label>Email Address: <span class="redtext"><?php echo $_GET["email"]; ?></span></label>
							</li>
							<li>
								<label>Business Type: <span class="redtext"><?php echo $_GET["type"]; ?></span></label>
							</li>
						</ul>
					</div>
				</div>
				<div class="whitebg pt15 col-lg-6 lb">
					<div class="borderbox pad lt">
						<h3>SHIP TO</h3>
						<ul class="contactinfo">
							<li class="redtext">
								<?php echo $_GET["shippingaddress"]; ?><br>
								<?php echo $_GET["shippingcity"]; ?>, <?php echo $_GET["shippingstate"]; ?> <?php echo $_GET["shippingzip"]; ?>
							</li>
						</ul>
					</div>
					<?php if($_GET["billingaddress"]){ ?>
					<div class="borderbox pad lt">
						<h3>BILL TO</h3>
						<ul class="contactinfo">
							<li class="redtext">
								<?php echo $_GET["billingaddress"]; ?><br>
								<?php echo $_GET["billingcity"]; ?>, <?php echo $_GET["billingstate"]; ?> <?php echo $_GET["billingzip"]; ?>
							</li>
						</ul>
					</div>
					<?php } ?>
					<div class="borderbox pad lt">
						<table>
							<thead>
								<tr>
									<td><label>Part # or SKU</label></td>
									<td><label>Description</label></td>
									<td><label>Qty</label></td>
								</tr>
							</thead>
							<tr>
								<td><label for="" class="redtext"><?php echo $_GET["partsku"]; ?></label></td>
								<td><label for="" class="redtext"><?php echo $_GET["description"]; ?></label></td>
								<td><label for="" class="redtext"><?php echo $_GET["quantity"]; ?></label></td>
							</tr>
						</table>
					</div>
					<?php if ($_GET["coupon"]){ ?>
						<div class="borderbox pad lt">
							<h5 class="nm">Coupon Code: <span class="redtext"><?php echo $_GET["coupon"]; ?></span></h5>
						</div>
					<?php } ?>
					<div class="pull-right">
						<div class="buttons">						
							<a href="quick-order-2?<?php echo $_SERVER['QUERY_STRING'] ?>" class="btnyellow">&#139; Back</a>
							<input type="submit" class="btnred" value="Submit">
						</div>
						<h4 class="response-message"></h4>
					</div>
				</div>
			</div>
		</form>
					
		<footer id="footer">
			<div class="container">
				<div class="col-lg-12">
					<p>
						&copy; 2016 Rhino Paper &amp; Marketing – All Rights Reserved.  <a href="">Privacy Policy</a>  |  <a href="">Terms of Service</a>
					</p>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/contact-form.js"></script>
	</body>
</html>