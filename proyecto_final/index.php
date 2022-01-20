<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------CSS---->
    <link rel="stylesheet" href="estilos_login_home.css">
    <!------FONT AWESOME-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title> SAMURAI SUSHI </title>

    <body>
        <div id="bg_home">
    <?php include ('partials/header_login.php') ?>
    <div id="btn_login">
        <nav class="animate__zoomInDown">
            <li><button class="bt_login"><a href="login.php" class="btn_entrar">Entrar</a></button></li>
            <li><button class="bt_login"><a href="registro.php" class="btn_registro">Registrarse</a></button></li>
        </nav>
    </div>

    <?php include ('partials/footer.php') ?>

</div>
</body>
</html>