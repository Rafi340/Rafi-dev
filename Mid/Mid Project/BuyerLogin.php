<!DOCTYPE html>
<html>
<head>
	<title>Log in Form</title>
</head>
<body>
 <div style="display:inline-block;">
    <?php include 'header.php' ?>
  </div>

	<?php
	    
		$email1 = $_POST["email"];  
		
		
		$pass1 = $_POST["password"]; 
		$email=$password=$Fp= $HP1=""; 
		 
        $emailError = "";
		
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["email"])) {
				  $emailError = "Email is required";
				  
			}
			else{
			}
		   
		}

        
        echo "<br>";
        $passwordError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["password"])) {
				  $passwordError = "Password is required";
			}
			else {
				
			}
		}
		$fpError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["Fp"])) {
				  $fpError = " Wrong password";
			}
			else {
				echo "<a href='FP.php'>FP</a>";
			}
		}
		
		
		$hp1Error = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			$counter=0;
			if(empty($_REQUEST["HP1"])) {
				  $hp1Error = " Couldn't go to HP1";
			}
			else {
				  
				  
				  
				  if($email==$email1 & $password==$pass1) {
				  $counter=1;
				
			}
			else {
		
				$counter=0;
			}
			
			if($counter==1)
			{
				 
			}
			else{
				echo "Null";
			}
			}

		}
		
		
        
	?>
	
	<form action="BuyerHome.php" method="post">
     Email <br>
    <input type="text" name="email" required>
	
	<br><br>
    <span><?php echo $emailError; ?></span><br />
    
    Password  <br>
    <input type="text" name="password" required style=" width:333px">
	<br>       
	
	<br><br>
	<input type="submit" name="HP1" value="Log In" style="color:green; font-weigt:bold">
	</form>
	
	<form action="FP.php" method="post">
	<input type="submit" name="Fp" value="forgot password??" style="color:green; font-weigt:bold">
	</form>
	<br>
	<form action="BuyerSignin.php" method="post">
	<input type="submit" name="Fp" value="Sign In For Buyer" style="color:green; font-weigt:bold">
	</form>
	<br>

	<form action="HomePage.php" method="post">
	<input type="submit" name="Fp" value="Back to HomePage" style="color:green; font-weigt:bold">
	</form>
	
	
	
	<div>
    <?php include 'footer.php' ?>
  </div>
	
	
</body>
</html>