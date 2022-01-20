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
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <title>Home</title>
</head>
<body >        
    <div id="bg_home">
    <header> 
            <?php
            include ('partials/header_menu.php');
            ?> 
            
            <div class="btn_principal">
                <nav>
                    <ul>
                    <li><i class="fas fa-book-open"  style="font-size: 15px;"></i> <a href="menu.php?nombre=promos">Menú</a></li>
                    <li><i class="fas fa-map-marker-alt" style="font-size: 15px;"></i> <a href="locales.php?nombre=palermo">Locales</a></li>
                    <li><i class="far fa-calendar-alt"  style="font-size: 15px;"></i> <a href="reservas.php">Reservas</a></li>
                    <li><i class="fas fa-paper-plane" style="font-size: 15px;"></i> <a href="contacto.php">Contacto</a></li>
                    </ul> 
                    <form action="" method="post">
                    <input type="search" name="buscar" id=" keywords" class="buscador" placeholder=Buscar>
                    <button class="btn_buscador"><i class="fas fa-search" style="font-size: 15px;"></i></button></form>          
                </nav>
            </div>
        </header>

        <div id="img_principal" class="animate__backInLeft">
            <img src="imagenes\barco_sushi.jpg" alt="gif">
        </div>

        <div id="img_promo">
        <a href="imagenes/img_promo.png" data-lightbox="image-1"><img src="imagenes/img_promo.png" alt="promo30"></a>
        </div>
        <script>
<script>
    lightbox.promo30({
    'resizeDuration': 800,
    'wrapAround': false,
    'AlwaysShowNavOnTouchDevices': true
    })
</script>
    
        <div id="text_pie">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint aliquam, Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Unde, voluptatum. </p>
        </div>
        <div id="btn_pie">
                <ul>
                    <li><a href="ups.php"><i class="fab fa-instagram" style="font-size: 15px;  font-weight: bolder"></i> <span  class="insta">Instagram </span></a></li>
                    <li><a href="reservas.php"><i class="far fa-calendar-alt" style="font-size: 15px; font-weight: bolder"></i> <span class="reservas"> Reservas </span></a></li>
                    <li><a href="ups.php" ><i class="fas fa-building" style="font-size: 15px; font-weight: bolder"></i> <span class="nosotros"> Nosotros </span></a></li>
                    <li><a href="contacto.php" ><i class="fab fa-whatsapp" style="font-size: 15px; font-weight: bolder"></i> <span  class="contactos"> Contacto </span></a></li>
                </ul>
        </div>
        <footer class="footer_home">
                    <?php include ('partials/footer_home.php') ?>
    </footer>
</div>

<script src="https://kit.fontawesome.com/689debdd99.js" crossorigin="anonymous"></script>
<script src="./js/lightbox-plus-jquery.js"></script>
</body>
</html>