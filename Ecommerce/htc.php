<!DOCTYPE html>
<html>
<head>
	<title>HTC</title>
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
		        	<li class ="active"><a href="htc.php">HTC</a></li>
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
	
	<section class = "container">
		<div class = "row">
			<figure class = "col-sm-4">
				<div class="panel panel-primary">
			        <div class="panel-heading">
						HTC desire 530
					</div>
			        <div class="panel-body" id="id13">
			        	<img src="images/htc/htc desire 530.png" class="img-responsive center-block" style="width:40%" alt="Image">
			        </div>
	                <div class="panel-footer inline">
	                	<h3>Price : £425</h3>
	                	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#htcDesire">View Info</button>
	                	<a href="#" onclick="AddToCart('id13')">Add to Cart<span class="glyphicon glyphicon-shopping-cart"></span></a>
						<input type="hidden" id="id13_name" value="HTC desire 530">
    					<input type="hidden" id="id13_price" value="425">

	                	<!-- Modal -->
						<div class="modal fade" id="htcDesire" role="dialog">
							<div class="modal-dialog">
							    <!-- Modal content-->
							    <div class="modal-content">
							       	<div class="modal-header">
							       		<button type="button" class="close" data-dismiss="modal">&times;</button>
							       			<h4 class="modal-title">HTC Desire 530</h4>
							       	</div>
							        	
							       	<div class="modal-body">
							       		<div class = "row">
							           		<div class = "col-sm-4">
							               		<img src = "images/htc/htc desire 530.png" style = "width:100%" />
							               	</div>
							               	<div class = "col-sm-8">
							               		<h2>Features</h2>
												<ul>
													<li>5" HD 720p screen</li>
													<li>8MP front camera</li>
													<li>5MP selfie camera</li>
													<li>Expandable memory up to 2TB</li>
													<li>Quad-core processor</li>
													<li>2,200mAh battery</li>
													<li>Android 6.0</li>
													<li>4G-ready</li>

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
						HTC one m9
					</div>
			        <div class="panel-body" id ="id14">
			        	<img src="images/htc/htc one m9.jpg" class="img-responsive center-block" style="width:40%" alt="Image">
			        </div>
	                <div class="panel-footer inline">
	                	<h3>Price : £690</h3>
	                	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#htcm9">View Info</button>
	                	<a href="#" onclick="AddToCart('id14')">Add to Cart<span class="glyphicon glyphicon-shopping-cart"></span></a>
						<input type="hidden" id="id14_name" value="HTC one m9">
    					<input type="hidden" id="id14_price" value="690">

	                	<!-- Modal -->
						<div class="modal fade" id="htcm9" role="dialog">
							<div class="modal-dialog">
							    <!-- Modal content-->
							    <div class="modal-content">
							       	<div class="modal-header">
							       		<button type="button" class="close" data-dismiss="modal">&times;</button>
							       			<h4 class="modal-title">HTC One M9</h4>
							       	</div>
							        	
							       	<div class="modal-body">
							       		<div class = "row">
							           		<div class = "col-sm-4">
							               		<img src = "images/htc/htc desire 530.png" style = "width:100%" />
							               	</div>
							               	<div class = "col-sm-8">
							               		<h2>Features</h2>
												<ul>
													<li>Dual-tone all-metal body</li>
													<li>5" FHD screen</li>
													<li>20MP rear & 4UltraPixel™ front facing camera</li>
													<li>Front-facing HTC BoomSound™ and Dolby Audio™ speakers</li>
													<li>Super smart HTC Sense™ Home Widget</li>
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
						HTC Desire 626
					</div>
			        <div class="panel-body" id="id15">
			        	<img src="images/htc/htc desire 626.png" class="img-responsive center-block" style="width:40%" alt="Image">
			        </div>
	                <div class="panel-footer inline">
	                	<h3>Price : £450</h3>
	                	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#htc626">View Info</button>
	                	<a href="#" onclick="AddToCart('id15')">Add to Cart<span class="glyphicon glyphicon-shopping-cart"></span></a>
						<input type="hidden" id="id15_name" value="HTC desire 626">
    					<input type="hidden" id="id15_price" value="450">

	                	<!-- Modal -->
						<div class="modal fade" id="htc626" role="dialog">
							<div class="modal-dialog">
							    <!-- Modal content-->
							    <div class="modal-content">
							       	<div class="modal-header">
							       		<button type="button" class="close" data-dismiss="modal">&times;</button>
							       			<h4 class="modal-title">HTC Desire 626</h4>
							       	</div>
							        	
							       	<div class="modal-body">
							       		<div class = "row">
							           		<div class = "col-sm-4">
							               		<img src = "images/htc/htc desire 626.png" style = "width:100%" />
							               	</div>
							               	<div class = "col-sm-8">
							               		<h2>Features</h2>
												<ul>
													<li>5" HD display</li>
													<li>1.2 GHz quad-core processor</li>
													<li>13MP camera</li>
													<li>Android OS</li>
													<li>Google Play Store</li>
													<li>2000 mAh battery</li>
													<li>4G-ready</li>

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