<!DOCTYPE html>
<html>
<head>
	<div style="display:inline-block;">
    <?php include 'header.php' ?>
  </div>
	<title>Track Order</title>
</head>
<body>
<h2>Track Order</h2>
<?php
$handle = fopen("pro.txt", "a");
if(fwrite($handle, "World War") == FALSE)
{
	echo "Could not write";
}else{
	echo "Delivary is Success";
}
?>
<form action="BuyerHome.php" method="post">
			<input type="submit" name="BuyerLogin" value="Back" style="color:green; font-weigt:bold">
			</form>
			<br>
<form action="BuyerLogin.php" method="post">
			<input type="submit" name="BuyerLogin" value="Log Out" style="color:green; font-weigt:bold">
			</form>
	<div>
    <?php include 'footer.php' ?>
  </div>
</body>
</html>