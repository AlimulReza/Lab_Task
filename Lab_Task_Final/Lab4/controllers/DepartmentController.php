<?php
   require_once 'models/db_connect.php';
 
    $dname="";
	$err_dname="";
	$hasError=false;
	
	if(isset($_POST["add_department"])){
		if(empty($_POST["dname"]))
		{	
			$err_dname="*Name Required";
			$hasError=true;
	    }
		else
		{
			$dname= $_POST["dname"];
		}
		if(!$hasError)
		{
			addDepartment($dname);
			header("Location: dashboard.php");
		}	
	}
    function addDepartment($dname)
	{
		$query = "INSERT INTO department VALUES(NULL,'$dname')";
		execute($query);
	}
	function getAllDepartments()
	{
		$query="SELECT * FROM department";
        return get($query);
	}
 
 
?>