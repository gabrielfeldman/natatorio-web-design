<?php
//Guardado de los datos del formulario 
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$consulta = $_POST['consulta'];
//$servicio = $_POST['opcionesSelect'];

//Armado del mail
$to = 'testeosypracticas@gmail.com';
$email_subject = "Nuevo mensaje: de la web"; 
$email_body = "Haz recibido un nuevo mensaje 
              \n Nombre: $nombre 
              \n Correo: $email 
              \n Mensaje: \n $consulta \n"; 
$headers = "From: $email";

//Envió del mail
mail($to, $email_subject, $email_body, $headers); 
echo '¡Nos comunicaremos con usted a la brevedad!';
?>
<br>
<br>
<button><a href="../index.html">Volver</a></button>