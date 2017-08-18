<?php
	

// Create connection
$conn = mysqli_connect("localhost","root","","blog");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully"."<br>";
echo "\r\n";

$prepend = "<span class='php_style'>";
$append  = "</span>";
$sql = "SELECT id, name,comment FROM comment ORDER BY ID DESC ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br> " . $row["comment"]. "<br>" . $row["id"]. " " .$prepend.$row["name"].$append. "<br>";
    }
} else {
    echo "0 results";
}

?>
