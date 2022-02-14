<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Rhino Paper - Quick Order - Page 2</title>
		<meta charset="UTF-8">
		<script src="/js/jquery.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<script src="/js/bootstrap.min.js" ></script>
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
						<h5 class="text-right">Step <span>2</span></h5>
						<h4>Order Information</h4>
					</div>
				</div>
			</div>
		</div>
		<form class="container" type="POST" action="quick-order-3" enctype="multipart/form-data">
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
			<div class="page clearfix">
				<div class="col-lg-6 pt15 whitebg">
					<h3>
						Note: You must select at least one unit in the quantity field and fill one of these to continue:
					</h3>
					<ul class="text">
						<li><h4>Part Number(2) or Description</h4></li>
						<li><h4>Add another product to order</h4></li>
					</ul>
					<br>
					<h4 class="redtext">One (1) unit of ribbons for POS is equivalent to a dozen (12)</h4>
					<p class="small">All fields required</p>
				</div>
				<div class="whitebg pt15 col-lg-6 lb">
					<input type="text" placeholder="Part # / SKU if Available" class="col-lg-8" name="partsku" value="<?php if ($_GET['partsku']){echo $_GET['partsku'];} ?>" required>
					<?php 
						$q = array(
							' '=>'Quantity',
						    '1'=>'1',
						    '2'=>'2',
						    '3'=>'3',
						    '4'=>'4',
						    '5'=>'5',
						    '6'=>'6',
						    '7'=>'7',
						    '8'=>'8',
						    '9'=>'9',
						    '10+'=>'10+'

						);
					?>
					<?php 
						$quan = $_GET['quantity'];
						echo '<select name="quantity" id="quantity" class="col-lg-3 pull-right" required>';
						foreach ($q as $qty) {
						    echo "<option value='$qty'" . ($qty == $quan ? ' selected' : '') . ">$qty</option>";
						}
						echo '</select>';
					?>
					<br>
					<textarea name="description" id="description" rows="6" class="col-lg-12" placeholder="Description"></textarea>
					<br><br>
					<input type="checkbox" id="promo" name="promo" checked>
					<label for="promo">For promotional products information, check here</label>
					<br><br>
					<input type="text" placeholder="Discount Coupon Code" name="coupon" id="coupon" class="col-lg-8">
					<div class="clearfix"></div>
					<input type="checkbox" id="terms" name="terms" required>
					<label for="terms">I have read the terms of use and I agree</label>
					<div class="pull-right">
						<a href="quick-order?<?php echo $_SERVER['QUERY_STRING'] ?>" class="btnyellow">&#139; Back</a>
						<input type="submit" value="Next &#155;">
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