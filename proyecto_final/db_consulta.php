<?php
$nombre_form=$_POST['name_form'];
$mail_form=$_POST['email_form'];
$mensaje_form=$_POST['consulta'];


$cuerpo_mail= "Nombre :".$nombre_form. "\r\n"."Correo eletrónico: ".$mail_form."\r\n"."Mensaje: ".$mensaje_form;

mail('suporte@samuraisushi.com', 'Mensaje enviado de samuraisushi.com', $cuerpo_mail);


$conexion_form = mysqli_connect("localhost", "root", "", "samurai_sushi") or exit ('no se pudo conectar a la base de datos');
mysqli_query($conexion_form, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$mail_form', '$mensaje_form')")  ;


header("Location: contacto.php?e=ok");

mysqli_close($conexion_form);
?>