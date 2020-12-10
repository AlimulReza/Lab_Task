<?php
    include 'header.php';
    require_once 'controllers/DepartmentController.php';
    $departments=getAllDepartments();
?>
<html>
    <head>
	    <title>Department</title>
	</head>
    <body>
        <center>
		<br>
	    <br>
         <table border="1">
            <tr>
                <td>Id</td>
                <td>Department Name</td>
            </tr>
            <?php
                foreach($departments as $department)
				{
                    echo "<tr>";
                    echo "<td>".$department["did"]."</td>";
                    echo "<td>".$department["dname"]."</td>";
                    echo "</tr>";
                }
            ?>
         </table>
        </center>
    </body>
</html>