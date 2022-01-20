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
    <title>Menú</title>
</head>
<body>
<div id="bg_home">
<header>
        <?php
                include ('partials/header_menu.php');
            ?>
            <div id="btn_menu">
                    <ul>
                        <li><a href="menu.php?nombre=promos"><i class="fas fa-percentage" style="font: size 15px;"></i> Promociones</a></li>
                        <li><a href="menu.php?nombre=rolls"><i class="fas fa-hockey-puck" style="font: size 15px;"></i> Rolls</a></li>
                        <li><a href="menu.php?nombre=tablas"><i class="fas fa-utensils" style="font: size 15px;"></i> Tablas</a></li>
                        <li><a href="menu.php?nombre=bebidas" style="font: size 15px;"><i class="fas fa-glass-cheers"></i> Bebidas</a></li>
                    </ul>        
            </div>
        </header>
            <?php
                        switch ($_GET['nombre']){
                            case 'promos':
                                $img_uno='imagenes\promo_festday.png';
                                $img_dos= 'imagenes\promo_combinado.png';
                                break;
            
                            case 'rolls':
                                $img_uno='imagenes\sushiman.png';
                                $img_dos= 'imagenes\carta_rolls.png';
                                break;
            
                            case 'tablas':
                                $img_uno='imagenes\plato_sushi_concepto.jpg';
                                $img_dos='imagenes\plato_concepto_sushi.jpg';
                                break;
            
                                case 'bebidas':
                                    $img_uno='imagenes\menu_bebidas.png';
                                    $img_dos='imagenes\cerveza_bebidas.png';
                                    break;
                        }             
                        ?>
            <div id="img_uno">
                <img src="<?php echo $img_uno ?>" alt="" class="img_izquierda">
            </div>
            <div id="img_dos">
                <img src="<?php echo $img_dos ?>" alt="img_dos" class="img_derecha">
            </div>
            <footer class="footer_home">
            <?php include ('partials/footer_home.php') ?>
            </footer>
            </div>
</body>
</html>