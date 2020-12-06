<!DOCTYPE html>
<html>
<head>
	<title>Sign in Form</title>
</head>
<body>
<div style="display:inline-block;">
    <?php include 'header.php' ?>
  </div>

	<?php
	    
		$name = $email = $gender = $password = "";
		
       $nameError = $emailError = $genderError = $passwordError= "";
       $signup_status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = 0;
  if (isset($_POST["name"]) & !empty($_POST["name"])) {
    $name = test_input($_POST["name"]);
  }
  else {
    $nameError = "Invalid Name";
    $counter = $counter + 1;
  }

  if (isset($_POST["email"]) & !empty($_POST["email"])) {
    $email = test_input($_POST["email"]);
  }
  else {
    $emailError = "Invalid Email";
    $counter = $counter + 1;
  }

  if (isset($_POST["gender"]) & !empty($_POST["gender"])) {
    $gender = test_input($_POST["gender"]);
  }
  else {
    $genderError = "Invalid Email";
    $counter = $counter + 1;
  }

  if (isset($_POST["password"]) & !empty($_POST["password"])) {
    $password = test_input($_POST["password"]);
  }
  else {
    $passwordError = "Invalid Password";
    $counter = $counter + 1;
  }

  if($counter == 0) {
    $signup_status = "Sign Up Successful";
	
	$myfile = fopen("test.txt", "a") or die("Unable to open file!");
    $txt = $name;
    fwrite($myfile, $txt);
    $txt = $email;
    fwrite($myfile, $txt);
	$txt = $gender;
    fwrite($myfile, $txt);
	$txt = $password;
    fwrite($myfile, $txt);
    fclose($myfile);
  }
  else {
    $signup_status = "Sign Up Failed";
    $counter = 0;
  }
}
else {
	$signup_status = "Sign Up Failed";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
		
				 
     

        
	?>
	
	
	
    <form action="BuyerLogin.php" method="post">
	 Name <br/>
    <input type="text" name="name" required>
	<br /><br />
    <span><?php echo $nameError; ?></span><br />

	Gender <br/>
    <input type="radio" name="gender" value="male" required>Male
    <br/>
	<input type="radio" name="gender" value="female" required>Female
    <br/><br/>
    <span><?php echo $genderError; ?></span><br />
    
        
     Email <br/>
    <input type="text" name="email" required>
	<br /><br />
    <span><?php echo $emailError; ?></span><br />
    
    Password  <br/>
    <input type="text" name="password" required style=" width:333px">
	<br /> 


	<br /><br />
	<input type="submit" value="Create account" style="color:green; font-weigt:bold">
	</form>
<br>
  <form action="BuyerLogin.php" method="post">
      <input type="submit" name="BuyerLogin" value="Back" style="color:green; font-weigt:bold">
      </form>
	
	<div>
    <?php include 'footer.php' ?>
  </div>
</body>
</html>





