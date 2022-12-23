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
<h1>Administrador</h1>
    <main class="contenedor seccion">
    <!---Login-->
        <form class="formulario" method="POST" action="./validarad.php">
            <fieldset>
                <h1>Login</h1>
                
                    
                    <div class="input-contenedor">
                    <i class="fas fa-envelope icon"></i>
                    <input type="text" name="Correo" placeholder="Correo Electronico">
                    
                    </div>
                    
                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="password" name="password" placeholder="Contraseña">
                    
                    </div>
                    <input type="submit" value="Login" class="button">
                    <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
                    <p>¿No tienes una cuenta? <a class="link" href="registro.php">Registrate </a></p>
                
            </fieldset>
            </form>
    <!---ENDFormulario-->
    </main>
<?php
      include './includes/templates/footerad.php';
    ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>