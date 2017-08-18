<!DOCTYPE html>
<html>
<head>
  	<title>SmartPhoneArena</title>
  	<meta charset="utf-8" />
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
  	<link rel="stylesheet" type="text/css" href="style.css">
  	<link rel="stylesheet" type="text/css" href="style_phone.css">
  	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  	<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src = "display.js"></script>
</head>
<body>
	
	<!--header content-->
	<header class = "jumbotron">
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
		        	<li class="active"><a href="#">Home</a></li>

		        	<!-- Dropdown menu-->
		        	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Products</a>
		        		<ul class="dropdown-menu">
		        			<li><a href="samsung.php">Samsung</a></li>
		        			<li><a href="iphone.php">Iphone</a></li>
		        			<li><a href="htc.php">HTC</a></li>
		        			<li><a href="sony.php">Sony</a></li>
		        		</ul>
		        	</li>

		        	<li><a href="#">Latest</a></li>
		        	<li><a href="contact.php">Contact</a></li>
		        </ul>
		        <ul class="nav navbar-nav navbar-right">
		        	<li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
		        	<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
		        </ul>
		    </div>
	    </div>
	</nav>
	
	<!-- background content-->
	<section class = "container box">	
				
			<!-- Carousel giving effect of slideshow -->
			<div id="carousel-example-generic" class="carousel slide customCarousel" data-ride="carousel">
  				
	  			<!-- Wrapper for slides -->
			  	<div class="carousel-inner" role="listbox">
				    <div class="item active">
				    	<div class = "row">
				    		<div class ="col-sm-6 box" >
				      			<a href = "samsung.php"><img src="images\samsung.jpg" alt="..." style ="width:50%"  class="img-responsive center-block" /></a>
				      			<p style="font-size: 20px ;"><Strong>Samsung S6 Edge</Strong></p>
				      		</div>
				      		<div class = "col-sm-6 box" >
				      			<br/>
				      			<img src="images/offer.jpg" />
				      			<p style="text-align: left">
				      				<ul class="bulletStyle">
				      					<li>Essential 30 GB data</li>
				      					<li>All you can eat minutes</li>
				      					<li>£49 up front cost</li>
				      					<li>£44 a month</li>
				      				</ul>
				      			</p>
				      		</div>
				      	</div>				      		
				    </div>

			    	<div class="item"><!--second item in carousel displaying offer -->
				    	<div class = "row">
					    		<div class ="col-sm-6 box" >
					      			<a href = "iphone.php"><img src="images\iphone.jpg" alt="..." style ="width:50%"  class="img-responsive center-block" /></a>
					      			<p style="font-size: 20px ;"><Strong>Apple Iphone 5c</Strong></p>
					      		</div>
					      		<div class = "col-sm-6 box" >
					      			<br/>
					      			<img src="images/offer.jpg" />
					      			<p style="text-align: left">
					      				<ul class="bulletStyle">
					      					<li>Essential 500MB data</li>
					      					<li>300 minutes</li>
					      					<li>£19 up front cost</li>
					      					<li>£16 a month</li>
					      				</ul>
					      			</p>
					      		</div>
					      	</div>			      		
			      	</div>

				    <div class="item"><!--third item in carousel displaying offer -->
					    <div class = "row">
					    		<div class ="col-sm-6 box" >
					      			<a href = "htc.php"><img src="images\htc.jpg" alt="..." style ="width:50%"  class="img-responsive center-block" /></a>
					      			<p style="font-size: 20px ;"><Strong>HTC 10</Strong></p>
					      		</div>
					      		<div class = "col-sm-6 box" >
					      			<br/>
					      			<img src="images/offer.jpg" />
					      			<p style="text-align: left">
					      				<ul class="bulletStyle">
					      					<li>Essential 500 MB data</li>
					      					<li>All you can eat minutes</li>
					      					<li>£19 up front cost</li>
					      					<li>£11 a month</li>
					      				</ul>
					      			</p>
					      		</div>
					      	</div>
			      		
			      	</div>

				    <div class="item"><!--fourth item in carousel displaying offer -->
				    <div class = "row">
				    		<div class ="col-sm-6 box" >
				      			<a href = "sony.php"><img src="images\sony.jpg" alt="..." style ="width:50%"  class="img-responsive center-block" /></a>
				      			<p style="font-size: 20px ;"><Strong>Sony Xperia X</Strong></p>
				      		</div>
				      		<div class = "col-sm-6 box" >
				      			<br/>
				      			<img src="images/offer.jpg" />
				      			<p style="text-align: left">
				      				<ul class="bulletStyle">
				      					<li>All you can eat data</li>
				      					<li>500 minutes</li>
				      					<li>£30 up front cost</li>
				      					<li>£25 a month</li>
				      				</ul>
				      			</p>
				      		</div>
				      	</div>
			      		
			      	</div>

				    <br/>
				    <br/>
				    <br/>

				    <!-- Indicators: little buttons underneath the image of mobile phones on clicking switches images respectively -->
	  				<ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
   					    <li data-target="#carousel-example-generic" data-slide-to="3"></li>

					</ol>
	    
	  			</div>

				  <!-- Controls left and right arrow-->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
				  </a>
				</div>	
	
		
	</section>
	<br/>
	<br/>
	<hr/>

	<!--body/showcasing display content -->
	<section class = "container-fluid box">
		<div class = "row">
		
			<div class = "col-sm-3">
				<div class="panel panel-default " style="width:200px;">
					<div class="panel-heading">
						<h2>Filter by: </h2>
					</div>
					<div class="panel-body">							
						<p><h3>Cost</h3></p>
						
							<input type="checkbox" class="id_price" value="1" onclick="img()">Under £300<br>
							<input type="checkbox" class="id_price" value="2" onclick="img()" > £299-£399<br>
							<input type="checkbox" class="id_price" value="3" onclick="img()"> £399-£499<br>
							<input type="checkbox" class="id_price" value="4" onclick="img()"> £499-£599<br>
							<input type="checkbox" class="id_price" value="5" onclick="img()"> £599-£699<br>
						
					</div>
				</div>
					
			</div>
			
			<div class= "col-sm-9 display_product">
			</div>
	
			
		</div>
		
		<div class ="row">
			<div class= "col-sm-3">
			</div>
			
		</div>
	</section>
	
	<!--footer section -->
	<footer class="container-fluid">
		<div class="row">
			<p class="col-sm-4">
				&copy; 2016 Phones
			</p>
			<ul class="col-sm-8">
				<li class="col-sm-1"><img src="images/twitter.png" /></li>
				<li class="col-sm-1"><img src="images/facebook.png"/></li>
				<li class="col-sm-1"><img src="images/instagram.png"/></li>
				
			</ul>    
		</div>
  </footer>
	
</body>
</html>
