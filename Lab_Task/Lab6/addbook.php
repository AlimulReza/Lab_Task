<?php include_once "php_codes/validation_addbook.php" ;?>
<html>
	<head></head>
	<body>
	<center>
	    <h1> Add Book </h1>
			<form action="" method="post">
				<table>
				    <tr>
					      <td>Book Name:</td>
					</tr>
					<tr>
						
						<td><input type="text" value="<?php echo $bookname?>" name="bookname"></td>
						<td><span style="color:red;"><?php echo $err_bookname;?></span>

						</td>
					</tr>
					<tr>
					     <td>Category:</td>
					</tr>
					<tr>
						
						<td>
							<select value="<?php echo $category?>" name="category">
								<option  selected>Architecture</option>
								<option>Sports</option>
								<option>Astrology</option>
								<option>Business</option>						
							</select>
						</td>
						<td><span style="color:red;"><?php echo $err_category;?></span>
					</tr>
					<tr>
					     <td>Description:</td>
					</tr>
					<tr>
						
						<td>
							<textarea value="<?php echo $description?>" name="description"></textarea>
							
						</td>
						<td><span style="color:red;"><?php echo $err_description;?></span>
					</tr>
					<tr>
					      <td>Publisher:</td>
					</tr>
					<tr>
						
						<td><input type="text" value="<?php echo $publisher?>" name="publisher"></td>

						<td><span style="color:red;"><?php echo $err_publisher;?></span>
					</tr>
					<tr>
					      <td>Edition:</td>
					</tr>
					<tr>
						
						<td><input type="text" value="<?php echo $edition?>" name="edition"></td>

						<td><span style="color:red;"><?php echo $err_edition;?></span>
					</tr>
					<tr>
					      <td>ISBN:</td>
					</tr>
					<tr>
						
						<td><input type="text" value="<?php echo $isbn?>" name="isbn"></td>
						<td><span style="color:red;"><?php echo $err_isbn;?></span>
					</tr>
					<tr>
					      <td>PAGES:</td>
					</tr>
					<tr>
						
						<td><input type="text" value="<?php echo $pages?>" name="pages"></td>
						<td><span style="color:red;"><?php echo $err_pages;?></span>
					</tr>
					<tr>
					      <td>PRICE:</td>
					</tr>
					<tr>
						
						<td><input type="text" value="<?php echo $price?>"name="price"></td>
						
						<td><span style="color:red;"><?php echo $err_price;?></span>
					</tr>
					
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="add" value="Add">
						</td>
					</tr>
				</table>
			</form>
			</center>
	</body>
</html>