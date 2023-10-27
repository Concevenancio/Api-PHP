<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Adventure Gaming a Games a Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary JavaScript plugins) -->
	<script src="js/bootstrap.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Adventure Gaming  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<script src="js/jquery.min.js"></script>

	<?php
	require_once 'header.php'
	?>

</head>

<body>
	<!-- banner -->
	<!-- Slider-starts-Here -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function() {
			$("#slider").responsiveSlides({
				auto: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				pager: true,
			});
		});
	</script>
	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides" id="slider">

				<div class="slid banner1">
					<div class="caption">
						<h3>Adventure Game - 343 industries - master chief</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec pellentesque ex. Morbi iaculis mi in varius auctor. Nullam feugiat erat ex, eu vehicula velit efficitur non.</p>
					</div>
				</div>


				<div class="slid banner2">
					<div class="caption">
						<h3>God of war - kratos - sony santa monica</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec pellentesque ex. Morbi iaculis mi in varius auctor. Nullam feugiat erat ex, eu vehicula velit efficitur non.</p>
					</div>
				</div>


				<div class="slid banner3">
					<div class="caption">
						<h3>Battlefield 4 - game - explosion - digital illusions</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec pellentesque ex. Morbi iaculis mi in varius auctor. Nullam feugiat erat ex, eu vehicula velit efficitur non.</p>
					</div>
				</div>

			</ul>
		</div>
	</div>

	<!-- content -->
	<div class="content">
		<div class="container">
			<div class="top-games">
				<h3>Top Games</h3>
				<span></span>
			</div>
			<div class="top-game-grids">
				<ul id="flexiselDemo1">
					<li>
						<div class="game-grid">
							<div class="game-grid" id="games-container">
								<!-- Aquí se mostrarán los juegos -->


								<script>
									const apiUrl = 'http://localhost/adventure_gaming-starter/Api/getproductos.php';

									fetch(apiUrl)
										.then(response => response.json())
										.then(data => {
											for (let i = 0; i < data.length; i++) {
												const game = data[i];

												const gameContainer = document.createElement('div');
												const titleElement = document.createElement('h2');
												titleElement.textContent = game.titulo;
												const descriptionElement = document.createElement('p');
												descriptionElement.textContent = game.descripcion;
												const imageElement = document.createElement('img');
												imageElement.src = game.imagen;

												gameContainer.appendChild(titleElement);
												gameContainer.appendChild(descriptionElement);
												gameContainer.appendChild(imageElement);

												document.getElementById('games-container').appendChild(gameContainer);
											}
										})
										.catch(error => {
											console.error('Error al obtener los datos: ', error);
										});
								</script>


							</div>
					</li>
					<li>
						<div class="game-grid">
							<h4>Racing Games</h4>
							<p>Nulla elementum nunc tempus.</p>
							<img src="assets/imagen/t1.jpg" class="img-responsive" alt="" />
						</div>
					</li>
					<li>
						<div class="game-grid">
							<h4>3D Games</h4>
							<p>Nulla elementum nunc tempus.</p>
							<img src="assets/imagen/t4.jpg" class="img-responsive" alt="" />
						</div>
					</li>
					<li>
						<div class="game-grid">
							<h4>Arcade Games</h4>
							<p>Nulla elementum nunc tempus.</p>
							<img src="assets/imagen/t2.jpg" class="img-responsive" alt="" />
						</div>
					</li>
				</ul>

				<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: {
								portrait: {
									changePoint: 480,
									visibleItems: 1
								},
								landscape: {
									changePoint: 640,
									visibleItems: 2
								},
								tablet: {
									changePoint: 768,
									visibleItems: 3
								}
							}
						});
					});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>
			</div>
		</div>
	</div>
	<!-- latest -->
	<div class="latest">
		<div class="container">
			<div class="latest-games">
				<h3>Latest Games</h3>
				<span></span>
			</div>
			<div class="latest-top">
				<div class="col-md-5 trailer-text">
					<div class="sub-trailer">
						<div class="col-md-4 sub-img">
							<img src="assets/imagen/v2.jpg" alt="img07" />
						</div>
						<div class="col-md-8 sub-text">
							<a href="#">Killzone: Shadow Fall for PlayStation 4 Reviews</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipi…</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sub-trailer">
						<div class="col-md-4 sub-img">
							<img src="assets/imagen/v1.jpg" alt="img07" />
						</div>
						<div class="col-md-8 sub-text">
							<a href="#"> Spiderman 2 Full Version PC Game</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipi…</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sub-trailer">
						<div class="col-md-4 sub-img">
							<img src="assets/imagen/v3.jpg" alt="img07" />
						</div>
						<div class="col-md-8 sub-text">
							<a href="#">Sega's: Jet Set for Andriod Play Store 4 Reviews</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipi…</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-7 trailer">
					<iframe src="https://www.youtube.com/embed/V5-DyoVlNOg?list=PLiVunv1pnIs2c0ORVqY60K3n8XMO9CoGp" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- poster -->
	<div class="poster">
		<div class="container">
			<div class="poster-info">
				<h3>Nunc cursus dui in metus efficitur, sit amet ullamcorper dolor viverra.</h3>
				<p>Proin ornare metus eros, quis mattis lorem venenatis eget. Curabitur eget dui euismod,
					varius nisl eu, pharetra lacus. Sed vehicula tempor leo. Aenean dictum suscipit magna vel
					tempus. Aliquam nec dui dolor. Quisque scelerisque aliquet est et dignissim. Morbi magna quam, molestie sed fermentum et, elementum at dolor</p>
				<a class="hvr-bounce-to-bottom" href="reviews.html">Read More</a>
			</div>
		</div>
	</div>
	<!-- x-box -->
	<div class="x-box">
		<div class="container">
			<div class="x-box_sec">
				<div class="col-md-7 x-box-left">
					<h2>XBOX 360</h2>
					<h3>Suspendisse ornare nisl et tellus convallis, non vehicula nibh convallis.</h3>
					<p>Proin ornare metus eros, quis mattis lorem venenatis eget. Curabitur eget dui
						euismod, varius nisl eu, pharetra lacus. Sed vehicula tempor leo. Aenean dictum suscipit magna vel tempus.
						Aliquam nec dui dolor. Quisque scelerisque aliquet est et dignissim.</p>
					<a class="hvr-bounce-to-top" href="reviews.html">Read More</a>
				</div>
				<div class="col-md-5 x-box-right">
					<img src="assets/imagen/xbox.jpg" class="img-responsive" alt="" />
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<?php
	require_once 'footer.php'
	?>