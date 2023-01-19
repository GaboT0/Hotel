<?php
        include './includes/templates/header_admin.php';
        require './conexion.php';

        // if($_SERVER['REQUEST_METHOD'] === 'POST'){
           
        // $email= $_POST['Correo'];
        //     $exist = B_recepcionista($email);
            
    
        //     if($exist == "1"){
        //         print '<script language="JavaScript">';
        //         print 'alert("Usuario no encontrado");';
        //         print "window.location= 'B_recepcionista.php'";
        //         print '</script>';
        //     }else{
        //           print '<script language="JavaScript">';
        //           print 'alert("Usuario encontrado");';
        //          // print "window.location= 'adminmenu.php'";
        //           print '</script>';
                  
        //     }
        // }

        ?>
    <main class="contenedor seccion">

    
    <!---Agrega recepcionista-->
        <form class="formulario" method="POST" action="./B_reserv_view.php">
      
            <p>

            
<!-- <input type="submit" class="boton-amarillo" value="Buscar"> -->

</p>
    </form>

    <h2>Consulta Reservaciones - Empleados</h2>
    <table>
        <th>Id Empleado&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Nombre Empleado&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Id Huesped&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Id Habitacion&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Fecha inicial&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Fecha final&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Costo final&nbsp;&nbsp;</th>
        <?php
        
          $conn=ConexionBD();
          $query="Select * from reserv_view_employees;";
          $res=sqlsrv_query($conn,$query);
          while ($row=sqlsrv_fetch_array($res)){
            $DateI = $row[4]->format('d/m/Y');
            $DateF = $row[5]->format('d/m/Y');
        ?>
        
        <tr>
          <td><?=$row[0]?></td> <!--idempleado -->
          <td><?=$row[1]?></td>&nbsp;<!--Nombre del empleado -->
          <td><?=$row[2]?></td>&nbsp;<!--Id del huesped -->
          <td><?=$row[3]?></td>&nbsp;<!--Id de la habitacion -->
          <td><?=$DateI?></td>&nbsp;<!--Fecha incial -->
          <td><?=$DateF?></td>&nbsp;<!--Fecha final -->
          <td><?=$row[6]?></td>
        </tr><!--Costo Final -->
       
        <?php
        }
        ?>

    </table>
  </form>
    <!---ENDFormulario-->
    </main>
<?php
      include './includes/templates/footer_admin.php';
    ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>