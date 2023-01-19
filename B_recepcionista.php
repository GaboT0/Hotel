<?php
        include './includes/templates/header_admin.php';
        require './conexion.php';

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
           
        $email= $_POST['Correo'];
            $exist = B_recepcionista($email);
            
    
            if($exist == "1"){
                print '<script language="JavaScript">';
                print 'alert("Usuario no encontrado");';
                print "window.location= 'B_recepcionista.php'";
                print '</script>';
                ?>
                
              <!-- <h1 > AUTENTIFICACION</h1> -->
              <?php
                print $exist;
            }else{
                  print '<script language="JavaScript">';
                  print 'alert("Usuario encontrado");';
                 // print "window.location= 'adminmenu.php'";
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
        <form class="formulario" method="POST" action="./B_recepcionista.php">
      
            <p>

            Buscar usuario Ingresa correo electronico:
<input type="search" name="Correo" size="200" maxlength="200">

<input type="submit" class="boton-amarillo" value="Buscar">

</p>
    </form>


    <h2>Usuario</h2>
    <!-- <table>
        <th>Id&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Nombre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Apellido Paterno&nbsp;&nbsp;&nbsp;</th>
        <th>Apellido MAterno&nbsp;&nbsp;&nbsp;</th>
        <th>Dirección&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Correo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Teléfono&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Tipo Empleado&nbsp;&nbsp;&nbsp;</th> -->

        <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
          $conn=ConexionBD();
          $query="SELECT * FROM Empleados where correo='$email';";
          $res=sqlsrv_query($conn,$query);
          while ($row=sqlsrv_fetch_array($res)){
        ?>

        <!-- <tr><td><?=$row[0]?></td>
        <td><?=$row[1]?></td>&nbsp
        <td><?=$row[2]?></td>&nbsp
        <td><?=$row[3]?></td>&nbsp
        <td><?=$row[4]?></td>&nbsp;&nbsp;
        <td><?=$row[5]?></td>&nbsp
        <td><?=$row[6]?></td>&nbsp
        <td><?=$row[7]?></td></tr>&nbsp -->
        <form class="formulario" method="POST" action="./modifica_r.php">
                    <div class="input-contenedor">
                    <i class="fas fa-envelope icon"></i>
                    <p>ID Usuario</p>
                    <input type="text" disabled name="idempl" value="<?=$row[0]?>" >
                    </div>
      
                    <div class="input-contenedor">
                    <i class="fas fa-envelope icon"></i>
                    <p>Nombre</p>
                    <input type="text"  disabled name="nombre" value="<?=$row[1]?>" >
                    
                    </div>
                    
                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <p>Apellido Paterno</p>
                    <input type="text" disabled name="app" value="<?=$row[2]?>">
                    </div>

                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <p>Apellido Materno</p>
                    <input type="text" disabled name="apm" value="<?=$row[3]?>">
                    </div>


                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <p>Dirección</p>
                    <input type="text" disabled name="dir" value="<?=$row[4]?>">
                    </div>

                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <p>Correo</p>
                    <input type="text" disabled name="dir" value="<?=$row[5]?>">
                    </div>

                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <p>Teléfono</p>
                    <input type="tel" disabled name="telefono" value="<?=$row[6]?>">
                    </div>

                    <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <p>Tipo de Usuario</p>
                    <input type="text" disabled name="tipoemp" value="<?=$row[7]?>">
                    </div>


        <?php
        }
      }
        ?>


    </form>
        <!-- <?php
      //   }
      // }
        ?> -->

    <!-- </table> -->

                    
                
          
            <!--- </form>-->
    <!---ENDFormulario-->
    </main>
<?php
      include './includes/templates/footer_admin.php';
    ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>