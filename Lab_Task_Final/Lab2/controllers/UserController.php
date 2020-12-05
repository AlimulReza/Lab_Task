<?php
    require_once '../models/db_connect.php';
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$email="";
	$err_email="";
	$password="";
	$err_password="";
	
	$hasError=false;
	if(isset($_POST["sign_up"])){
		if(empty($_POST["name"]))
		{	
			$err_name="*Name Required";
			$hasError=true;
	    }
		else
		{
			$name= $_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_username="*Username Required";
			$hasError=true;
		}
		elseif((strlen($_POST["username"])<6)){
            $err_username="*Username must contain at least 6 characters";
            $hasError=true;
        }
		elseif(strpos($_POST["username"]," "))
		{
			$err_username = "*No space is allowed";
			$hasError=true;
		}
		else{
		    $username=htmlspecialchars($_POST["username"]);
		}
		if(empty($_POST["email"])){
            $err_email="*Email Required";
            $hasError=true;
        }
        elseif(strpos($_POST["email"],"@") && strpos($_POST["email"],".")){
            if(strpos($_POST["email"],"@") < strpos($_POST["email"],".")){
                $email=htmlspecialchars($_POST["email"]);
            }
            else{
                $err_email="'@' Must be before '.'.";
                $hasError=true;
            }
        }
        else{
            $err_email="Email must contain '@' and '.'";
            $hasError=true;
        }
		if(!empty($_POST["password"]))
		{
			if(strlen($_POST["password"]) >= 8)
			{
				if(!(strtolower($_POST["password"]) == $_POST["password"]) && (!(strtoupper($_POST["password"]) == $_POST["password"])))
				{
					$hasNumber = false;
					$num_arr = array("0","1","2","3","4","5","6","7","8","9");
					$password =htmlspecialchars($_POST["password"]);
					for($i = 0; $i < strlen($password); $i++)
					{
						for($j = 0; $j <10; $j++)
						{
							if($password[$i]== $num_arr[$j])
							{
								$hasNumber = true;
								break;
							}
						}
					}
					if($hasNumber == true)
					{
						if(strpos($_POST["password"], "#") || strpos($_POST["password"], "?"))
						{
							$password = htmlspecialchars($_POST["password"]);
						}
						else{$err_password = "*atleast one special character # or ? is required";}
					}
					else{$err_password = "*atleast one digit is required";}
				}
				else{$err_password = "*upper and lower case character required";}
			}
			else{$err_password = "*minimum password length is 8";}
		}
		else
		{
			$err_password = "*Password Required";
			$hasError=true;
	    }
		if(!$hasError)
		{
			addUser($name,$_POST["username"],$_POST["email"],$_POST["password"]);
			header("Location: login.php");
		}
    }
	//login
	elseif(isset($_POST["login"]))
	{
		if(empty($_POST["username"])){
			$err_username="*Username Required";
			$hasError =true;	
		}
		else{
			$username = htmlspecialchars($_POST["username"]);
        }
        if(empty($_POST["password"])){
			$err_password="*Password Required";
			$hasError =true;	
		}
		else
		{
			$password = htmlspecialchars($_POST["password"]);
        }
		if(!$hasError)
		{
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
	}
	
	function addUser($name, $username, $email, $password)
	{
		$password =md5($password);
		$query = "INSERT INTO users VALUES('$name','$username','$email','$password')";
		execute($query);
	}
	function authenticate($username,$password)
	{
		$password = md5($password);
		$query = "SELECT username FROM users WHERE username='$username' AND password='$password'";
		$result = get($query);
		if(count($result) > 0) return true;
		return false;
	}
?>