
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blend &mdash; Free HTML5 Bootstrap Website Template by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	-->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="index.html"><img src="images/logo-colored.png" alt="Free HTML5 Bootstrap Website Template"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li class="fh5co-active"><a href="index.html">Home</a></li>
					<li><a href="portfolio.html">Photos</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy; 2016 Blend Free HTML5. All Rights Reserved.</span> <span>Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> </span> <span>Demo Images: <a href="http://pexels.com/" target="_blank">Pexels</a></span></small></p>
				<ul>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
			</div>

		</aside>

		<div id="fh5co-main">
			<div class="fh5co-gallery">


	<!-- AQUI INSERTAMOS EL CODIGO php DE IMPRIMIR LISTA DE FOTOS -->

	<?php

$conexion=mysqli_connect('localhost','root','','basedatos1');

$consulta="SELECT * FROM fotos";

$resultado=mysqli_query($conexion, $consulta);

/*echo "<table class='rwd-table'>";

echo "<tr><th>id</th><th>Título</th><th>Descripción</th><th>Autor</th><th>Localización</th><th>Categoría</th><th>Fecha Publicación</th><th>Fecha Original</th></tr>";*/

while($fila = mysqli_fetch_assoc($resultado)){

/*
echo "<tr><td>".$fila['id']."</td>";
echo "<td>".$fila['titulo']."</td>";
echo "<td>".$fila['descripcion']."</td>";
echo "<td>".$fila['autor']."</td>";
echo "<td>".$fila['localizacion']."</td>";
echo "<td>".$fila['categoria']."</td>";
echo "<td>".$fila['fecha_publicacion']."</td>";
echo "<td>".$fila['fecha_original']."</td>";

echo "<td><img src='imagenes/".$fila['url']."'></td>";

echo "<td><a href='borrar-fotos.php?id=".$fila['id']."'>Borrar</a></td></tr>";*/

echo' <a class="gallery-item" href="single.php?id='.$fila["id"].'">';
echo'<img src="imagenes/'.$fila["url"].'" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">';
echo '				<span class="overlay">
						<h2>'.$fila["titulo"].'</h2>
						<span>14 Photos</span>
					</span>
				</a>';

}

/*echo "</table>";*/

mysqli_close($conexion);


?>

				<a class="gallery-item" href="single.html">
					<img src="images/work_1.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Nature</h2>
						<span>14 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_2.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>People</h2>
						<span>7 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_3.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Sky</h2>
						<span>22 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_4.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Building</h2>
						<span>28 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_5.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>People 2</h2>
						<span>17 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_6.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Beach</h2>
						<span>34 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_7.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Vegetarian Food</h2>
						<span>10 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_8.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Travel</h2>
						<span>19 Photos</span>
					</span>
				</a>

				<a class="gallery-item" href="single.html">
					<img src="images/work_9.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Family</h2>
						<span>42 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_10.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Food</h2>
						<span>10 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_11.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Gadgets</h2>
						<span>76 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_12.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Cars</h2>
						<span>55 Photos</span>
					</span>
				</a>

				<a class="gallery-item" href="single.html">
					<img src="images/work_13.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Animals</h2>
						<span>47 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_14.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Building 2</h2>
						<span>10 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_15.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Baloon</h2>
						<span>17 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_16.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Animals 2</h2>
						<span>22 Photos</span>
					</span>
				</a>
			</div>
			
	

			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Services</h2>
				<div class="row">
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-strategy"></i>
							</div>
							<div class="fh5co-text">
								<h3>Strategy</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-telescope"></i>
							</div>
							<div class="fh5co-text">
								<h3>Explore</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-circle-compass"></i>
							</div>
							<div class="fh5co-text">
								<h3>Direction</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-tools-2"></i>
							</div>
							<div class="fh5co-text">
								<h3>Expertise</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>

				</div>
			</div>


			<div class="fh5co-testimonial" >
				<div class="fh5co-narrow-content">
					<div class="owl-carousel-fullwidth animate-box" data-animate-effect="fadeInLeft">
		            <div class="item">
		            	<figure>
		            		<img src="images/testimonial_person2.jpg" alt="Free HTML5 Bootstrap Template">
		            	</figure>
		              	<p class="text-center quote">&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained. &rdquo; <cite class="author">&mdash; Ferdinand A. Porsche</cite></p>
		            </div>
		            <div class="item">
		            	<figure>
		            		<img src="images/testimonial_person3.jpg" alt="Free HTML5 Bootstrap Template">
		            	</figure>
		              	<p class="text-center quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while. &rdquo;<cite class="author">&mdash; Steve Jobs</cite></p>
		            </div>
		            <div class="item">
		            	<figure>
		            		<img src="images/testimonial_person4.jpg" alt="Free HTML5 Bootstrap Template">
		            	</figure>
		              	<p class="text-center quote">&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly. &rdquo;<cite class="author">&mdash; Frank Chimero</cite></p>
		            </div>
		          </div>
				</div>
			</div>


			<div class="fh5co-counters" style="background-image: url(images/hero.jpg);" data-stellar-background-ratio="0.5" id="counter-animate">
				<div class="fh5co-narrow-content animate-box">
					<div class="row" >
						<div class="col-md-4 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="67" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Client</span>
						</div>
						<div class="col-md-4 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="130" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Photos</span>
						</div>
						<div class="col-md-4 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="27232" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Pixels</span>
						</div>
					</div>
				</div>
			</div>
		

			<div class="fh5co-narrow-content">
				<div class="row">
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<h1 class="fh5co-heading-colored">Get in touch</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
						<p class="fh5co-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
					</div>
					
				</div>
			</div>

		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

