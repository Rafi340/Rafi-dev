<!DOCTYPE html>
<html>
<head>
	<div style="display:inline-block;">
    <?php include 'header.php' ?>
  </div>
	<title>Cart</title>
</head>

<body>
	<form action="insertCart.php" method="post">
		<tbody>
			<tr>
				<td>Shirt</td>
				<td>1000</td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input type="text" name="qty" class="form-control col-lg-6"></td>
				<input type="hidden" name="name" value="Shirt">
				<td><input type="submit" value="Add cart" name="addCart" class="btn btn-p"></td>
			</tr>
		</tbody>
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