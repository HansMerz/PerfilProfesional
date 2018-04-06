<?php session_start(); ?>
<!DOCTYPE HTML>

<!--
	Ex Machina by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Vista</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />		
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="homepage">

	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1><a href="#">Vista de contacto</a></h1>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.html">Inicio</a></li>
							<li><a href="contacto.php">Contacto<i class="icono fa fa-envelope"></i></a></li>
						</ul>
					</nav>

			</div>
		</div>
	<!-- Header -->
		
	<!-- Banner -->
		<div id="banner">
			<div class="container">
			</div>
		</div>
	<!-- /Banner -->

	<!-- Main -->
		<div id="page">

			<!-- Extra -->
			<div id="marketing" class="container">
				<div class="row">
					<div class="3u">
						<section>
							<h2><b>Nombre:</b> <p><?php echo $_SESSION['nombre']; ?></p></h2>
							<h2><b>Apellido:</b> <p><?php echo $_SESSION['apellido']; ?></p></h2>
						</section>
					</div>
					<div class="3u">
						<section>
							<h2><b>Teléfono:</b> <p><?php echo $_SESSION['telefono']; ?></p></h2>
							<h2><b>E-mail:</b> <p><?php echo $_SESSION['correo']; ?></p></h2>
						</section>	
					</div>
					<div class="3u">
						<section>
							<h2><b>Asunto:</b> <p><?php echo $_SESSION['asunto']; ?></p></h2>
							<h2><b>Mensaje:</b> <p><?php echo $_SESSION['mensaje']; ?></p></h2>
						</section>
					</div>
					<div class="3u">
						<section>
							<a href="contacto.php">Regresar</a>	
						</section>
					</div>
				</div>
			</div>
			<!-- /Extra -->
				
			
		</div>
	<!-- /Main -->

		<div id="copyright" class="container">
			 <a href="https://www.facebook.com/erichhans.merz" target="_blanck">Erich Hans Merz Diaz</a> - ADSI - 2018
		</div>


	</body>
</html>