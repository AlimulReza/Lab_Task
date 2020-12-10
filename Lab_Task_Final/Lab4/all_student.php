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
				<td>Department</td>
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
					echo "<td>".$student["dname"]."</td>";
					echo "<td>".$student["credit"]."</td>";
					echo "<td>".$student["cgpa"]."</td>";
					echo "<td><a href='edit_student.php?student_id=".$student["sid"]."'>Edit</a></td>";
					echo "<td><a href='delete_student.php?student_id=".$student["sid"]."'>Delete</a></td>";
                    echo "</tr>";
                }
            ?>
         </table>
        </center>
    </body>
</html>