<?php 
    $name="";
    $err_name="";
	$username="";
	$err_username="";
    $pass="";
    $err_pass="";
    $cpass="";
    $err_cpass="";
    $email="";
    $err_email="";
    $contact="";
    $err_contact="";
    $gender="";
    $err_gender="";
	$city="";
	$err_city="";

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
			$hass_err=true;
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

		if($_POST["pass"]!=htmlspecialchars($_POST["cpass"]))
		{
			$err_cpass = "Password not matched";
		}
       if(empty($_POST["email"]))
		{
			$err_email = "Email Required";
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
        if(empty($_POST["contact"]))
		{
			$err_contact = "Contact no. Required";
			$has_err=true;
		}
		else if(!is_numeric($_POST["contact"]))
		{
			$err_contact = "Numeric charecter required";
			$has_err=true;
		}
		else{ $contact = htmlspecialchars($_POST["contact"]);
		}
        if(!isset($_POST["gender"])){
			$err_gender="Gender Required.";
			$has_err=true;
        }
        else{
            $gender=htmlspecialchars($_POST["gender"]);
        }
		if(isset($_POST["city"])){
            $city=htmlspecialchars($_POST["city"]);
        }
        else{
            $err_city="Please Select city";
            $has_err=true;
        }
	    if(!$has_err){
			$users = simplexml_load_file("admins.xml");
			
			$user = $users->addChild("user");
			$user->addChild("name",$name);
			$user->addChild("username",$username);
			$user->addChild("password",$pass);
			$user->addChild("gender",$gender);
			$user->addChild("email",$email);
			$user->addChild("contact",$contact);
			$user->addChild("city",$city);
			$user->addChild("type","user");
			//echo "<pre>";
			//print_r($users);
			//echo "</pre>";
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());
			
			
			$file = fopen("admins.xml","w");
			fwrite($file,$xml->saveXML());
		}
	}
	
?>