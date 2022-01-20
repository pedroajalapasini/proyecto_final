<?php
$nombre_reserva=$_POST['name_reserva'];
$tel_reserva=$_POST['phone_reserva'];
$mail_reserva=$_POST['email_reserva'];
$date_reserva=$_POST['date_reserva'];
$time_reserva=$_POST['time_reserva'];
$invitados_reserva=$_POST['invitados_reserva'];


$conexion_reservas = mysqli_connect("localhost", "root", "", "samurai_sushi") or exit ('no se pudo conectar a la base de datos');
mysqli_query($conexion_reservas,"INSERT INTO reservas VALUES (DEFAULT,'$nombre_reserva','$tel_reserva','$mail_reserva','$date_reserva','$time_reserva','$invitados_reserva')");

header("Location: reservas.php?e=ok");

mysqli_close($conexion_reservas);
?>