<?php
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	$flag=false;
	if(isset($_POST["login"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError =true;	
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}
		if(empty ($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
        }
		
		if(!$hasError)
		{
			 $susername="root";
			 $servername="localhost";
			 $password="";
			 $db_name="myphp";
			 $conn=mysqli_connect($servername,$susername,$password,$db_name);
			 if(!$conn)
			 {
				die("Connection failed:" . mysqli_connect_error());
			 }
			 $passd=md5($pass);
			 $q="SELECT * FROM user WHERE username='$uname' AND password='$passd'";
			 $result=mysqli_query($conn,$q);
			 if(mysqli_num_rows($result)>0)
			 {
				echo '<table border="1" style="border-collapse:collapse;">';
				echo "<tr>";
				echo "<th> Name</td>";
				echo "<th> Username</td>";
				echo "<th> Email</td>";
				echo "</tr>";
				
				while($row=mysqli_fetch_assoc($result)){
					echo "<tr>";
					    echo "<td>".$row["name"]."</td>";
						echo "<td>".$row["username"]."</td>";
						echo "<td>".$row["email"]."</td>";
				     echo "</tr>";
						
				}
				echo "</table>";
			 }
			
		}
	}
	
?>