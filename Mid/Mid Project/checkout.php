<!DOCTYPE html>
<html>
<head>
	<div style="display:inline-block;">
    <?php include 'header.php' ?>
  </div>
	<title>Check Out</title>
</head>

<body>
	<h2>Product List and Price</h2>
	<form action="#" method="post">
			<input type="submit" name="confirm" value="Confirm Oder" style="color:green; font-weigt:bold">
			</form>
<form action="BuyerHome.php" method="post">
			<input type="submit" name="BuyerLogin" value="Back" style="color:green; font-weigt:bold">
			</form>
	<form action="BuyerLogin.php" method="post">
			<input type="submit" name="BuyerLogin" value="Log Out" style="color:green; font-weigt:bold">
			</form>
<div>
    <?php include 'footer.php' ?>
  </div>

</body>
</html>