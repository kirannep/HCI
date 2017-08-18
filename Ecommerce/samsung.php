<!DOCTYPE html>
<html>
<head>
	 <title>Samsung</title>
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
		        	<li class="active"><a href="samsung.php">Samsung</a></li>
		        	<li><a href="iphone.php">Iphone</a></li>
		        	<li><a href="htc.php">HTC</a></li>
		        	<li><a href="sony.php">Sony</a></li>
		           	<li><a href="#">Latest</a></li>
		        </ul>
		        <ul class="nav navbar-nav navbar-right">
		        	<li ><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
		        	<li ><input type="button" id="numOfProduct" value=""><a href="#" id="cart_icon" onclick="displayCart();" data-toggle="modal" data-target="#modalCart"><span class="glyphicon glyphicon-shopping-cart"></span> </a></li>
	
					<!-- Modal cart that is displayed when the cart icon is clicked-->
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
	
	<!--Samsung display page which contains phones and details -->
	<section class = "container">
		<div class = "row">
			<figure class = "col-sm-4">
				<div class="panel panel-primary">
			        <div class="panel-heading">
			        	Samsung Galaxy A3
			        </div>
			        <div class="panel-body" id="id1">
			        	<img src="images/samsung/galaxy a3.jpg" class="img-responsive center-block" style="width:40%" alt="Image">
			        </div>
	                <div class="panel-footer inline">
	                	<h3>Price : £410</h3>
	                	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#galaxyA3">View Info</button>
	                	<a href="#"  onclick="AddToCart('id1')">Add to Cart<span class="glyphicon glyphicon-shopping-cart"></span></a>
	                	<input type="hidden" id="id1_name" value="Samsung Galaxy A3">
    					<input type="hidden" id="id1_price" value="410">

	                	<!-- Modal -->
						<div class="modal fade" id="galaxyA3" role="dialog">
							<div class="modal-dialog">
							    <!-- Modal content-->
							    <div class="modal-content">
							       	<div class="modal-header">
							       		<button type="button" class="close" data-dismiss="modal">&times;</button>
							       			<h4 class="modal-title">Samsung Galaxy A3</h4>
							       	</div>
							        	
							       	<div class="modal-body">
							       		<div class = "row">
							           		<div class = "col-sm-4">
							               		<img src = "images/samsung/galaxy a3.jpg" style = "width:100%" />
							               	</div>
							               	<div class = "col-sm-8">
							               		<h2>Features</h2>
												<ul>
													<li>Premium Design</li>
													<li>Fast launch 13MP Camera</li>
													<li>Expandable Memory</li>
													<li>4.7" HD Resolution Display</li>
													<li>4G Super Voice</li>
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
			        	Samsung Galaxy Note 7
			        </div>
			        <div class="panel-body" id ="id2">
			        	<img src="images/samsung/galaxy note 7.jpg" class="img-responsive center-block" style="width:51%" alt="Image">
			        </div>
	                <div class="panel-footer inline">
	                	<h3>Price : £510</h3>
	                	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#galaxyNote7">View Info</button>
	                	<a href="#" onclick="AddToCart('id2')">Add to Cart<span class="glyphicon glyphicon-shopping-cart"></span></a>
						<input type="hidden" id="id2_name" value="Samsung Galaxy Note 7">
    					<input type="hidden" id="id2_price" value="510">

	                	<!-- Modal -->
						<div class="modal fade" id="galaxyNote7" role="dialog">
							<div class="modal-dialog">
							    <!-- Modal content-->
							    <div class="modal-content">
							       	<div class="modal-header">
							       		<button type="button" class="close" data-dismiss="modal">&times;</button>
							       			<h4 class="modal-title">Samsung Galaxy Note 7</h4>
							       	</div>
							        	
							       	<div class="modal-body">
							       		<div class = "row">
							           		<div class = "col-sm-4">
							               		<img src = "images/samsung/galaxy note 7.jpg" style = "width:100%" />
							               	</div>
							               	<div class = "col-sm-8">
							               		<h2>Features</h2>
												<ul>
													<li>Integrated S-Pen to help with screen selection accuracy, screen navigation, jotting notes and much more</li>
													<li>Write and store shopping lists or key notes even when the screen is in standby mode</li>
													<li>IP68 water and dust resistant to prevent everyday mishaps</li>
													<li>5.7” Quad HD Super Amoled screen built within a compact but premium design phone</li>
													<li>64GB internal memory with expandable SD card slot</li>
													<li>Iris scanner phone security</li>
													<li>	4G Super Voice</li>
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
			        	Samsung Galaxy S4 mini
			        </div>
			        <div class="panel-body" id ="id3">
			        	<img src="images/samsung/galaxy s4 mini.jpg" class="img-responsive center-block" style="width:40%" alt="Image">
			        </div>
	                <div class="panel-footer inline">
	                	<h3>Price : £450</h3>
	                	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#galaxyS4mini">View Info</button>
	                	<a href="#" onclick="AddToCart('id3')">Add to Cart<span class="glyphicon glyphicon-shopping-cart"></span></a>
						<input type="hidden" id="id3_name" value="Samsung Galaxy S4 mini">
    					<input type="hidden" id="id3_price" value="450">
						
	                	<!-- Modal -->
						<div class="modal fade" id="galaxyS4mini" role="dialog">
							<div class="modal-dialog">
							    <!-- Modal content-->
							    <div class="modal-content">
							       	<div class="modal-header">
							       		<button type="button" class="close" data-dismiss="modal">&times;</button>
							       			<h4 class="modal-title">Samsung Galaxy S4 mini</h4>
							       	</div>
							        	
							       	<div class="modal-body">
							       		<div class = "row">
							           		<div class = "col-sm-4">
							               		<img src = "images/samsung/galaxy s4 mini.jpg" style = "width:100%" />
							               	</div>
							               	<div class = "col-sm-8">
							               		<h2>Features</h2>
												<ul>
													<li>4.3-inch qHD Super AMOLED (960 x 540) display</li>
														<li>Fast 1.7 GHz Dual-core Processor</li>
														<li>8 megapixel</li>
														<li>	Up to 8GB of internal memory & up to 64GB SD Card</li>
														<li>	Large 1900mAh battery</li>
														<li>	HD video recording and playback</li>
														<li>	Android 4.2.2 (Jelly Bean) Operating System</li>
														<li>	NFC</li>
														<li>	Notification light</li>

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

		<div class = "row">
			<figure class = "col-sm-4">
				<div class="panel panel-primary">
			        <div class="panel-heading">
			        	Samsung Galaxy S5 neo
			        </div>
			        <div class="panel-body" id = "id4">
			        	<img src="images/samsung/galaxy s5 neo.jpg" class="img-responsive center-block" style="width:40%" alt="Image">
			        </div>
	                <div class="panel-footer inline">
	                	<h3>Price : £350</h3>
	                	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#galaxyS5neo">View Info</button>
	                	<a href="#" onclick="AddToCart('id4')" >Add to Cart<span class="glyphicon glyphicon-shopping-cart"></span></a>
						<input type="hidden" id="id4_name" value="Samsung Galaxy S5 neo">
    					<input type="hidden" id="id4_price" value="350">

	                	<!-- Modal -->
						<div class="modal fade" id="galaxyS5neo" role="dialog">
							<div class="modal-dialog">
							    <!-- Modal content-->
							    <div class="modal-content">
							       	<div class="modal-header">
							       		<button type="button" class="close" data-dismiss="modal">&times;</button>
							       			<h4 class="modal-title">Samsung Galaxy S5 neo</h4>
							       	</div>
							        	
							       	<div class="modal-body">
							       		<div class = "row">
							           		<div class = "col-sm-4">
							               		<img src = "images/samsung/galaxy s5 neo.jpg" style = "width:100%" />
							               	</div>
							               	<div class = "col-sm-8">
							               		<h2>Features</h2>
												<ul>
													<li>16MP Camera with fast Auto-Focus of up to 0.3 seconds so you’ll always get a great picture in an instant.</li>
													<li>Built-in heart rate monitor</li>
													<li>5.1-inch Full HD Super AMOLED display for a rich viewing experience</li>
													<li>Dust and water Resistant</li>
													<li>Ultra Power Save Mode for up to 24 hours battery life even with 10% of power remaining</li>
													<li>Finger scanner for secure screen locking</li>
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
			        	Samsung Galaxy S6 edge
			        </div>
			        <div class="panel-body" id="id5">
			        	<img src="images/samsung/galaxy s6 edge.jpg" class="img-responsive center-block" style="width:40%" alt="Image">
			        </div>
	                <div class="panel-footer inline">
	                	<h3>Price : £530</h3>
	                	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#galaxyS6edge">View Info</button>
	                	<a href="#" onclick="AddToCart('id5')">Add to Cart<span class="glyphicon glyphicon-shopping-cart"></span></a>
						<input type="hidden" id="id5_name" value="Samsung Galaxy S6 edge">
    					<input type="hidden" id="id5_price" value="530">

	                	<!-- Modal -->
						<div class="modal fade" id="galaxyS6edge" role="dialog">
							<div class="modal-dialog">
							    <!-- Modal content-->
							    <div class="modal-content">
							       	<div class="modal-header">
							       		<button type="button" class="close" data-dismiss="modal">&times;</button>
							       			<h4 class="modal-title">Samsung Galaxy S6 edge</h4>
							       	</div>
							        	
							       	<div class="modal-body">
							       		<div class = "row">
							           		<div class = "col-sm-4">
							               		<img src = "images/samsung/galaxy s5 neo.jpg" style = "width:100%" />
							               	</div>
							               	<div class = "col-sm-8">
							               		<h2>Features</h2>
												<ul>
													<li>Stunning design</li>
														<li>Smarter Charging</li>
														<li>Faster Camera</li>
														<li>Quad-HD screen</li>
														<li>Powerful performance</li>
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
			        	Samsung Galaxy S7 edge
			        </div>
			        <div class="panel-body" id="id6">
			        	<img src="images/samsung/galaxy s7 edge.jpg" class="img-responsive center-block" style="width:40%" alt="Image">
			        </div>
	                <div class="panel-footer inline">
	                	<h3>Price : £530</h3>
	                	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#galaxyS7edge">View Info</button>
	                	<a href="#"  onclick="AddToCart('id6')">Add to Cart<span class="glyphicon glyphicon-shopping-cart"></span></a>
						<input type="hidden" id="id6_name" value="Samsung Galaxy S7 edge">
    					<input type="hidden" id="id6_price" value="530">

	                	<!-- Modal -->
						<div class="modal fade" id="galaxyS7edge" role="dialog">
							<div class="modal-dialog">
							    <!-- Modal content-->
							    <div class="modal-content">
							       	<div class="modal-header">
							       		<button type="button" class="close" data-dismiss="modal">&times;</button>
							       			<h4 class="modal-title">Samsung Galaxy S7 edge</h4>
							       	</div>
							        	
							       	<div class="modal-body">
							       		<div class = "row">
							           		<div class = "col-sm-4">
							               		<img src = "images/samsung/galaxy s7 edge.jpg" style = "width:100%" />
							               	</div>
							               	<div class = "col-sm-8">
							               		<h2>Features</h2>
												<ul>
													<li>5.5" dual curved screen</li>
													<li>Dual pixel 12MP rear camera</li>
													<li>Bigger battery & faster charging</li>
													<li>Quad-HD screen</li>
													<li>Water resistant & expandable storage</li>
													<li>4G Super-Voice enabled</li>

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