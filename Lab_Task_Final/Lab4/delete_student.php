<?php

    require_once 'controllers/StudentController.php';
	
    deleteStudent($_GET["student_id"]);
    echo  "<script type='text/javascript'>";
    echo "window.close();";
    echo "</script>";
	header("Location: all_student.php");
?>