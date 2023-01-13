<?php
require './conexion.php';
$usuario=$_POST['Correo'];
$contraseña=$_POST['password'];
//session_start();
//$_SESSION['usuario']=$usuario;

    echo $usuario."<br/>";
    echo $contraseña."<br/>";

$exist = validaradPass($usuario,$contraseña);

if($exist != "0"){
  print '<script language="JavaScript">';
  print 'alert("Bienvenido");';
  print "window.location= 'adminmenu.php'";
  print '</script>';
    header("location:adminmenu.php");
    ?>
    
  <!-- <h1 > AUTENTIFICACION</h1> -->
  <?php
    print $exist;
}else{
  print '<script language="JavaScript">';
  print 'alert("Usuario o contraseña equivocada");';
  print "window.location= 'logad.php'";
  print '</script>';
      header("location:logad.php");
    ?>
    
  <!-- <h1 >ERROR DE AUTENTIFICACION</h1> -->
  <?php
  echo $exist;
}
