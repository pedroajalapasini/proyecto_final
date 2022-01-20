<?php
    $usuario= $_POST['email'];
    $password = $_POST['password'];
    session_start();
    $_SESSION ['email']=$usuario;

    $conexion=  mysqli_connect("localhost", "root", "", "samurai_sushi");

    $consulta="SELECT*FROM usuarios WHERE email='$usuario' and password='$password' ";
    $resultado= mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas){
        header("Location:home.php");
    } else{
        ?>
        <?php
        include ("registro.php");
    ?>
    <?php
    }
mysqli_free_result($resultado);
mysqli_close($conexion);