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
	    
		$email1 = $_POST["email"];     //Imported form the previous form
		echo $email1;
		
		$pass1 = $_POST["password"];   //Imported form the previous form
		 
		echo $pass1;
		
		
		 
		$email=$password=$Fp= $HP1="";  //fp=forget password??
		 
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
				//echo "Password is: " . $_REQUEST["password"];
				//echo "Right password";
			}
		}
		
		
		
		$fpError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["Fp"])) {
				  $fpError = " Wrong password";
			}
			else {
				//echo "Password is: " . $_REQUEST["password"];
				//echo "<a href='../Web tech/FP.php'>FP</a>";
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
				//echo "Password is: " . $_REQUEST["password"];
				//echo "<a href='../Web tech/Homepage1.php'>HP1</a>";
				//echo "<a href='Homepage1.php'>HP1</a>";
				  //$hp1Error ="Worng info";
				  
				  
				  
				  if($email==$email1 & $password==$pass1) {
				  $counter=1;
				
			}
			else {
				//echo "Password is: " . $_REQUEST["password"];
				//echo "Right password";
				$counter=0;
			}
			
			if($counter==1)
			{
				 //echo "<a href='Homepage1.php'>HP1</a>";
			}
			else{
				echo "Null";
			}
			}

		}
		
		

	
        //echo "<hr>";
		
		
        
	?>
	
	<form action="Homepage1.php" method="post">
     Email <br/>
    <input type="text" name="email" required>
	
	<br /><br />
    <span><?php echo $emailError; ?></span><br />
    
    Password  <br/>
    <input type="text" name="password" required style=" width:333px">
	<br />       
	
	<br /><br />
	<input type="submit" name="HP1" value="Log In" style="color:green; font-weigt:bold">
	
	<!--<input type="submit" name="S1" value="forgot password??" style="color:green; font-weigt:bold">-->
	</form>
	
	
	
	
	<form action="FP.php" method="post">
	<input type="submit" name="Fp" value="forgot password??" style="color:green; font-weigt:bold">
	</form>
	
	
	
	
	<div>
    <?php include 'footer.php' ?>
  </div>
	
	
</body>
</html>