<?php session_start();

$errores = "";
$enviado = false;

function comprobar_nombre_persona($nombre_usuario){
   //compruebo que el tamaño del string sea válido.
	$respuesta = "";
   if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
       	$respuesta .= "Ingrese un nombre entre 3 y 20 caracteres<br>";
   }

   //compruebo que los caracteres sean los permitidos
   $permitidos = "abcdefghijklmnñopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZáéíóú";
   for ($i=0; $i<strlen($nombre_usuario); $i++){
      if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
        $respuesta .= "Caracteres no permitidos en nombre o apellido<br>";
        break;
      }else{
        $nombre_usuario = filter_var($nombre_usuario, FILTER_SANITIZE_STRING);
      }
   }
   return $respuesta;

}
function comprobar_telefono($telefono){
	$respuesta = "";
  if(is_numeric($telefono)){
      if((strlen($telefono) == 10) || (strlen($telefono) == 7)) {
        $telefono = $telefono;
      }else {
      	$respuesta .= "Ingrese un teléfono con 10 o 7 digitos<br>";
      }
    }else {
      	$respuesta .= "El valor del telefono debe ser numérico<br>";
    }
    return $respuesta;
}
if(isset($_POST['enviar'])){
	$_SESSION['nombre'] = $_POST['nombre'];
	$_SESSION['correo'] = $_POST['correo'];
	$_SESSION['mensaje'] = $_POST['mensaje'];
	$_SESSION['apellido'] = $_POST['apellido'];
	$_SESSION['asunto'] = $_POST['asunto'];
	$_SESSION['telefono'] = $_POST['telefono'];

	$errores .= comprobar_nombre_persona($_SESSION['nombre']);
	$errores .= comprobar_nombre_persona($_SESSION['apellido']);
	if(!empty($_SESSION['asunto'])){
		$_SESSION['asunto'] = htmlspecialchars($_SESSION['asunto']);
		$_SESSION['asunto'] = trim($_SESSION['asunto']);
	}else{
		$errores .= "Por favor rellena el asunto<br>";
	}
	if(isset($_SESSION['telefono'])){
	$errores .= comprobar_telefono($_SESSION['telefono']);
	}else{
		$errores .= "El campo del teléfono debe estar digitado<br>";
	}
	if(!empty($_SESSION['correo'])){
		$_SESSION['correo'] = filter_var($_SESSION['correo'], FILTER_SANITIZE_EMAIL);

		if(!filter_var($_SESSION['correo'], FILTER_VALIDATE_EMAIL)){
			$errores .= "Por favor ingresa un correo válido<br>";
		}
		else{
			$_SESSION['correo'] = $_SESSION['correo'];
		}	
	}else{
		$errores .= "Por favor ingresa un correo<br>";
	}

	if(!empty($_SESSION['mensaje'])){
		$_SESSION['mensaje'] = htmlspecialchars($_SESSION['mensaje']);
		$_SESSION['mensaje'] = trim($_SESSION['mensaje']);
	}else{
		$errores .= "Por favor ingresa el mensaje <br>"; 
	}

	if(empty($errores)){
		$enviar_a = 'erichhans10@gmail.com';
		$mensaje_preparado = "De: ". $_SESSION['nombre'] ."\n";
		$mensaje_preparado .= "Correo: ". $_SESSION['correo'] . "\n";
		$mensaje_preparado .= "Mensaje: ". $_SESSION['mensaje'];
		//mailTo($enviar_a, $_SESSION['asunto'], $mensaje_preparado);
		$enviado = 'true';
	}else{
		$enviado = 'false';
	}
}


require 'contacto.view.php';

?>