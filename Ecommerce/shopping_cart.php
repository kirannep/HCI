<?php
  session_start();//set the session

  if(isset($_POST['product_in_cart']))//Checks if 'product_in_cart' variable is set and not null,takes parameters sent by user by post method
  {
	  if(isset($_SESSION['price'])){//sets the session variable
	echo count($_SESSION['price']);//counts the number of data stored
	}
	exit();
  }

  if(isset($_POST['item_src']))//Checks if 'item_src' variable is set and not null,takes parameters sent by user by post method
  {
    $_SESSION['name'][]=$_POST['item_name'];//session variable 'name' stores the data sent to 'item_name'from post method 
    $_SESSION['price'][]=$_POST['item_price'];
    $_SESSION['src'][]=$_POST['item_src'];
    echo count($_SESSION['price']);
    exit();
  }

  if(isset($_POST['display_cart']))//Checks if 'display_cart' variable is set and not null,takes parameters sent by user by post method
  {
		if (isset($_SESSION['name'])){
		  $total_cost="";//declaring total variable
			for($i=0;$i<count($_SESSION['name']);$i++)//In this for loop,the items are displayed with it's name, price and image which are stored in session variables
			{
			 
				echo "<div class='cart_items '>";
				echo		"<div class= 'row box' id = 'remove_item' >";
				echo			"<div class='col-md-3 box'>";
				echo				"<img src ='".$_SESSION['src'][$i]."'>";
				echo			"</div>";
				echo			"<div class='col-md-3 box'>";
				echo				"<p>".$_SESSION['name'][$i]."</p>";
				echo			"</div>";
				echo			"<div class='col-md-2 box'>";
				echo				"<p>£".$_SESSION['price'][$i]."</p>";
				echo			"</div>";
				echo			"<div class='col-md-2 box'>";
				echo			"<button onclick='remove()'>Remove</button>";
				
				echo			"</div>";
				echo			"<div class='col-md-2 box'>
								
								</div>";
				$total_cost = $_SESSION['price'][$i]+$total_cost;//Adds the cost of items and gieves total cost
				echo		"</div> <br>";
				echo		"<div class='row'>";
				echo		"</div>";

				echo "</div>";
			
			}
				echo			"Total Cost: £".$total_cost;//displays the total cost
				echo "<br/>";
				echo			"<button>Check Out</button><br/>";
				echo			"<button onclick='clear()'>Clear all</button>";
    exit();	
	}
  }
  
  if(isset($_POST['del'])){
	  $name=$_POST['item_name'];
	
	  unset($_SESSION['src'][$name]);
	  unset($_SESSION['price']);
	  
  }
  
 if(isset($_POST['clear'])){
	 $_SESSION=array();
	session_desrtoy();
	header("Location:index.php");
}
 
?>
