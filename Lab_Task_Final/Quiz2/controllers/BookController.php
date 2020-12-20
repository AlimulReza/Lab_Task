<?php
  
    require_once 'models/db_connect.php';
	
    function getAllBooks(){
        $query="SELECT * FROM books";
        return get($query);
    }
    function booksearch($name){
        $query="SELECT id,name FROM books WHERE name LIKE '%$name%'";
        return get($query);
    }	
	function getBookInfo($id){
        $query="SELECT * FROM books WHERE id=".$id;
        return get($query);
    }
?>