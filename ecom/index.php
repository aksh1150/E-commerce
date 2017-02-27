<!DOCTYPE>
<?php
	include("functions/functions.php")
?>
<html>
	<head>
		<title>My Online Shop</title>
		
		<link rel="stylesheet" href="css/style.css" media="all" />
	</head>
	
	<body>
	<!--main container start here-->
		<div class="main_wrapper">
			
			<!--header start here-->
			<div class ="header_wrapper"> 
			
				<img id="logo" src="images/1.jpg" height="150px" width="200px" />
				<img id="banner" src="images/2.jpg" height="150px" width="1000px" />
				
			

			</div>
			<!--header end here-->
			
			<!--menubar start here-->
			<div class="menubar">
			
				<ul id="menu">
					<li><a href="#">Home</a></li>
					<li><a href="#">All Products</a></li>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Sign UP</a></li>
					<li><a href="#">Shopping Cart</a></li>
					<li><a href="#">Contact US</a></li>
				</ul>
				
				<div id="form">
				
					<form method="get" action="results.php" enctype="multipart/form-data">
						<input type="text" name="user_query" placeholder="Search Here" />
						<input type="submit" name="search" value="Search" />
					
					</form>
				</div>
			</div>
			
			<!--menubar end here-->
			
			<!--content start here-->
			<div class="content_wrapper">
			
				<div id="sidebar"> 
				
					<div id="sidebar_title">Categories</div>
					
						<ul id="cats">
							<?php
								getCats();
							?>
						</ul>
					<div id="sidebar_brand">Brands</div>
				<ul id="cats">
						
							<?php
								getBrands();
							?>
							
						</ul>
				</div>
				<div id="content_area"> 

					<div id="product_box">
					<?php
						getPro();
					?>
					
					</div>

				</div>
			
			</div>
			<!--content end here-->
			
			<!--footer start here-->
			<div id="footer">
				<h4 style="text-align:right; padding-right:10px;  color:gray">&copy; 2016 Akshit Patel</h4>
				<h5 style="text-align:right; padding-right:70px;  color:gold">Contact US:</h5>
				<p style="text-align:right; padding-right:30px; color:red">+1-807-707-1992<p>
			
			</div>
			
		
		</div>
		<!--main container end here-->
	</body>
</html>