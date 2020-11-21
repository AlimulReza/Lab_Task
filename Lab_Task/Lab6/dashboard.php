<html>
	<head></head>
	<body>
		<table border="1">
			<tr>
				<td> <a href="addbook.php">Add New Book</a> </td>
			</tr>
			<tr>
				<td>SR.NO</td>
				<td>NAME</td>
				<td>PUBLISHER</td>
				<td>ISBN</td>
				<td>PRICE</td>
				<td>IMAGE</td>
				<td>DELETE</td>
			</tr>
			<?php 
				$books = simplexml_load_file("books.xml");
			
				$data = $books->book;
				$bookname="";
				$publisher="";
				$isbn="";
				$price="";
				$image="";
				$serial="";
				$delete="";
				//echo $data[1]->username;
				$i=0;
				for( ;$i<count($data);$i++)
				{
					$bookname=$data[$i]->Name;
					$publisher=$data[$i]->Publisher;
					$isbn=$data[$i]->ISBN;
					$price=$data[$i]->PRICE;
					$image=$data[$i]->IMAGE;
					$serial=$data[$i]->sr_no;
					$delete=$data[$i]->DELETe;
		
					echo "<tr>
					<td>$serial</td>
					<td>$bookname</td>
					<td>$publisher</td>
					<td>$isbn</td>
					<td>$price</td>
					<td><img src='$image' width='100px' height='100px'></td>
					<td><img src='$delete' width='70px' height='70px'></td>
					</tr>";		
				}
			?>
		</table>
	</body>
</html>
