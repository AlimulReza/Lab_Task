<?php
   require_once 'controllers/UserController.php';
?>
<html>
	<head><title>Login</title></head>
	<body>
			<form action="" method="post" onsubmit="return login_validation()">
			 <center>
			    <h1>Login</h1>
				<table>
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
						<td colspan="2" align="center">
							<input type="submit" name="login" value="Login">
						</td>
					</tr>
				</table>
			 </center>
			</form>
			<script src="js/validation.js"></script>
	</body>
</html>