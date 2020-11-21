<?php include_once "php_codes/validation_registration.php" ;?>
<html>
	<head></head>
	<body>
	<h1> Welcome to Registration </h1>
			<form action="" method="post">
				<table>
					<tr>
						<td>Full Name:</td>
						<td><input type="text" value="<?php echo $name?>" name="name"></td>
						<td><span style="color:red;"><?php echo $err_name;?></span>
						</td>
					</tr>
					<tr>
						<td>User Name:</td>
						<td><input type="text" value="<?php echo $username?>" name="username"></td>
						<td><span style="color:red;"><?php echo $err_username;?></span></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" value="<?php echo $pass?>" name="pass"></td>
						<td><span style="color:red;"><?php echo $err_pass;?></span>
						</td>
					</tr>
					<tr>
						<td>Confirm Password:</td>
						<td><input type="password" value="<?php echo $cpass?>" name="cpass"></td>
						<td><span style="color:red;"><?php echo $err_cpass;?></span>
						</td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td>
							<input type="radio" value="Male" name="gender"> Male
							<input type="radio" value="Female" name="gender"> Female
						</td>
						<td><span style="color:red;"><?php echo $err_gender;?></span>
				    </tr>
					<tr>
						<td>E-mail Address:</td>
						<td><input type="text" value="<?php echo $email?>" name="email"></td>
						<td><span style="color:red;"><?php echo $err_email;?></span>
						</td>
					</tr>
					<tr>
						<td>Contact No.:</td>
						<td><input type="text" value="<?php echo $contact?>" name="contact"></td>
						<td><span style="color:red;"><?php echo $err_contact;?></span>
						</td>
					</tr>
					<tr>
						<td>City</td>
						<td>
							<select name="city">
								<option disabled selected>Select a city</option>
								<option>Dhaka</option>
								<option>Chittagong</option>
								<option>Rangpur</option>						
							</select>
						</td>
						<td><span style="color:red;"><?php echo $err_city;?></span>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="register" value="register">
						</td>
					</tr>
				</table>
			</form>
	</body>
</html>