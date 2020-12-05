<?php
   
    require_once '../models/db_connect.php';
	
	$name="";
    $err_name="";
    $category="";
    $err_category="";
    $price="";
    $err_price="";
    $quantity="";
    $err_quantity="";
    $description="";
    $err_description="";
    $image="";
    $err_image="";
    $hasError=false;

    if(isset($_POST["add_product"])){
        if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError =true;	
        }
        else{
            $name=htmlspecialchars($_POST["name"]);
        }
        /*if(empty($_POST["category"])){
            $err_category="Category Required";
            $hasError=true;
        }
        else{
            $category=$_POST["category"];
        }*/
        if(empty($_POST["quantity"])){
            $err_quantity="Quantity Required";
            $hasError=true;
        }
        else{
            $quantity=$_POST["quantity"];
        }
        if(empty($_POST["price"])){
            $err_price="Price Required";
            $hasError=true;
        }
        else{
            $price=$_POST["price"];
        }
        if(empty($_POST["description"])){
            $err_description="Description Required";
            $hasError=true;
        }
        else{
            $description=htmlspecialchars($_POST["description"]);
        }
        if(empty($_FILES["image"]["name"])){
            $err_image="Image Required";
            $hasError=true;
        }
        else{
            $fileType=strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
            $image="../storage/product_images/".uniqid().".$fileType";
        }
        if(!$hasError){
			move_uploaded_file($_FILES["image"]["tmp_name"],$image);
            addProduct($name,$price,$quantity,$description,$image,1);
            echo "Added Successfully!";
        }
    }
	function addProduct($name,$price,$quantity,$description,$image,$category_id)
	{
		$query = "INSERT INTO products VALUES(NULL,'$name','$price','$quantity','$description','$image','$category_id')";
		execute($query);
	}

?>