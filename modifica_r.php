<?php
require './conexion.php';
$idemp= $_POST['idemp'];
$nombre = $_POST['nombre'];
$app = $_POST['app'];
$apm = $_POST['apm'];
$dir= $_POST['dir'];
$email= $_POST['email'];
$telefono= $_POST['telefono'];
$tipoemp= $_POST['tipoemp'];
//session_start();
//$_SESSION['usuario']=$usuario;



$exist = M_recepcionista($idemp,$nombre,$app,$apm,$dir,$email,$telefono,$tipoemp);

if($exist == "1"){
  
  
    print '<script language="JavaScript">';
                print 'alert("Error al modificar");';
                print "window.location= 'M_recepcionista.php'";
                print '</script>';

    ?>
    
  <!-- <h1 > AUTENTIFICACION</h1> -->
  <?php
    print $exist;
}else{
    print '<script language="JavaScript">';
    print 'alert("Se modifico correctamente ");';
    print "window.location= 'M_recepcionista.php'";
   // print "window.location= 'adminmenu.php'";
    print '</script>';
    ?>
    
  <!-- <h1 >ERROR DE AUTENTIFICACION</h1> -->
  <?php
  echo $exist;
}