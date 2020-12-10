<?php
   include 'header.php';
   require_once 'controllers/DepartmentController.php';
?>
<html>
	<head><title>Add Department</title></head>
	<body>
			<form  method="post" action="">
			 <center>
			 <br>
			 <br>
				<table>
					<tr>
						<td>Name:</td>
						<td><input type="text" value="<?php echo $dname?>" name="dname"></td>
						<td><span style="color:red"><?php echo $err_dname;?></span></td>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="add_department" value="add">
						</td>
					</tr>
				</table>
			 </center>
			</form>
	</body>
</html>