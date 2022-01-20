<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <!------CSS---->
<link rel="stylesheet" href="estilos_login_home.css">
    <!------FONT AWESOME-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/689debdd99.js" crossorigin="anonymous"></script>
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Contacto</title>
</head>

<body>
<div id="bg_home">
    <header>
        <?php
        include ('partials/header_menu.php');
        $consulta_ok = "¡Mensaje enviada correctamente!";
        $consulta_bad = "Ups, ocurrio un error.";
        
        include ('partials/btn_contacto.php');
        ?>
    </header>
    <div  id="form_contacto">
        <h1>Contactanos</h1>
        <form action="db_consulta.php" method="post">
                <h3 class="consulta_form">Nombre: <input type="text" name="name_form" placeholder="Nombre" class="caja_nombre" required></h3>
                <h3 class="consulta_form">Email: <input type="email" name="email_form" placeholder="Email" class="caja_mail" required></h3>
                <h3 class="escriba_consulta">Escriba su consulta: <br>
                <textarea name="consulta" placeholder="Mensaje" cols="50" rows="15" required> </textarea></h3>
                <input type="submit" value="Enviar" id="b_enviar" style="font-size:13pt;color:white;">
            </form>    
        </div>
            <div id="consulta-ok" class="">           
            <h3> <?php
                    if (isset($_GET['e'])){  
                            echo $consulta_ok;
                    } ?>
            </h3> </div>

        <footer class="footer_home">
            <?php 
            include ('partials/footer_home.php');
            ?>
        </footer>

</body>
</html>