<?php
	$conn = mysqli_connect("localhost","root","","post");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully"."<br>";
	echo "\r\n";
	$prepend = "<span class='admin_php_style'>";
	$append  = "</span>";
	
	$sql = "SELECT id,title,article FROM article ORDER BY ID DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
		
	
	if (mysqli_num_rows($result) > 0) {
	
	
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<br> " . $prepend.$row["title"].$append. "<br>".$row["article"]."<br>";
		}
	}
	else {
		echo "0 results";
	}
?>