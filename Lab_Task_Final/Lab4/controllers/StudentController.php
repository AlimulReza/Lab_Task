<?php
    require_once 'models/db_connect.php';
	  
	  
	if(isset($_POST["register"])){
		$name=htmlspecialchars($_POST["name"]);
		$dob = htmlspecialchars($_POST["dob"]);
		$department_id = htmlspecialchars($_POST["department_id"]);
		$credit =htmlspecialchars($_POST["credit"]);
		$cgpa =htmlspecialchars($_POST["cgpa"]);
		addStudent($name,$dob,$credit,$cgpa,$department_id);
		header("Location: dashboard.php");
    }
	if(isset($_POST["update"])){
        $name=htmlspecialchars($_POST["name"]);
        $dob=$_POST["dob"];
        $credit=$_POST["credit"];
        $cgpa=$_POST["cgpa"];
        $department_id=$_POST["department_id"];
        editStudent($name,$dob,$credit,$cgpa,$department_id,$_GET["student_id"]);
		header("Location: all_student.php");
    }
    function addStudent($name,$dob,$credit,$cgpa,$department_id)
	{
		$query = "INSERT INTO student VALUES(NULL,'$name','$dob','$credit','$cgpa','$department_id')";
		execute($query);
	}
	function getAllStudents()
	{
		$query="SELECT s.*,d.dname from student s left join department d on s.dept_id = d.did";
        return get($query);
	}
	function getStudent($student_id){
        $query="SELECT s.*,d.dname from student s left join department d on s.dept_id = d.did WHERE s.sid='$student_id'";
        return get($query);
    }
	function editStudent($name,$dob,$credit,$cgpa,$department_id,$sid){
        $query="UPDATE student SET name='$name',dob='$dob',credit='$credit',cgpa='$cgpa',dept_id='$department_id' WHERE sid='$sid'";
        execute($query);
    }
	function deleteStudent($sid){
        $query="DELETE FROM student WHERE sid='$sid'";
        execute($query);
    }
?>