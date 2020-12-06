<!DOCTYPE html>
<html>
<head>
	 <div style="display:inline-block;">
    <?php include 'header.php' ?>
  </div>
	<title>Buyer HomePage</title>
</head>
<body>
	<h2>Welcome To Buyer</h2>
	<form method="post">
		<label>Search</label>
		<input type="text" name="Search">
		<input type="submit" name="Search">
	</form>
	<nav>
			<ul>
				<li class="ByrPrf">
					<a href="BuyerProfile.php">Profile</a>
				</li>
	
				<li class="Addcart">
					<a href="acart.php">Add to cart</a>
				</li>
				<li class="Checkout">
					<a href="checkout.php">Check Out</a>
				</li>
				<li class="sdetails">
					<a href="ShippingDetails.php">Shipping Details</a>
				</li>
				<li class="track">
					<a href="trackorder.php">Track Oder</a>
				</li>
				<li class="ProductReview">
					<a href="ProductReview.php">ProductReview</a>
				</li>
			</ul>
			</nav>
<br>
			<form action="BuyerLogin.php" method="post">
			<input type="submit" name="BuyerLogin" value="Log Out" style="color:green; font-weigt:bold">
			</form>
	<div>
    <?php include 'footer.php' ?>
  </div>

</body>
</html>