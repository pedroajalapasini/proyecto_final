<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------CSS---->
    <link rel="stylesheet" href="./css/lightbox.min.css">
    <link rel="stylesheet" href="estilos_login_home.css">
    <!------FONT AWESOME-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Locales</title>
</head>
<body>
<div id="bg_home">
    <header>
        <?php
        include ('partials/header_menu.php');
        include ('partials\btn_locales.php');

        $horario= 'Lunes a Viernes 11am a 23pm, Sábados y Domingos de 12pm a 2am';
        ?>
    </header>
                <div id="menu_locales">
                    <ul>
                    <li><i class="fab fa-product-hunt"  style="font-size: 15px;"></i> <a href="locales.php?nombre=palermo">Palermo</a></li> 
                    <li><i class="fab fa-opera"  style="font-size: 15px;"></i> <a href="locales.php?nombre=olivos">Olivos</a></li>
                    <li><i class="fab fa-cuttlefish" style="font-size: 15px;"></i> <a href="locales.php?nombre=caseros">Caseros</a></li>
                    </ul>
                </div>
                
    <!--  PHP GET -->
        <?php
        if (isset($_GET['nombre'])){

            switch ($_GET['nombre']){
                    case 'palermo':
                        $local= 'Palermo';
                        $numero='(11)521468555';
                        $mail='palermo@samuraisushi.com';
                        $dire= 'Calle Samurai 123';
                        $img='imagenes\local_sushi3.png';
                        break;
                    case 'olivos':
                        $local= 'Olivos';
                        $numero= '(11) 45262200';
                        $mail='olivos@samuraisushi.com';
                        $dire= 'Calle Japon 123';
                        $img= 'imagenes\local_sushi2.jpg';
                        break;
                    case 'caseros':
                        $local= 'Caseros';
                        $numero= '(11) 451422666';
                        $mail='caseros@samuraisushi.com';
                        $dire= 'Calle Sashimi 123';
                        $img= 'imagenes\local_sushi1.jpg';
                    }
                }
                    ?>
                    <div id="contenedor_sucursal">
                <h3> <?php echo $local ?> </h3>  
                <ul>
                <li><i class="fas fa-phone-alt"></i> Numero: <?php echo $numero ?></li>
                <li><i class="fas fa-at"></i> Email: <?php echo $mail ?></li>
                <li><i class="fas fa-map-pin"></i> Dirección: <?php echo $dire ?></li>
                <li><i class="far fa-clock"></i> Horarios: <?php echo $horario ?></li>
            </ul>
                <div class="img_local">
                    <img src="<?php echo $img ?>" alt="" class="animate__fadeInUpBig">
                </div>
                </div>
                <footer class="footer_home">
                    <?php include ('partials/footer_home.php') ?>
    </footer>
            </div>
            <!-- SCRIPTS -->
<script src="./js/lightbox.min.js"></script>
<script src="https://kit.fontawesome.com/689debdd99.js" crossorigin="anonymous"></script>
</body>
</html>