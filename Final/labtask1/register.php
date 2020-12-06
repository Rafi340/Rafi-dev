<!DOCTYPE html>
<html>
<head>
	<title>Student register Form</title>
</head>
<body>
	<?php
	  	$idError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["Student id"])) {
				  $idError = "Student Id is required";
			}
			else {
				echo "Student Id is: " . $_REQUEST["Student id"];
			}
		} 

		
		$nameError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["name"])) {
				  $nameError = "StudentName is required";
			}
			else {
				echo "name is: " . $_REQUEST["name"];
			}
		} 

		

		
		$genderError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["gender"])) {
				  $genderError = "Gender is required";
			}
			else {
				echo "gender is: " . $_REQUEST["gender"];
			}
		} 

		
		$emailError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["email"])) {
				  $emailError = "StudentEmail is required";
			}
			else {
				echo "email is: " . $_REQUEST["email"];
			}
		} 

		
		$addressError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["address"])) {
				  $addressError = "Address is required";
			}
			else {
				echo "Address is: " . $_REQUEST["address"];
			}
		} 

		
		$cityError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["city"])) {
				  $genderError = "City is required";
			}
			else {
				echo "City is: " . $_REQUEST["city"];
			}
		} 
		$stateError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["State"])) {
				  $stateError = "State is required";
			}
			else {
				echo "State is: " . $_REQUEST["state"];
			}
		} 

		

		
		$countryError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["country"])) {
				  $countryError = "Country is required";
			}
			else {
				echo "Country is: " . $_REQUEST["country"];
			}
		} 
	?>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	Student Id: <br/>
	<textarea type="string" name="Student id" cols="30" rows="1" ></textarea>
	<br />
	<span><?php echo $idError; ?></span><br />

	

	
	Student Name:<br/>
    <textarea type="text" name="name" cols="30" rows="1" ></textarea>
	<br />
	<span><?php echo $nameError; ?></span><br />
	Gender: <br/>
     <input type="checkbox" name="gender"  value="female" required>Male
	 <br/>
	<input type="checkbox" name="gender"  value="male" required>Female
	<br/>
	<span><?php echo $genderError; ?></span><br />
	Student Email: <br/>
	<textarea type="text" name="address" cols="30" rows="1" ></textarea>
	<br />
	<span><?php echo $emailError; ?></span><br />

	
	Address:<br/>
	<textarea name="address" cols="50" rows="2" ></textarea>
	<br />

	

	

	
	Street Address:<br/>
	<textarea  name="streeraddress" cols="50" rows="2" ></textarea>
	<br />
	 Address Line 2:<br/>
	<textarea  name="addressline2" cols="30" rows="2" ></textarea>
	<br />

	
	City:<br/>
    <textarea type="text" name="City" cols="30" rows="1" ></textarea>
	<br />
	State:<br/>
    <textarea type="text" name="State" cols="30" rows="1" ></textarea>
	<br />
	Zip/Postal Code:<br/>
    <textarea type="number" name="Zip" cols="30" rows="1" ></textarea>
	<br />
    Country:<select><br/>
				
				<option name="country" value="Bangladesh" >Bangladesh</option>
				<option name="country" value="Canada" >Canada</option>
				<option name="country" value="London" >London</option>
			</select><br/>

	
	<br /><br />
	<input type="submit">
	</form>
</body>
</html>