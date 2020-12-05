<?php
     require_once '../models/db_connect.php';
	 
	$cname="";
    $err_name="";
    $hasError=false;
    if(isset($_POST["add_category"])){
        if(empty($_POST["cname"])){
            $err_name="Category Name Required";
            $hasError=true;
        }
        else{
            $cname=htmlspecialchars($_POST["cname"]);
        }
        if(!$hasError){
            addCategory($cname);
            echo "Added Successfully!";
        }
    }
    /*if(isset($_POST["edit_cat_button"])){
        if(empty($_POST["name"])){
            $err_name="Category Name Required";
            $hasError=true;
        }
        else{
            $name=htmlspecialchars($_POST["name"]);
        }
        if(!$hasError){
            updateCategory($_GET["category_id"]);
            echo "Updated Successfully!";
        }
    }*/
	function addCategory($cname){
        $query="INSERT INTO categories VALUES('','$cname')";
        execute($query);
    }
	function getAllCategories()
	{
		$query = "SELECT * FROM categories";
		$result = get($query);
		return $result;
	}
?>