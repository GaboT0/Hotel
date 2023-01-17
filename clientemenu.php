<?php
        //include './includes/templates/header.php';
        require './conexion.php';
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel 5 estrellas</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
<h1>Bienvenido Cliente</h1>
    <main class="contenedor seccion">
    <!---Menu-->
    <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <img loading="lazy" src="build/img/agregar.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Reservar</h3>
                    
                    <a href="anuncio.php" class="boton-amarillo-block">
                        Reservar
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->
            <div class="anuncio">
                <picture>
                    <img loading="lazy" src="build/img/menos.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Cancelar</h3>
                    
                    <a href="anuncio.php" class="boton-amarillo-block">
                        Cancelar
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->
            <div class="anuncio">
                <picture>
                    <img loading="lazy" src="build/img/update.png" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Modificar</h3>
                    
                    <a href="M_Huesped.php" class="boton-amarillo-block">
                        Modificar
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->
            
        </div> <!--.contenedor-anuncios-->

    <!---ENDMenu-->
    </main>
<?php
      include './includes/templates/footerad.php';
    ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>