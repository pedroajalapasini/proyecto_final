<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------CSS---->
    <link href="css/lightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="estilos_login_home.css">
    <!------FONT AWESOME-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
    <title>Reservas</title>
</head>

<body>
<div id="bg_home">
<header>
        <?php
        include ('partials/header_menu.php');
        include ('partials/btn_reserva.php');
        $reserva_ok = "¡Hemos recibido su reserva! Estamos ansiosos por verte.";
        $reserva_bad = "Ups, ocurrio un error.";
        ?>
    </header>
    <div  id="form_reservas">
    <h1>Reserve su mesa:</h1>
    <div class="img_invitacion">
        <a href="imagenes\invitacion.png" data-lightbox="image-1"><img src="imagenes\invitacion.png" alt="img_invitacion"></a>
    </div>
    <script>
    lightbox.img_invitacion({
    'resizeDuration': 800,
    'wrapAround': false,
    'AlwaysShowNavOnTouchDevices': true
    })
</script>
            <form action="db_reserva.php" method="post">
                <h3 class="consulta_form">Nombre: <input type="text" name="name_reserva" placeholder="Nombre" class="caja_nombre" required></h3>
                <h3 class="consulta_form">Telefono: <input type="text" name="phone_reserva" placeholder="Telefono" class="caja_nombre" required>
                <h3 class="consulta_form">Email: <input type="email" name="email_reserva" placeholder="Email" class="caja_mail" required></h3>
                <h3 class="consulta_form">Fecha: <input type="date" name="date_reserva" placeholder="Email" class="caja_mail" required></h3>
                <h3 class="consulta_form">Horario: <input type="time" name="time_reserva" placeholder="Horario" class="caja_mail" required></h3>
                <h3 class="consulta_form">Invitados: <select type="number" name="invitados_reserva" placeholder="Invitados" class="caja_invitados" required>               
                    <option class="selector" value="0">-</option>
                    <option class="selector" value="1" >1</option>
                    <option  class="selector" value="2">2</option>
                    <option class="selector" value="3" >3</option>
                    <option  class="selector" value="4">4</option>
                    <option class="selector" value="5" >5</option>
                    <option  class="selector" value="6">6</option>
                    <option class="selector" value="7" >7</option>
                    <option class="selector" value="8" >8</option> </h3>

                <input type="submit" value="Enviar" id="b_enviar" style="font-size:13pt;color:white;">
            </form>
    </div>
    <div id="reserva-ok">
    <h3 > <?php
        if (isset($_GET['e'])){  
            echo $reserva_ok;
        }
        ?>
        </h3></div>
    
    <footer class="footer_home">
            <?php 
            include ('partials/footer_home.php')
            ?>
        </footer>
    </div>
    <!-- SCRIPTs -->
    <script src="./js/lightbox-plus-jquery.js"></script>
        <script src="https://kit.fontawesome.com/689debdd99.js" crossorigin="anonymous"></script>
</body>
</html>