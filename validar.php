<?php
require './conexion.php';
$usuario=$_POST['Correo'];
$contraseña=$_POST['password'];
//session_start();
//$_SESSION['usuario']=$usuario;

    echo $usuario."<br/>";
    echo $contraseña."<br/>";

$exist = validarPass($usuario,$contraseña);

if($exist == "1"){
    header("location:clientemenu.php");
    ?>
    
  <!-- <h1 > AUTENTIFICACION</h1> -->
  <?php
    print $exist;
}else {
  print '<script language="JavaScript">';
      print 'alert("Usuario o contraseña equivocada");';
      print "window.location= 'login.php'";
      print '</script>';
      header("location:login.php");
    ?>
    
  <!-- <h1 >ERROR DE AUTENTIFICACION</h1> -->
  <?php
  echo $exist;
}
