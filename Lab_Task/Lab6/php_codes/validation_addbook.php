<?php 
    $bookname="";
    $err_bookname="";
	$category="";
	$err_category="";
	$description="";
	$err_description="";
	$publisher="";
	$err_publisher="";
	$edition="";
	$err_edition="";
	$isbn="";
	$err_isbn="";
	$pages="";
	$err_pages="";
	$price="";
	$err_price="";
	$has_err=false;

    $has_err=false;
    if(isset($_POST["add"])){
		
        if(empty($_POST["bookname"])){
            $err_bookname="Book Name Required";
            $has_err=true;
        }
        else{
            $bookname=htmlspecialchars($_POST["bookname"]);
        }
		if(empty($_POST["category"])){
            $err_category="Category Required";
            $has_err=true;
        }
        else{
            $category=htmlspecialchars($_POST["category"]);
        }
		if(empty($_POST["description"])){
			$err_description="Description Required";
			$has_err = true;
		}
		else{
			$description = htmlspecialchars($_POST["description"]);
		}
		if(empty($_POST["publisher"])){
			$err_publisher="Publisher Required";
			$has_err = true;
		}
		else{
			$publisher = htmlspecialchars($_POST["publisher"]);
		}
		if(empty($_POST["edition"])){
			$err_edition="Edition Required";
			$has_err = true;
		}
		else{
			$edition = htmlspecialchars($_POST["edition"]);
		}
		if(empty($_POST["isbn"])){
			$err_isbn="ISBN Required";
			$has_err = true;
		}
		else{
			$isbn = htmlspecialchars($_POST["isbn"]);
		}
		if(empty($_POST["pages"])){
			$err_pages="Pages Required";
			$has_err = true;
		}
		else{
			$pages = htmlspecialchars($_POST["pages"]);
		}
		if(empty($_POST["price"])){
			$err_price="Price Required";
			$has_err = true;
		}
		else{
			$price = htmlspecialchars($_POST["price"]);
		}
		
        
	    if(!$has_err){
			$books = simplexml_load_file("books.xml");
			$a= $books->book;
			$book = $books->addChild("book");
			$book->addChild("sr_no",count($a));
			$book->addChild("Name",$bookname);
			$book->addChild("Publisher",$publisher);
			$book->addChild("ISBN",$isbn);
			$book->addChild("PRICE",$price);
			$book->addChild("IMAGE","resources/book_default.png");
			$book->addChild("DELETe","resources/drop.png");
			//echo "<pre>";
			//print_r($books);
			//echo "</pre>";
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($books->asXML());
			
			
			$file = fopen("books.xml","w");
			fwrite($file,$xml->saveXML());
			header("Location: dashboard.php");
		}
	}
	
?>