
/*This function is triggered when checkbox is clicked in home page. It checks if the checkbox is checked,sends the value to db.php and on response
displays the products accordingly */
function img() {
	
  $(".id_price").each(function() {
    if ($(this).is(":checked")) {
		var check = $(this).val();
		console.log(check);
		$.post('db.php',{value:check},function(response){
			$(".display_product").html(response).show();
			
		});
	
    }
  });
}


