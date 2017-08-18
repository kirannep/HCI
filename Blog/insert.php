<!DOCTYPE html>

<html>
<body>
<?php
	

// Create connection
$conn = mysqli_connect("localhost","root","","blog");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];

$sql = "INSERT INTO comment(name,email,comment) VALUES('$name','$email','$comment')";
if(mysqli_query($conn,$sql)){
	echo " New record created";
}
else{
	echo "Error in creating record" ;
}
header("Location: blog.php");
?>
</body>
</html>