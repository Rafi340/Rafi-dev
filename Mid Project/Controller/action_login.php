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