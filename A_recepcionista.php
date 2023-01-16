<?php
        include './includes/templates/header_admin.php';
        require './conexion.php';

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $nombre = $_POST['nombre'];
            $app = $_POST['app'];
            $apm = $_POST['apm'];
            $dir= $_POST['dir'];
            $email= $_POST['email'];
            $telefono= $_POST['telefono'];
            $tipoemp= $_POST['tipoemp'];
            $pass= $_POST['pass'];
            
            $exist = A_recepcionista($nombre,$app,$apm,$dir,$email,$telefono,$tipoemp,$pass);
    
            if($exist == "1"){
                print '<script language="JavaScript">';
                print 'alert("Este correo electronico ya esta registrado");';
                print "window.location= 'A_recepcionista.php'";
                print '</script>';
                ?>
                
              <!-- <h1 > AUTENTIFICACION</h1> -->
              <?php
                print $exist;
            }else{
                  print '<script language="JavaScript">';
                  print 'alert("Registrado con exito");';
                  print "window.location= 'adminmenu.php'";
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
    <!---Agrega recepcionista-->
        <form class="formulario" method="POST" action="./A_recepcionista.php">
            <fieldset>
                <h1>Agregar recepcionista</h1>
                
                    
                    <div class="input-contenedor">
                    <i class="fas fa-envelope icon"></i>
                    <input type="text" name="nombre" placeholder="Nombre (s)">
                    
                    </div>
                    
                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="text" name="app" placeholder="Apellido paterno">
                    </div>

                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="text" name="apm" placeholder="Apellido materno">
                    </div>


                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="text" name="dir" placeholder="Domicilio">
                    </div>
                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="text" name="email" placeholder="Correo electrónico">
                    </div>

                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="tel" name="telefono" placeholder="Celular">
                    </div>

                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="text" name="tipoemp" placeholder="Tipo empleado">
                    </div>

                    <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" name="pass" placeholder="Contraseña">
                </div>

                    <input type="submit" value="Agregar" class="button">
                    
                
            </fieldset>
            </form>
    <!---ENDFormulario-->
    </main>
<?php
      include './includes/templates/footer_admin.php';
    ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>