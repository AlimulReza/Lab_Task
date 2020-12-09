<?php
   require_once 'controllers/UserController.php';
?>
<html>
	<head><title>Registration</title></head>
	<body>
			<form  method="post" onsubmit="return validate()" action="">
			 <center>
			   <h1>Registration </h1>
				<table>
					<tr>
						<td>Name:</td>
						<td><input type="text" id="name" name="name"></td>
						<td><span id="err_name"></span></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" id="username" name="username"></td>
						<td><span id="err_username"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" id="password" name="password"></td>
						<td><span id="err_password"></td>
					</tr>
					<tr>
						<td>E-mail:</td>
						<td><input type="text" id="email" name="email"></td>
						<td><span id="err_email"></td>
					</tr>
					<tr>
						<td>Phone:</td>
						<td><input type="text" id="phone" name="phone"></td>
						<td><span id="err_phone"></td>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="register" value="register">
						</td>
					</tr>
				</table>
			 </center>
			</form>
			<script src="js/registration_validation.js"></script>
	</body>
</html>