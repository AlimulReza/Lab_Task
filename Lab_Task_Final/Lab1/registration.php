<?php include_once "php/registration_validation.php"; ?>
<!DOCTYPE html>
<html>
	<head>
	    <title>Registration</title>
	</head>
	<body>
			<form action="" method="post">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
				    <tr>
						<!--<td>&nbsp;</td>-->
						<td align="center"><font size="6">Registration</font></td>
					</tr>
				</table>
				<br>
				<br>
			    <table border="0" width="40%" cellpadding="10" cellspacing="0" align="center">
				  <tr>
					  <td align="center" style="color:red;">* Fields are required</td>
				  </tr>
				  <tr>
					  <td><font size="4">Name:</font></td>
					  <td><input type="text" value="<?php echo $name?>" name="name"></td>
					  <td><span style="color:red;">*<?php echo $err_name;?></span></td>
				  </tr>
				  <tr>
					  <td><font size="4">Username:</font></td>
					  <td><input type="text" value="<?php echo $username?>" name="username"></td>
					  <td><span style="color:red;">*<?php echo $err_username;?></span></td>
				  </tr>
				  <tr>
					  <td><font size="4">Password:</font></td>
					  <td><input type="password" value="<?php echo $pass?>" name="pass"></td>
					  <td><span style="color:red;">*<?php echo $err_pass;?></span></td>
				  </tr>
				  <tr>
					  <td><font size="4">E-mail:</font></td>
					  <td><input type="text" value="<?php echo $email?>" name="email"></td>
					  <td><span style="color:red;">*<?php echo $err_email;?></span></td>
				  </tr>
				  <tr>
					  <td colspan="2" align="center">
						  <button type="submit" name="register"><font size="4">Submit</font></button>
					  </td>		
                  </tr>				  
			    </table>

			</form>
	</body>
</html>