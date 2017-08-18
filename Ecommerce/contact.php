<!DOCTYPE html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
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
		        	<li><a href="index.php">Home</a></li>
		        	<li class="active"><a href="contact.html">Contact</a></li>
		        </ul>
		        <ul class="nav navbar-nav navbar-right">
		        	<li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
		        	<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
		        </ul>
		    </div>
	    </div>
	</nav>
<form>
	<div class="form-group">
		<label for="first">First name:</label>
		<input type="text" class="form-control" id="first" style="width: 300px;"/>
	</div><br/>
	
	<div class="form-group">
		<label for="last">Last name:</label>
		<input type="text" class="form-control" id="last" style="width: 300px;"/>
	</div><br/>
	
	<div class="form-group">
		<label for="email">Email address:</label>
		<input type="email" class="form-control" id="email" style="width: 300px;"/>
	</div><br/>
	
	<div class="form-group">
		<label for="comment">Comment:</label>
		<input type="text" class="form-control" id="pwd" style="width: 300px; height: 100px;" />
	</div><br/>
	
	<div class="checkbox">
		<label><input type="checkbox"> Remember me</label>
	</div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html>