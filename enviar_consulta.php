<?php 

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$comentarios = $_POST['comentarios'];

$cuerpo_mail = "Nombre: ".$nombre."\r\n"
    ."Apellido: ".$apellido."\r\n"
    ."E-mail: ".$mail."\r\n"
    ."Comentarios: ".$comentarios;

mail("jmgomezn8@gmail.com", "Mensaje de práctica", $cuerpo_mail);

$conexion = mysqli_connect("localhost", "root", "", "php_inicial") or exit ("No se pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO contacto VALUES(DEFAULT, '$nombre', '$apellido', '$mail', '$comentarios')");

mysqli_close($conexion);

header("Location: contacto.php?e=ok");

?>