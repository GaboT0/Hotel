<?php
        include './includes/templates/header_usuarios.php';
        require './conexion.php';

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
           
        $email= $_POST['email'];
        $exist = B_recepcionista($email);
            if($exist == "1"){
                print '<script language="JavaScript">';
                print 'alert("Usuario no encontrado");';
                print "window.location= 'M_recepcionista.php'";
                print '</script>';
            }else{
                  print '<script language="JavaScript">';
                  print 'alert("Usuario encontrado");';
                 // print "window.location= 'adminmenu.php'";
                  print '</script>';
                  //header("location:login.php");
                ?>
                
              <!-- <h1 >ERROR DE AUTENTIFICACION</h1> -->
              <?php
            }

        }

        ?>
    <main class="contenedor seccion">

    
    <!---Agrega recepcionista-->
        <form class="formulario" method="POST" action="./M_Huesped.php">
      
            <p>

Buscar usuario Ingresa correo electronico: 
<input type="search" name="email" size="200" maxlength="200">

<input type="submit" class="boton-amarillo" value="Buscar">

</p>
    </form>


    <h2>Modificar Usuario</h2>
   

        <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
          $conn=ConexionBD();
          $query="SELECT * FROM Huesped where correo='$email';";
          $res=sqlsrv_query($conn,$query);
          while ($row=sqlsrv_fetch_array($res)){
        
        
        ?>

        <form class="formulario" method="POST" action="./modifica_h.php">
                    <div class="input-contenedor">
                    <i class="fas fa-envelope icon"></i>
                    <p>ID Usuario</p>
                    <input type="text" readonly="readonly"  name="id" value="<?=$row[0]?>" >
                    </div>
      
                    <div class="input-contenedor">
                    <i class="fas fa-envelope icon"></i>
                    <p>Nombre</p>
                    <input type="text" name="nombre" value="<?=$row[1]?>" >
                    
                    </div>
                    
                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <p>Apellido Paterno</p>
                    <input type="text" name="app" value="<?=$row[2]?>">
                    </div>

                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <p>Apellido Materno</p>
                    <input type="text" name="apm" value="<?=$row[3]?>">
                    </div>


                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <p>Dirección</p>
                    <input type="text" name="dir" value="<?=$row[4]?>">
                    </div>

                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <p>Teléfono</p>
                    <input type="tel" name="telefono" value="<?=$row[6]?>">
                    </div>


                    <input type="submit" value="Modificar" class="button">

                 


        <?php
        }
      }
        ?>


    </form>

                    
                
          
            <!--- </form>-->
    <!---ENDFormulario-->
    </main>
<?php
      include './includes/templates/footer_admin.php';
    ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>