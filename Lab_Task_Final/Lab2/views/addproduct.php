<?php 
  include 'admin_header.php';
  require_once '../controllers/ProductController.php';
  require_once '../controllers/CategoriesController.php';
  
  $categories=getAllCategories();
?>
<!--addproduct starts -->
<div class="center">
	<form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text" name="name" class="form-control">
			<span style="color:red"><?php echo $err_name;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Category:</h4> 
			<select value="<?php echo $category?>" name="category" class="form-control">
				<option disabled selected>Choose</option>

			</select>
			<span style="color:red"><?php echo $err_category;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Price:</h4> 
			<input type="text" name="price" class="form-control">
			<span style="color:red"><?php echo $err_price;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Quantity:</h4> 
			<input type="text" name="quantity" class="form-control">
			<span style="color:red"><?php echo $err_quantity;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Description:</h4> 
			<textarea type="text" name="description" class="form-control"></textarea>
			<span style="color:red"><?php echo $err_description;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Image</h4> 
			<input type="file" name="image" class="form-control">
			<span style="color:red"><?php echo $err_image;?></span>
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" name="add_product" value="Add Product" class="form-control">
		</div>
	</form>
</div>
<?php include 'admin_footer.php';?>
