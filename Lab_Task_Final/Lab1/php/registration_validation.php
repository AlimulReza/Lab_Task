<?php	
    $name="";
    $err_name="";
	$username="";
	$err_username="";
    $pass="";
    $err_pass="";
    $email="";
    $err_email="";

    $has_err=false;
	
    if(isset($_POST["register"])){
        if(empty($_POST["name"])){
            $err_name="Name Required";
            $has_err=true;
        }
        else{
            $name=htmlspecialchars($_POST["name"]);
        }

        if(empty($_POST["username"])){
			$err_username="Username Required";
			$has_err=true;
		}
		elseif((strlen($_POST["username"])<6)){
            $err_username="Username must contain at least 6 characters";
            $has_err=true;
        }
		elseif(strpos($_POST["username"]," "))
		{
			$err_username = "No space is allowed";
			$has_err=true;
		}
		else{
		    $username=htmlspecialchars($_POST["username"]);
		}
     
        if(!empty($_POST["pass"]))
		{
			if(strlen($_POST["pass"]) >= 8)
			{
				if(!(strtolower($_POST["pass"]) == $_POST["pass"]) && (!(strtoupper($_POST["pass"]) == $_POST["pass"])))
				{
					$hasNumber = false;
					$num_arr = array("0","1","2","3","4","5","6","7","8","9");
					$password =htmlspecialchars($_POST["pass"]);
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
						if(strpos($_POST["pass"], "#") || strpos($_POST["pass"], "?"))
						{
							$pass = htmlspecialchars($_POST["pass"]);
						}
						else{$err_pass = "*atleast one special character # or ? is required";}
					}
					else{$err_pass = "*atleast one digit is required";}
				}
				else{$err_pass = "*upper and lower case character required";}
			}
			else{$err_pass = "*minimum password length is 8";}
		}
		else{$err_pass = "Password Required";}
        if(empty($_POST["email"]))
		{
			$err_email = "Email Required";
			$has_err=true;
		}
		else if(strpos($_POST["email"],"@"))
		{
			$flag = false;
			$pos = strpos($_POST["email"],"@");
			$str = $_POST["email"];
			for($i = $pos; $i < strlen($str); $i++)
			{
				if($str[$i] == "."){$flag = true;break;}
			}
			if($flag == true){$email = htmlspecialchars($_POST["email"]);}
			else{$err_email = "*invalid email pattern";}
		}
	    if(!$has_err){
			 $susername="root";
			 $servername="localhost";
			 $password="";
			 $db_name="myphp";
			 $passe=md5($pass);
			$conn=mysqli_connect($servername,$susername,$password,$db_name);
			if(!$conn)
			{
				die("Connection failed:" . mysqli_connect_error());
			}
			$q="INSERT INTO user VALUES(null,'$name','$username','$passe','$email')";
            mysqli_query($conn,$q);
			header("Location: login.php");
		}
	}
	
?>