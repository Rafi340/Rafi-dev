<!DOCTYPE html>
<html>
<title>Login</title>
<body>

<h1>Login</h1>
<form action="../controller/action_login.php" method="POST" >
	<label for="username" >Username</label>
	<input type="text" name="username" id="username" Required >
	<br>
	<br>
	<label for="psw" >Password</label>
	<input type="password" name="psw" id="psw" Required >
	<br>
	<br>
	<input type="submit" name="formLogin"  value="Login">
</form>
</body>
</html>