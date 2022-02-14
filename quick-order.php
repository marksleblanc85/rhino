<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Rhino Paper - Quick Order</title>
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
						<h5 class="text-right">Step <span>1</span></h5>
						<h4>Contact Information</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="container ">
			<div class="col-lg-12 whitebg">
				<div class="col-lg-12">
					<h2 class="pt15">Complete the 3-Step quick order form below to order products. Our staff will contact you with a confirmation.</h2>
				</div>
			</div>
		</div>
		<form class="container" type="POST" action="quick-order-2" enctype="multipart/form-data">
			<div class="page clearfix">
				<div class="col-lg-6 whitebg">
					<input type="text" placeholder="Customer Name" class="col-lg-11" name="customername" value="<?php if ($_GET['customername']){echo $_GET['customername'];} ?>" required>
					<input type="text" placeholder="Contact Name" class="col-lg-11" name="contactname" value="<?php if ($_GET['contactname']){echo $_GET['contactname'];} ?>" required>
					<input type="text" placeholder="Shipping Address" class="col-lg-11" name="shippingaddress" value="<?php if ($_GET['shippingaddress']){echo $_GET['shippingaddress'];} ?>" required>
					<?php 
						$states = array(
								''=>'State',
							    'AL'=>'Alabama',
							    'AK'=>'Alaska',
							    'AZ'=>'Arizona',
							    'AR'=>'Arkansas',
							    'CA'=>'California',
							    'CO'=>'Colorado',
							    'CT'=>'Connecticut',
							    'DE'=>'Delaware',
							    'DC'=>'District of Columbia',
							    'FL'=>'Florida',
							    'GA'=>'Georgia',
							    'HI'=>'Hawaii',
							    'ID'=>'Idaho',
							    'IL'=>'Illinois',
							    'IN'=>'Indiana',
							    'IA'=>'Iowa',
							    'KS'=>'Kansas',
							    'KY'=>'Kentucky',
							    'LA'=>'Louisiana',
							    'ME'=>'Maine',
							    'MD'=>'Maryland',
							    'MA'=>'Massachusetts',
							    'MI'=>'Michigan',
							    'MN'=>'Minnesota',
							    'MS'=>'Mississippi',
							    'MO'=>'Missouri',
							    'MT'=>'Montana',
							    'NE'=>'Nebraska',
							    'NV'=>'Nevada',
							    'NH'=>'New Hampshire',
							    'NJ'=>'New Jersey',
							    'NM'=>'New Mexico',
							    'NY'=>'New York',
							    'NC'=>'North Carolina',
							    'ND'=>'North Dakota',
							    'OH'=>'Ohio',
							    'OK'=>'Oklahoma',
							    'OR'=>'Oregon',
							    'PA'=>'Pennsylvania',
							    'RI'=>'Rhode Island',
							    'SC'=>'South Carolina',
							    'SD'=>'South Dakota',
							    'TN'=>'Tennessee',
							    'TX'=>'Texas',
							    'UT'=>'Utah',
							    'VT'=>'Vermont',
							    'VA'=>'Virginia',
							    'WA'=>'Washington',
							    'WV'=>'West Virginia',
							    'WI'=>'Wisconsin',
							    'WY'=>'Wyoming',
							);
					?>
					<div class="loc clearfix">
						<input type="text" placeholder="City" class="col-lg-5" name="shippingcity" id="shippingcity" required value="<?php if ($_GET['shippingcity']){echo $_GET['shippingcity'];} ?>">
						<?php 
							$sstate = $_GET['shippingstate'];
							echo '<select name="shippingstate" id="shippingstate"class="col-lg-3" required>';
							foreach ($states as $state) {
							    echo "<option value='$state'" . ($state == $sstate ? ' selected' : '') . ">$state</option>";
							}
							echo '</select>';
						?>
						<input type="text" placeholder="Zip" name="shippingzip" id="shippingzip" class="zip col-lg-3 col-sm-12 col xs-12 col-md-6" value="<?php if ($_GET['shippingzip']){echo $_GET['shippingzip'];} ?>" required>
					</div>
					<input type="checkbox" id="same" name="same" checked>
					<label for="same">Shipping address is the same as the billing address</label>
					<div class="billing loc clearfix">
						<input type="text" placeholder="Billing Address" class="col-lg-11" name="billingaddress" id="billingaddress" value="<?php if ($_GET['billingaddress']){echo $_GET['billingaddress'];} ?>"><br>
						<input type="text" placeholder="City" class="col-lg-5" name="billingcity" id="billingcity" value="<?php if ($_GET['billingcity']){echo $_GET['billingcity'];} ?>">
						<?php 
							$bstate = $_GET['shippingstate'];
							echo '<select name="billingstate" id="billingstate"class="col-lg-3" required>';
							foreach ($states as $state) {
							    echo "<option value='$state'" . ($state == $bstate ? ' selected' : '') . ">$state</option>";
							}
							echo '</select>';
						?>
						<input type="text" placeholder="Zip" name="billingzip" id="billingzip" class="zip col-lg-3" value="<?php if ($_GET['billingzip']){echo $_GET['billingzip'];} ?>">
					</div>
					<input type="email" placeholder="Email" class="col-lg-11 pt15" name="email" value="<?php if ($_GET['email']){echo $_GET['email'];} ?>" required>
					<input type="text" placeholder="Telephone" class="col-lg-11" name="phone" value="<?php if ($_GET['phone']){echo $_GET['phone'];} ?>" required>
					<br><br>
					<div class="clearfix"></div>
					<p class="small">All fields required</p>
				</div>
				<div class="whitebg col-lg-6 lb">
					<h4>Type of Customer:</h4>
					<div class="col-lg-6 pt15">
						<ul class="radios">
							<li>
								<input type="radio" name="type" id="restaurant" value="Restaurant">
								<label for="restaurant">Restaurant</label>
								</input>
							</li>
							<li>
								<input type="radio" name="type" id="gas" value="Gas Station Convenience Store">
								<label for="gas">Gas Station/Convenience Store</label>
							</li>
							<li>
								<input type="radio" name="type" id="retail" value="Retail Store">
								<label for="retail">Retail Store</label>
							</li>
							<li>
								<input type="radio" name="type" id="gas" value="Corporate Office">
								<label for="gas">Corporate Office</label>
							</li>
							<li>
								<input type="checkbox" id="verbal" name="verbal">
								<label for="verbal">Request Verbal Confirmation</label>
							</li>
						</ul>
					</div>
					<div class="col-lg-6 pt15">
						<ul class="radios">
							<li>
								<input type="radio" name="type" id="supermarket" value="Supermarket">
								<label for="supermarket">Supermarket</label>
							</li>
							<li>
								<input type="radio" name="type" id="hotel" value="Hotel">
								<label for="hotel">Hotel</label>
							</li>
							<li>
								<input type="radio" name="type" id="personalaccount" value="Personal Account">
								<label for="personalaccount">Personal Account</label>
							</li>
							<li>
								<input type="radio" name="type" id="other" value="Other" checked>
								<label for="other">Other</label>
							</li>
							<li>
								<br><br>
								<input type="submit" class="pull-right" value="Next &#155;">
							</li>
						</ul>
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
		<script type="text/javascript">
			$(function(){
				$('#same').val($(this).is(':checked'));
			    $('#same').change(function() {
			        if($(this).is(":checked")) {
			            $(this).attr("checked");
			            $('.billing').css('display','none');
			            $('.billing input').add('.billing select').each(function(){
			            	$(this).attr('required');
			            });
			        } else {
			        	$('.billing').css('display','block');
			        	 $('.billing input').add('.billing select').each(function(){
			            	$(this).attr('required','no');
			            });
			        }  
			    });
			});
		</script>
	</body>
</html>