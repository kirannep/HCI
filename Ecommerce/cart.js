
    

    function AddToCart(id)//This function is triggered when user clicks add to cart button which is underneath the image of phones,takes defined id as parameter
    {
	  var x=document.getElementById(id);
	  var img=x.getElementsByTagName("img")[0].src;//stores the image source
	  var name=document.getElementById(id+"_name").value;//stores the name of corresponding id which is passed through parameter
	  var price=document.getElementById(id+"_price").value;//stores price of corresponding id which is passed through parameter
	
	  /*ajax fuction that uses post method to request php server 'shopping_cart', passes above stored data into the parameter sending to the php
		and recieves response getting the value of number of items in the cart. This function mainly adds the item's information in the cart.*/
	  $.post('shopping_cart.php',{item_src:img,item_name:name,item_price:price},function(response){
          document.getElementById("numOfProduct").value=response;

	  });
	
    }
	
	/*ajax function that displays the number of added products in the cart icon */
	$(document).ready(function(){
		$.post('shopping_cart.php',{product_in_cart:"total_products"},function(response){
			document.getElementById("numOfProduct").value=response;
		});
		
	});

	/*This function is triggered when user clicks in the cart icon to review the items in the cart */
    function displayCart()
    {
      $.post('shopping_cart.php',{display_cart:"cart"},function(response){
        $("#store_cart").html(response).show();//store_cart is the id of modal body within cart will open on response of button clicked
		$("#modalCart").slideToggle();//This helps to toggle the cart slideup and slidedown
	 });

    }
	
	function remove(){
		$.post('shopping_cart.php?del',function(data){
			alert('test');
		});
	}
	
	function clear(){
		$.post('shopping_cart.php?clear',function(data){
			alert();
			//$("#store_cart").html(response).show();

		});
	}
	
	
	
