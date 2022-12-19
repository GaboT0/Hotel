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
                        <a href="login.php">Iniciar Sesion</a>
                        <a href="contacto.html">Contacto</a>
                    </nav>
                </div>
            </div> <!--.barra-->
        </div>
    </header>

<!---Registro-->
    <form class="formulario">
    
        <h1>Registrate</h1>
         <div class="contenedor">
         
            <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="text" placeholder="Nombre(s)">
            </div>

            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="Apellido Paterno">
             </div>
            
             <div class="input-contenedor">
             <i class="fas fa-envelope icon"></i>
             <input type="text" placeholder="Email">
             </div>

             <div class="input-contenedor">
             <i class="fas fa-key icon"></i>
             <input type="text" placeholder="Domicilio">
             </div>

             <div class="input-contenedor">
             <i class="fas fa-key icon"></i>
             <input type="tel" placeholder="Celular">
             </div>
             
             <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
             <input type="password" placeholder="Contraseña">
             </div>


             <input type="submit" value="Registrate" class="button">
             <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
             <p>¿Ya tienes una cuenta?<a class="link" href="login.php">Iniciar Sesion</a></p>
         </div>
        </form>

<!---ENDFormulario-->

    <div class = "col-md-8 col-md-offset-2">
        <table class = "table table-bordered table-resposive">
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>ID</td>
                <td>ID</td>

                
















                <?php
      include './includes/templates/footer.php';
    ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>