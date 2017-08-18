<!DOCTYPE html>
<html>
<head>
	<title>Iphone</title>
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
		        	<li ><a href="samsung.php">Samsung</a></li>
		        	<li class="active"><a href="iphone.php">Iphone</a></li>
		        	<li><a href="htc.php">HTC</a></li>
		        	<li><a href="sony.php">Sony</a></li>
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
	
	
	<!-- This container will display iphones and other information -->
	<section class = "container">
		<div class = "row">
			<figure class = "col-sm-4">
				<div class="panel panel-primary">
			        <div class="panel-heading">
			        	Iphone 5s
			        </div>
			        <div class="panel-body" id ="id7">
			        	<img src="images/iphone/iphone 5s.jpg" class="img-responsive center-block" style="width:40%" alt="Image">
			        </div>
	                <div class="panel-footer inline">
	                	<h3>Price : £450</h3>
	                	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#iphone5s">View Info</button>
	                	<a href="#" onclick="AddToCart('id7')">Add to Cart<span class="glyphicon glyphicon-shopping-cart"></span></a>
						<input type="hidden" id="id7_name" value="Iphone 5s">
    					<input type="hidden" id="id7_price" value="450">

	                	<!-- Modal -->
						<div class="modal fade" id="iphone5s" role="dialog">
							<div class="modal-dialog">
							    <!-- Modal content-->
							    <div class="modal-content">
							       	<div class="modal-header">
							       		<button type="button" class="close" data-dismiss="modal">&times;</button>
							       			<h4 class="modal-title">Iphone 5s</h4>
							       	</div>
							        	
							       	<div class="modal-body">
							       		<div class = "row">
							           		<div class = "col-sm-4">
							               		<img src = "images/iphone/iphone 5s.jpg" style = "width:100%" />
							               	</div>
							               	<div class = "col-sm-8">
							               		<h2>Features</h2>
												<ul>
													<li>iPhone 5s features a 4-inch Retina display</li>
													<li> A7 chip with 64-bit desktop-class architecture</li>
													<li>Touch ID fingerprint sensor, an 8MP iSight camera</li>
													<li> FaceTime HD camera</li>
													<li> 4G LTE and Wi-Fi</li>
													<li> iOS 8 and iCloud</li> 
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
			        	Iphone 6
			        </div>
			        <div class="panel-body" id="id8">
			        	<img src="images/iphone/iphone 6.jpg" class="img-responsive center-block" style="width:40%" alt="Image">
			        </div>
	                <div class="panel-footer inline">
	                	<h3>Price : £530</h3>
	                	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#iphone6">View Info</button>
	                	<a href="#" onclick="AddToCart('id8')">Add to Cart<span class="glyphicon glyphicon-shopping-cart"></span></a>
						<input type="hidden" id="id8_name" value="Iphone 6">
    					<input type="hidden" id="id8_price" value="530">

	                	<!-- Modal -->
						<div class="modal fade" id="iphone6" role="dialog">
							<div class="modal-dialog">
							    <!-- Modal content-->
							    <div class="modal-content">
							       	<div class="modal-header">
							       		<button type="button" class="close" data-dismiss="modal">&times;</button>
							       			<h4 class="modal-title">Iphone 6</h4>
							       	</div>
							        	
							       	<div class="modal-body">
							       		<div class = "row">
							           		<div class = "col-sm-4">
							               		<img src = "images/iphone/iphone 6.jpg" style = "width:100%" />
							               	</div>
							               	<div class = "col-sm-8">
							               		<h2>Features</h2>
												<ul>
													<li>4.7-inch Retina HD display</li>
													<li> An A8 chip with 64-bit desktop-class architecture</li>
													<li> A new 8MP iSight camera with Focus Pixels</li>
													<li> The Touch ID fingerprint identity sensor</li>
													<li> Faster 4G LTE and Wi-Fi </li>
													<li>Longer battery life</li>
													<li>iOS 8 and iCloud</li>
													<li> All in a 6.9mm thin seamless design</li>
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
			        	Iphone 6s
			        </div>
			        <div class="panel-body" id="id9">
			        	<img src="images/iphone/iphone 6 plus.jpg" class="img-responsive center-block" style="width:40%" alt="Image">
			        </div>
	                <div class="panel-footer inline">
	                	<h3>Price : £610</h3>
	                	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#iphone6plus">View Info</button>
	                	<a href="#" onclick="AddToCart('id9')">Add to Cart<span class="glyphicon glyphicon-shopping-cart"></span></a>
						<input type="hidden" id="id9_name" value="Iphone 6s">
    					<input type="hidden" id="id9_price" value="610">

	                	<!-- Modal -->
						<div class="modal fade" id="iphone6plus" role="dialog">
							<div class="modal-dialog">
							    <!-- Modal content-->
							    <div class="modal-content">
							       	<div class="modal-header">
							       		<button type="button" class="close" data-dismiss="modal">&times;</button>
							       			<h4 class="modal-title">Iphone 6s</h4>
							       	</div>
							        	
							       	<div class="modal-body">
							       		<div class = "row">
							           		<div class = "col-sm-4">
							               		<img src = "images/iphone/iphone 6 plus.jpg" style = "width:100%" />
							               	</div>
							               	<div class = "col-sm-8">
							               		<h2>Features</h2>
												<ul>
													<li>5.5-inch Retina HD display</li>
													<li> An A8 chip with 64-bit desktop-class architecture</li>
													<li> A new 8MP iSight camera with Focus Pixels and optical image stabilisation</li>
													<li> The Touch ID fingerprint identity sensor</li>
													<li> Faster 4G and Wi-Fi.3 Longer battery life</li>
													<li>iOS 8 and iCloud</li>
													<li> All in a 7.1mm thin seamless design</li>
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