<?php
$email_registro=$_POST [ 'email' ];
$password_registro=$_POST [ 'password' ];

$datos_conexion = mysqli_connect("localhost", "root", "", "samurai_sushi");

mysqli_query($datos_conexion, "INSERT INTO usuarios VALUES (DEFAULT, '$email_registro', '$password_registro')")  ;

$consulta="SELECT*FROM usuarios WHERE email='$usuario' and password='$password' ";
$resultado= mysqli_query($datos_conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    include ("registro.php?e=bad");
} else{
    header ('Location:home.php');
}
mysqli_close($datos_conexion);

?>