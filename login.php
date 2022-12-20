<?php
        include './includes/templates/header.php';
        require './conexion.php';
        ?>
    <main class="contenedor seccion">
    <!---Login-->
        <form class="formulario" method="POST" action="./validar.php">
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
      include './includes/templates/footer.php';
    ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>