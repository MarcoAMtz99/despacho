<?php 

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mail = $_POST['email'];
$descripcion = $_POST['desccripcion'];



if(is_numeric($telefono)) {
        // echo "$entrante es un numero";
        if ($nombre=='' || $telefono =='') {
			header("https://www.coopertura.com/contacto.php");
			exit();
		}
		
		if (ctype_alpha($descripcion ||ctype_alpha($nombre) ) ) {
				

		}else{
 			header("https://www.coopertura.com/contacto.php");
		}

		$para      = 'david.moreno@coopertura.com';
		$titulo    = 'Coopertura Contacto ';
		$mensaje   = $descripcion;
		$mensaje   .=  "\r\n" .$nombre;
		$mensaje   .=  "\r\n" .$telefono;
		$cabeceras = 'From: info@coopertura.com' . "\r\n" .
		    'Reply-To: info@coopertura.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();
		    try {
		    	mail($para, $titulo, $mensaje, $cabeceras);
		    	header("https://www.coopertura.com/contacto.php");
		    } catch (Exception $e) {
		    	header("https://www.coopertura.com/index.php");
		    }
				


    }
   		 else {
        header("http://www.coopertura.com/contacto.php");
		exit();
    }
  


?>