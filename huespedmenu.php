<?php
        include './includes/templates/header_usuarios.php';
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

<p>Bienvenido Huesped</p>
    <main class="contenedor seccion">
    <!---Agrega recepcionista-->
        <form class="formulario" method="POST" action="./A_recepcionista.php">
            <fieldset>
                
            <a href="Habitaciones_usuarios.php">Ver habitaciones</a>
                
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