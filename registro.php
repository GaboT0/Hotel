
    <?php
    include './includes/templates/header.php';
    require './conexion.php';
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nombre = $_POST['nombre'];
        $app = $_POST['app'];
        $apm = $_POST['apm'];
        $dir= $_POST['dir'];
        $email= $_POST['email'];
        $telefono= $_POST['telefono'];
        $pass= $_POST['pass'];
        
        $exist = InsertNewReg($nombre,$app,$apm,$dir,$email,$telefono,$pass);

        if($exist == "1"){
            print '<script language="JavaScript">';
            print 'alert("Este correo electronico ya esta registrado");';
            print "window.location= 'registro.php'";
            print '</script>';
            ?>
            
          <!-- <h1 > AUTENTIFICACION</h1> -->
          <?php
            print $exist;
        }else{
              print '<script language="JavaScript">';
              print 'alert("Registrado con exito");';
              print "window.location= 'login.php'";
              print '</script>';
              //header("location:login.php");
            ?>
            
          <!-- <h1 >ERROR DE AUTENTIFICACION</h1> -->
          <?php
          echo $exist;
        }
    }
       
    ?>
    <main class="contenedor seccion">
<!---Registro-->
        <form class="formulario" method="POST" action="./registro.php">
            <fieldset>
                <h1>Registrate</h1>
                
                
                    <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <input type="text" name="nombre" placeholder="Nombre(s)">
                    </div>

                    <div class="input-contenedor">
                        <i class="fas fa-user icon"></i>
                        <input type="text" name="app" placeholder="Apellido Paterno">
                    </div>

                    <div class="input-contenedor">
                        <i class="fas fa-user icon"></i>
                        <input type="text" name="apm" placeholder="Apellido Materno">
                    </div>
                
                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="text" name="dir" placeholder="Domicilio">
                    </div>

                    <div class="input-contenedor">
                    <i class="fas fa-envelope icon"></i>
                    <input type="text" name="email" placeholder="Email">
                    </div>

                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="tel" name="telefono" placeholder="Celular">
                    </div>
                    
                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="password" name="pass" placeholder="Contraseña">
                    </div>


                    <input type="submit" value="Registrate" class="button">
                    <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
                    <p>¿Ya tienes una cuenta? <a class="link" href="login.php">Iniciar Sesion</a></p>
                
                <fieldset>
            </form>
        </main>
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