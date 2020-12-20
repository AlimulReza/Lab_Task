<?php
    require_once 'controllers/BookController.php';
    $books=getAllBooks();
?>

<html>
	<head><title>All Books</title></head>
	<body>
	    <center>
		   <br>
		   <br>
		   <br>
		   <br>
		   <input type="text" name="book_search" id="book_search" placeholder="Search........" onkeyup="searchbook()">
		   <br>
		   <br>
		   <div id="search_result"></div>
		   <br>
		   <br>
		   <br>
		   <br>
		   <table border="1" id="bookstable">
		    <thead>
			    <tr>
					  <th>Id</th>
					  <th>Name</th>
					  <th>Author</th>
					  <th>Edition</th>
					  <th>Image</th>
			    </tr>
			</thead>
			<tbody>
				<?php
					foreach($books as $book)
					{
						echo "<tr>";
						echo "<td>".$book["id"]."</td>";
						echo "<td>".$book["name"]."</td>";
						echo "<td>".$book["author"]."</td>";
						echo "<td>".$book["edition"]."</td>";
						echo "<td><img src='".$book["bookimage"]."' width='40px' height='40px'></td>";
						echo "</tr>";
					}
				?>
		    </tbody>
         </table>
		</center>
	</body>
	<script src="js/searchbook.js"></script>
</html>