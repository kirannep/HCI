<!DOCTYPE html>
<html>
<head>
	<title>Sony</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style_phone.css">
	<link rel="stylesheet" type="text/css" href="cart_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="cart.js"></script>

</head>

<body>
	
	<!--header content-->
	<header class = "jumbotron phone">
		<div class="container">
  			<div class="container text-center">
    			<h1>SmartPhoneArena</h1>      
    		</div>
		</div>
	</header>

	<!--Navigation bar containing menus -->
	<nav class="navbar navbar-inverse">
	    <div class="container-fluid">
	    	<div class="navbar-header">
	      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>                        
	      		</button>
	      		<a class="navbar-brand" href="#">SmartPhoneArena</a>
	    	</div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		        <ul class="nav navbar-nav">
   		        	<li><a href="index.php">Home</a></li>
		        	<li><a href="samsung.php">Samsung</a></li>
		        	<li><a href="iphone.php">Iphone</a></li>
		        	<li><a href="htc.php">HTC</a></li>
		        	<li class="active"><a href="sony.php">Sony</a></li>
		           	<li><a href="#">Latest</a></li>
		        </ul>
		        <ul class="nav navbar-nav navbar-right">
		        	<li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
					<li ><input type="button" id="numOfProduct" value=""><a href="#" id="cart_icon" onclick="displayCart();" data-toggle="modal" data-target="#modalCart"><span class="glyphicon glyphicon-shopping-cart"></span> </a></li>
	
					<!-- Modal cart-->
						<div class="modal fade" id="modalCart" role="dialog">
							<div class="modal-dialog">
								<div class="modal-header">
							       	<button type="button" class="close" data-dismiss="modal">&times;</button>
							       	<h4 class="modal-title">Review Cart</h4>
							    </div>
								<div class="modal-body" id="store_cart">
									<p>	</p>
								</div>
                			</div>
                		</div>
					</ul>
		    </div>
	    </div>
	</nav>
	
	<section class = "container">
		<div class = "row">
			<figure class = "col-sm-4">
				<div class="panel panel-primary">
			        <div class="panel-heading">
						Sony Xperia M4 Aqua
			        </div>
			        <div class="panel-body" id="id10">
			        	<img src="images/sony/sony xperia M4 Aqua.jpg" class="img-responsive center-block" style="width:40%" alt="Image">
			        </div>
	                <div class="panel-footer inline">
	                	<h3>Price : £380</h3>
	                	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#sonyAqua">View Info</button>
	                	<a href="#" onclick="AddToCart('id10')">Add to Cart<span class="glyphicon glyphicon-shopping-cart"></span></a>
						<input type="hidden" id="id10_name" value="Sony Xperia M4 Aqua">
    					<input type="hidden" id="id10_price" value="380">

	                	<!-- Modal -->
						<div class="modal fade" id="sonyAqua" role="dialog">
							<div class="modal-dialog">
							    <!-- Modal content-->
							    <div class="modal-content">
							       	<div class="modal-header">
							       		<button type="button" class="close" data-dismiss="modal">&times;</button>
							       			<h4 class="modal-title">Sony Xperia M4 Aqua</h4>
							       	</div>
							        	
							       	<div class="modal-body">
							       		<div class = "row">
							           		<div class = "col-sm-4">
							               		<img src = "images/sony/sony xperia M4 Aqua.jpg" style = "width:100%" />
							               	</div>
							               	<div class = "col-sm-8">
							               		<h2>Features</h2>
												<ul>
													<li>Rugged waterproof handset in an elegant and stylish design</li>
													<li>13MP rear and 5MP super wide angled front facing camera</li>
													<li>Blistering Performance</li>
													<li>5.0" 720 HD IPS Display</li>

												</ul>
							               	</div>
							            </div>
							       	</div>
				                </div>
                			</div>
                		</div>
                	</div>
                </div>
			</figure>
	
			<figure class = "col-sm-4">
				<div class="panel panel-primary">
			        <div class="panel-heading">
						Sony Xperia X
			        </div>
			        <div class="panel-body" id ="id11">
			        	<img src="images/sony/sony xperia x.jpg" class="img-responsive center-block" style="width:40%" alt="Image">
			        </div>
	                <div class="panel-footer inline">
	                	<h3>Price : £599</h3>
	                	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#sonyX">View Info</button>
	                	<a href="#" onclick="AddToCart('id11')">Add to Cart<span class="glyphicon glyphicon-shopping-cart"></span></a>
						<input type="hidden" id="id11_name" value="Sony Xperia X">
    					<input type="hidden" id="id11_price" value="599">

	                	<!-- Modal -->
						<div class="modal fade" id="sonyX" role="dialog">
							<div class="modal-dialog">
							    <!-- Modal content-->
							    <div class="modal-content">
							       	<div class="modal-header">
							       		<button type="button" class="close" data-dismiss="modal">&times;</button>
							       			<h4 class="modal-title">Sony Xperia X</h4>
							       	</div>
							        	
							       	<div class="modal-body">
							       		<div class = "row">
							           		<div class = "col-sm-4">
							               		<img src = "images/sony/sony xperia x.jpg" style = "width:100%" />
							               	</div>
							               	<div class = "col-sm-8">
							               		<h2>Features</h2>
												<ul>
													<li>Hybrid Autofocus for no blurry moments</li>
													<li>Quick launch 23MP Rear & 13MP Front Camera’s</li>
													<li>Up to 2 days battery life</li>
													<li>5” display with seamless metal back</li>
													<li>4G Ready</li>

												</ul>
							               	</div>
							            </div>
							       	</div>
				                </div>
                			</div>
                		</div>
                	</div>
                </div>
			</figure>

			<figure class = "col-sm-4">
				<div class="panel panel-primary">
			        <div class="panel-heading">
						Sony Xperia Z3
			        </div>
			        <div class="panel-body" id="id12">
			        	<img src="images/sony/sony xperia Z3.jpg" class="img-responsive center-block" style="width:40%" alt="Image">
			        </div>
	                <div class="panel-footer inline">
	                	<h3>Price : £650</h3>
	                	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#sonyZ3">View Info</button>
	                	<a href="#"  onclick="AddToCart('id12')">Add to Cart<span class="glyphicon glyphicon-shopping-cart"></span></a>
						<input type="hidden" id="id12_name" value="Sony Xperia Z3">
    					<input type="hidden" id="id12_price" value="650">

	                	<!-- Modal -->
						<div class="modal fade" id="sonyZ3" role="dialog">
							<div class="modal-dialog">
							    <!-- Modal content-->
							    <div class="modal-content">
							       	<div class="modal-header">
							       		<button type="button" class="close" data-dismiss="modal">&times;</button>
							       			<h4 class="modal-title">Sony Xperia Z3</h4>
							       	</div>
							        	
							       	<div class="modal-body">
							       		<div class = "row">
							           		<div class = "col-sm-4">
							               		<img src = "images/sony/sony xperia Z3.jpg" style = "width:100%" />
							               	</div>
							               	<div class = "col-sm-8">
							               		<h2>Features</h2>
												<ul>
													<li>20.7 megapixel camera with Exmor sensor for sharp, clear and bright photos and 4K video capture</li>
													<li>Waterproof & dust resistant for life’s surprises</li>
													<li>5.2-inch Full HD screen for an incredible viewing experience</li>
													<li>4G Ready for faster internet at no extra cost</li>
												</ul>
							               	</div>
							            </div>
							       	</div>
				                </div>
                			</div>
                		</div>
                	</div>
                </div>
			</figure>
			
						
		</div>

	</section>

</body>
</html>