<?php
  
    require_once 'models/db_connect.php';
	
	if(isset($_POST["login"])){
        $username = htmlspecialchars($_POST["username"]);
        $password = md5(htmlspecialchars($_POST["password"]));
        $result = authenticate($username,$password);
			if($result)
			{
				header("Location: dashboard.php");
			}
			else
			{
				echo "Invalid Username or Password";
			}
    }
	
    function authenticate($username,$password)
	{
		//$password = md5($password);
		$query = "SELECT username FROM admin WHERE username='$username' AND password='$password'";
		$result = get($query);
		if(count($result) > 0) return true;
		return false;
	}	
?>