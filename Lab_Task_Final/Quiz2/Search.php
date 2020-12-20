<?php
    require_once 'controllers/BookController.php';
    $books=booksearch($_GET['name']);
    if(count($books)>0){
        foreach($books as $book){
			echo "<button onclick=location.href='Book_detail.php?id=".$book["id"]."'>".$book["name"]."</button><br>";
        }
    }
?>