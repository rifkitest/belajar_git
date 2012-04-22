<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>Buku Import Computer</title>
		<meta name="description" content="Buku Import Komputer Terbesar Di Inonesia" />
		<meta name="author" content="rifki" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="apps/assets/images/favicon2.ico" />
		<!-- <link rel="apple-touch-icon" href="apps/assets/images/favicon.png" /> -->
		<link rel="stylesheet" type="text/css" href="apps/assets/css/depan.css" />
		<script src="apps/assets/js/jquery-1.6.4.js"></script>
		<!--[if lt IE 9]>
		<script src="apps/assets/js/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- start header -->
		<header>
			<p class="title"><b>Buku Import Komputer Nomor 1 Di Indonesia...!</b></p>
			<a href="#Product.php"><img class="icon_book_store" src="apps/assets/images/icon_book2.png" title="Book Store" /></a>
				<a href="index.php">Home</a> |
				<a href="apps/views/about_us.php">About Us</a> | 
				<a href="apps/views/contact_us.php">Contact Us</a> | 
				<a href="apps/views/order.php">Order</a> | 
				<a href="apps/views/how_to_buy.php">How To Buy</a>
		</header>
		<!-- end header -->	
		
		<!-- start nav-->
			<nav>
				<!--
					<a class="navlink" href="#home">Home</a>
					<a class="navlink" href="#about us">About Us</a>
					<a class="navlink" href="#contact us">Contact Us</a>
					<a class="navlink" href="#product">Product</a>
				-->
				<!-- start slide - div -->
				<div id="slideshow">
					<!-- versi 1
					    <img src="apps/assets/images/slide_depan/image1.jpg" alt="Slideshow Image 1" class="active" />
					    <img src="apps/assets/images/slide_depan/image2.jpg" alt="Slideshow Image 2" />
					    <img src="apps/assets/images/slide_depan/image3.jpg" alt="Slideshow Image 3" />
					    <img src="apps/assets/images/slide_depan/image4.jpg" alt="Slideshow Image 4" />
					-->    
					 <!-- versi 2 -->   
					     <div class="active">
							        <a href="#category_database">
							        <img src="apps/assets/images/slide_depan/image1.png" alt="Slideshow Image 1" title="Category Database" /></a>
							        <!--<a href="#category_database">Category Database</a>-->
							    </div>
							    <div>
							        <a href="#category_games">
							        <img src="apps/assets/images/slide_depan/image2.png" alt="Slideshow Image 2" title="Category Games Development" /></a>
							        <!--<a href="#category_games">Category Games Programming</a>-->
							    </div>
							    <div>
							        <a href="#category_mobile">
							        <img src="apps/assets/images/slide_depan/image3.png" alt="Slideshow Image 3" title="Category Mobile Developement" /></a>
							        <!--<a href="#category_mobile">Category Mobile Programming</a>-->
							    </div>
							    <div>
							        <a href="category_web">
							        <img src="apps/assets/images/slide_depan/image4.png" alt="Slideshow Image 4" title="Category Web Development" /></a>
							        <!--<a href="category_web">Category Web Development</a>-->
							    </div>
				</div>
				<!-- end slide - div -->
				
				<!-- start slide js -->
				<script>
						function slideSwitch() {
						    var $active = $('#slideshow DIV.active');
						
						    if ( $active.length == 0 ) $active = $('#slideshow DIV:last');
							    var $next =  $active.next().length ? $active.next()
							        : $('#slideshow DIV:first');
							    $active.addClass('last-active');					
							    $next.css({opacity: 0.0})
							        .addClass('active')
							        .animate({opacity: 1.0}, 1000, function() {
							            $active.removeClass('active last-active');
							 });
						}
						
							$(function() {
							    setInterval( "slideSwitch()", 5000 );
							});
				</script>
				<!-- end slide js-->
			
			</nav>
		<!-- end nav -->	
		
		<!-- start section -->
		<section>
		  
	</section>
		<!-- end section -->
		
		<!-- start footer -->
	  <footer>
			<center><p> <a href="#home">Home</a> | <a href="#home">About Us</a> | <a href="#home">Contact Us</a> | <a href="#home">Product</a></p></center>
		</footer>
		<!-- end footer -->
	</body>
</html>
