<?php
	$conn = mysqli_connect("localhost","root","","post");
	
	if(!$conn){
		die("Connection failed!!".mysqli_connect_error());
	}
	
		echo "connected to database successfully!!";
	
	
	$title = $_POST["title"];
	$article = $_POST["article"];
	
	$sql = "INSERT into article(title,article) VALUES ('$title','$article')";
	if (mysqli_query($conn,$sql)){
		echo " New record created!!";
	}
	else{
		echo "Error in creating record" ;	
	}

?>