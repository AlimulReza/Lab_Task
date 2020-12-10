<?php
     include 'header.php';
	 require_once 'controllers/StudentController.php';
     $students=getAllStudents();
?>

<html>
    <head>
	    <title>Student</title>
	</head>
    <body>
        <center>
		<br>
	    <br>
         <table border="1">
            <tr>
                <td>Id</td>
                <td>Name</td>
				<td>DOB</td>
				<td>Credit</td>
				<td>CGPA</td>
            </tr>
            <?php
                foreach($students as $student)
				{
                    echo "<tr>";
                    echo "<td>".$student["sid"]."</td>";
                    echo "<td>".$student["name"]."</td>";
					echo "<td>".$student["dob"]."</td>";
					echo "<td>".$student["credit"]."</td>";
					echo "<td>".$student["cgpa"]."</td>";
                    echo "</tr>";
                }
            ?>
         </table>
        </center>
    </body>
</html>