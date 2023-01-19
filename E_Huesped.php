<?php
        include './includes/templates/header_admin.php';
        require './conexion.php';

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $email= $_POST['email'];
            $pass= $_POST['pass'];
            
            $exist = E_Huesped($email,$pass);
            
            if($exist != "0"){
                print '<script language="JavaScript">';
                  print 'alert("Eliminacion exitosa");';
                  print "window.location= 'adminmenu.php'";
                  print '</script>';
            }else{

                print '<script language="JavaScript">';
                print 'alert("Este usuario o email no eiste");';
                print "window.location= 'E_recepcionista.php'";
                print '</script>';
            }
        }

        ?>
    <main class="contenedor seccion">
    <!---Agrega recepcionista-->
        <form class="formulario" method="POST" action="./E_Huesped.php">
            <fieldset>
                <h1>Eliminar Huesped</h1>
                
                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="text" name="email" placeholder="Correo electrónico">
                    </div>

                    
                    <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" name="pass" placeholder="Contraseña">
                </div>

                    <input type="submit" value="Eliminar" class="button">
                    
                
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