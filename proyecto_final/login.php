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
    <title>Entrar</title>
</head>

<body>
<div id="bg_home">
    <?php include ('partials/header_login.php');
                include ('partials/btn_volver.php');
    ?>
    <div class="titulo_form">
        <h2>Ingrese</h2>
    </div>
    <form action="db_login.php" method="POST"  id="form_login" class="animate__zoomInDown">
        <input type="email" name="email" id="insert_email" placeholder="Ingrese su email"  >
        <input type="password" name="password" id="insert_password" placeholder="Ingrese su contraseña" require>
        <input type="submit" value="iniciar" id="btn_enviar">
</form>
    <?php include ('partials/footer.php') ?>

    </div>
</body>
</html>