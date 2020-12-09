<?php
  
  require_once 'models/db_connect.php';
	
	
    if(isset($_POST["register"])){
        $name=htmlspecialchars($_POST["name"]);
        $email=htmlspecialchars($_POST["email"]);
        $phone=htmlspecialchars($_POST["phone"]);
        $username = htmlspecialchars($_POST["username"]);
        $password = md5(htmlspecialchars($_POST["password"]));
        addUser($name,$username,$email,$password,$phone);
        header("Location: index.php");
    }
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
	function addUser($name, $username, $email, $password,$phone)
	{
		//$password =md5($password);
		$query = "INSERT INTO users VALUES('$name','$username','$password','$email',$phone)";
		execute($query);
	}
    function authenticate($username,$password)
	{
		//$password = md5($password);
		$query = "SELECT username FROM users WHERE username='$username' AND password='$password'";
		$result = get($query);
		if(count($result) > 0) return true;
		return false;
	}
	function getAllUsers(){
        $query="SELECT * FROM users";
        return get($query);
    }
?>