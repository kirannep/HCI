<!DOCTYPE html>
<html>

	<head>
		<title>Blog</title>
		<meta charset="utf-8" />
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>


	<body>
		<div class="blog-masthead">
			<nav class="blog-nav">
				<a class="blog-nav-item " href="#">Kiran Nepali</a>
				<a class="blog-nav-item active" href="#">Article</a>
				<a class="blog-nav-item" href="#">Contact me</a>
				<a class="blog-nav-item" href="#">About me</a>
          	</nav>
		</div>
		
		<!--container containing contents-->
		<div class="container">
			<div class="row">
				<div class="col-md-3 leftColumn box"><!--leftcolumn box -->
					<aside>
						<img src="image/mypic.jpg" width ="90px" height="120px" class="img-circle"  />
					</aside>
					<h4>Kiran Nepali</h4>
					<p>Student @Royal Holloway</p>
					<p>BSc. Computer Science</p>
					<p>In final year</p>
					<hr/>
					<p>Share this page on:</p>
					<ul class="list-inline">
						<li><img src="image/twitter.png" /></li>
						<li><img src="image/facebook.png" /></li>
						<li><img src="image/googleplus.png" /></li>
						<li><img src="image/linkedin.png" /></li>
						<li><img src="image/email.png" /></li>
					</ul>
				</div>
				
				<div class="col-md-8 rightColumn box"><!--rightcolumn box-->
					<article>
						
						<footer><small>Posted on 18 Oct 2016</small></footer>
						<script type = "text/javascript" src ="more.js"></script>
						<p class ="lead text-justify"> 
							<?php include "admin_post.php" ?> 
						</p>
						
					</article>
					
					<hr/>
					
					
					<hr/>
					
					
					
					<nav aria-label="Page navigation">
						<ul class="pagination">
							<li>
								<a href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
								</a>
							</li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
							<li>
								<a href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>	
		</div>
	</body>
</html>