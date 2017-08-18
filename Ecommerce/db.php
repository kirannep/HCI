<?php
	$conn = mysqli_connect("localhost","root","","phone");//connection is made to the server localhost and database 'phone'
	if (!$conn){//if connection is unsuccessful will display message with error.
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$value =$_POST['value'];//gets the value sent from display.js as post method
	if ($value == 1){//If the value is 1, it will query the name,img(image) and price from product table whose price is less than 300
	$sql= "SELECT name,img,price FROM product WHERE price<300";
			$result=mysqli_query($conn,$sql);//executes the query
			while ($row = mysqli_fetch_assoc($result)){//fetches the data from the table and stores in $row variable
				
				/*Prints out below lines in html format in index.php as the response is sent back to display.js and it displays the list of phones
					in the webpage*/
				echo 	"<div class = 'col-sm-3 checkbox'>";
				echo "<p><img src='images/".$row['img']."'/></p>";
				echo		"<h3>".$row['name']."</h3>";
				echo		"<h4>Price : £".$row['price']."</h4>";
				echo 	"</div>";
			}	
	}
	
	elseif ($value == 2){
	$sql= "SELECT name,img,price FROM product WHERE price BETWEEN 300 AND 400";
			$result=mysqli_query($conn,$sql);
			while ($row = mysqli_fetch_assoc($result)){
				echo 	"<div class = 'col-sm-3 checkbox'>";
				echo "<p><img src='images/".$row['img']."'/></p>";
				echo		"<h3>".$row['name']."</h3>";
				echo		"<h4>Price : £".$row['price']."</h4>";
				echo 	"</div>";
			}	
	}
	
	elseif($value == 3){
	$sql= "SELECT name,img,price FROM product WHERE price BETWEEN 400 AND 500";
			$result=mysqli_query($conn,$sql);
			while ($row = mysqli_fetch_assoc($result)){
				echo 	"<div class = 'col-sm-3 checkbox'>";
				echo "<p><img src='images/".$row['img']."'/></p>";
				echo		"<h3>".$row['name']."</h3>";
				echo		"<h4>Price : £".$row['price']."</h4>";
				echo 	"</div>";
			}		
	}
	
	elseif ($value == 4){
	$sql= "SELECT name,img,price FROM product WHERE price BETWEEN 500 AND 600";
			$result=mysqli_query($conn,$sql);
			while ($row = mysqli_fetch_assoc($result)){
				echo 	"<div class = 'col-sm-3 checkbox'>";
				echo "<p><img src='images/".$row['img']."'/></p>";
				echo		"<h3>".$row['name']."</h3>";
				echo		"<h4>Price : £".$row['price']."</h4>";
				echo 	"</div>";
			}			
	}
	
	else{
		$sql= "SELECT name,img,price FROM product WHERE price BETWEEN 600 AND 700";
			$result=mysqli_query($conn,$sql);
			while ($row = mysqli_fetch_assoc($result)){
				echo 	"<div class = 'col-sm-3 checkbox'>";
				echo "<p><img src='images/".$row['img']."'/></p>";
				echo		"<h3>".$row['name']."</h3>";
				echo		"<h4>Price : £".$row['price']."</h4>";
				echo 	"</div>";
			}		
	}
	
?>