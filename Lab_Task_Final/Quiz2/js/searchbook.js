
function searchbook()
{
	var search_input = document.getElementById('book_search').value.toUpperCase();
	var table = document.getElementById('bookstable');
	var tr = table.getElementsByTagName('tr');
	for(var i=0; i<tr.length; i++)
	{
		var td = tr[i].getElementsByTagName('td')[1];
		if (td) 
		{
			var textvalue = td.textContent || td.innerHTML;
			if (textvalue.toUpperCase().indexOf(search_input) > -1) 
			{
				tr[i].style.display = "";
			}
			else
			{
				tr[i].style.display = "none";
			}
		}
	}
	if(book_search.value==""){
        document.getElementById("search_result").innerHTML="";
        return;
    }
	http=new XMLHttpRequest();
	var search_word=document.getElementById("book_search").value;
	http.onreadystatechange=function()
	{
		if (http.readyState==4 && http.status==200) 
		{
			//alert("bulshit");
			document.getElementById("search_result").innerHTML=http.responseText;
		}
	}
	http.open("GET","Search.php?name="+search_word,true);
	http.send();
}