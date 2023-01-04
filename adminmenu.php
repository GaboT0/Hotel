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
<h1>Bienvenido Administrador</h1>
    <main class="contenedor seccion">
    <!---Menu-->
    <div class="contenedor-anunciosad">
            <div class="anuncio">
                <picture>
                    <img loading="lazy" src="build/img/agregar.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Agregar (?)</h3>
                    
                    <a href="anuncio.html" class="boton-amarillo-block">
                        Agregar
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->
            <div class="anuncio">
                <picture>
                    <img loading="lazy" src="build/img/menos.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Eliminar (?)</h3>
                    
                    <a href="anuncio.html" class="boton-amarillo-block">
                        Eliminar
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->
            <div class="anuncio">
                <picture>
                    <img loading="lazy" src="build/img/update.png" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Modificar (?)</h3>
                    
                    <a href="anuncio.html" class="boton-amarillo-block">
                        Modificar
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->
            <div class="anuncio">
                <picture>
                    <img loading="lazy" src="build/img/search.png" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Buscar (?)</h3>
                    
                    <a href="anuncio.html" class="boton-amarillo-block">
                        Buscar
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