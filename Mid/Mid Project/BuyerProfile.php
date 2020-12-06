<!DOCTYPE html>
<html>
<head>
	<div style="display:inline-block;">
    <?php include 'header.php' ?>
  </div>
	<title>Profile</title>
</head>
<body>
	<h3>Buyer Profile</h3>

	<form action="edit.php" method="post">
			<input type="submit" name="edit" value="Update Information" style="color:green; font-weigt:bold">
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