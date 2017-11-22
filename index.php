<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Muñoz García Economistas</title>

	<!-- CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
	<link href="assets/css/animate.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css"/>
	
    <!-- Custom styles CSS -->
	<link href="assets/css/style.css" rel="stylesheet" media="screen">
    
    <link rel="stylesheet" type="text/css" href="assets/js/slick-1.8.0/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assets/js/slick-1.8.0/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/munozgarcia.css"/>
    
    <link rel="icon" type="image/png" href="assets/images/favicon3.png" />
    
    <script src="assets/js/modernizr.custom.js"></script>
</head>
<body>

	<!-- Preloader -->

	<div id="preloader">
		<div id="status"></div>
	</div>

	<!-- Home start -->

	<?php include('includes/home.php'); ?>

	<!-- Home end -->

	<!-- Navigation start -->

	<header class="header">

		<nav class="navbar navbar-custom" role="navigation">

			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="Muñoz García" id="logo-cabecera" /></a>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
                        <li><a href="#nuestro-despacho"><span class="negro light">Nuestro</span><span class="naranja negrita">Despacho</span></a></li>
                        <li><a href="#area-fiscal"><span class="negro light">Area</span> <span class="naranja negrita">Fiscal</span></a></li>
                        <li><a href="#area-laboral"><span class="negro light">Area</span> <span class="naranja negrita">Laboral</span></a></li>
                        <li id="opcion-fincas"><a href="#fincas"><span class="negro light">Administración de</span> <span class="naranja negrita">Fincas</span></a></li>
                        <li><a href="#contacto"><span class="naranja">Contacto</span></a></li>
                        <li><a href="#otros-servicios"><span class="naranja">Otros Servicios</span></a></li>
					</ul>
				</div>

			</div><!-- .container -->

		</nav>

	</header>

	<!-- Navigation end -->

    <!--Nuestro despacho start -->
	<?php include("includes/nuestro-despacho.php"); ?>
	<!-- Nuestro despacho end -->

    <!-- Area Fiscal -->
    <?php include("includes/area-fiscal.php"); ?>
    <!-- Area Fiscal end -->

    <!-- Area laboral -->
    <?php include("includes/area-laboral.php"); ?>
    <!-- Area laboral end -->

    <!-- fincas -->
    <?php include("includes/fincas.php"); ?>
    <!-- fincas end -->

    <!-- contacto -->
    <?php include("includes/contacto.php"); ?>
    <!-- contacto end -->

    <!-- Otros servicios -->
    <?php include("includes/otros-servicios.php"); ?>
    <!-- Otros servicios end -->
    
	

	<!-- Footer start -->
    
	<!-- Footer end -->

    <?php include("includes/aviso-legal.php"); ?>
    <?php include("includes/politica-privacidad.php"); ?>
    <?php include("includes/galeria.html"); ?>

	<!-- Scroll to top -->

	<div class="scroll-up">
		<a href="#home"><i class="fa fa-angle-up"></i></a>
	</div>
    
    <!-- Scroll to top end-->

	<!-- Javascript files -->

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.parallax-1.1.3.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.easypiechart.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.cbpQTRotator.js"></script>
	<script src="assets/js/custom.js"></script>
    <script type="text/javascript" src="assets/js/slick-1.8.0/slick/slick.min.js"></script>
    <script type="text/javascript" src="assets/js/munozgarcia.js"></script>

</body>
</html>