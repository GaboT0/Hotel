<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel 5 estrellas</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    
    <header class="header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a class="logo" href="index.html">
                    <h1 class="logo__nombre">Hotel <span class="logo__bold">5 Estrellas</span></h1>
                </a>

                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="build/img/dark-mode.svg">
                    <nav class="navegacion">
                        <a href="nosotros.html">Nosotros</a>
                        <a href="anuncios.html">Habitaciones</a>
                        <a href="registro.php">Registrarse</a>
                        <a href="contacto.html">Contacto</a>
                    </nav>
                </div>
            </div> <!--.barra-->
        </div>
    </header>

<!---Login-->
    <form class="formulario">
        
        <h1>Login</h1>
        <div class="contenedor">
            
            <div class="input-contenedor">
            <i class="fas fa-envelope icon"></i>
            <input type="text" placeholder="Correo Electronico">
            
            </div>
            
            <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" placeholder="Contraseña">
            
            </div>
            <input type="submit" value="Login" class="button">
            <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
            <p>¿No tienes una cuenta? <a class="link" href="registro.php">Registrate </a></p>
        </div>
        </form>
<!---ENDFormulario-->

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>

        <p class="copyright">Todos los derechos Reservados 2021 &copy;</p>
    </footer>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>