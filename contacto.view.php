<!DOCTYPE HTML>
<!--
	Ex Machina by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Perfil</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>		
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />		
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function(){

				$("#limpiar").click(function(){
					$("#input, #textarea").val("");
				});

			});
		</script>
	</head>
	<body class="homepage">

	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1><a href="#">Contáctame</a></h1>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.html">Inicio</a></li>
							<li class="active"><a href="contacto.php">Contacto<i class="icono fa fa-envelope"></i></a></li>
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
							<form id="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="formulario">					
							<input type="text" required="true" id="input" value="<?php if($enviado == true && empty($errores)){echo "";}else{ echo @$_SESSION['nombre'];} ?>" name="nombre" placeholder="Nombre:">
							<input type="text" required="true" id="input" name="apellido" value="<?php if($enviado == true && empty($errores)){echo "";}else{ echo @$_SESSION['apellido'];} ?>" placeholder="Apellido:">
						</section>
					</div>
					<div class="3u">
							<input type="number" required="true" id="input" value="<?php if($enviado == true && empty($errores)){echo "";}else{ echo @$_SESSION['telefono'];} ?>" name="telefono" placeholder="Teléfono:">
							<input type="email" required="true" id="input" name="correo" value="<?php if($enviado == true && empty($errores)){echo "";}else{ echo @$_SESSION['correo'];} ?>" placeholder="Correo:">
					</div>
					<div class="3u">
						<section>
							<input type="text" name="asunto" id="input" placeholder="Asunto:" value="<?php if($enviado == true && empty($errores)){echo "";}else{ echo @$_SESSION['asunto'];} ?>">
							<textarea name="mensaje"  id="textarea" cols="30" rows="10" required="true" placeholder="Escriba el mensaje aquí..."><?php if($enviado == true && empty($errores)){echo "";}else{ echo @$_SESSION['mensaje'];} ?></textarea>
						</section>
					</div>
					<div class="3u">
						<section>
							<input type="submit" value="Enviar" id="btn" name="enviar" class="button">
							<?php if(!empty($errores)): ?>
								<p><?php echo $errores;?></p>
							<?php elseif($enviado): ?>
								<p>Enviado correctamente</p>
								<?php header('Location: vista.php'); ?>	
							<?php endif; ?>		
							<button id="limpiar" class="button">Limpiar </button>
							</form>
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