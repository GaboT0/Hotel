<?php
require './conexion.php';

$id= $_POST['id'];
$nombre = $_POST['nombre'];
$app = $_POST['app'];
$apm = $_POST['apm'];
$dir= $_POST['dir'];
$telefono= $_POST['telefono'];

//session_start();
//$_SESSION['usuario']=$usuario;


//$idemp,
$exist = M_Huesped($id,$nombre,$app,$apm,$dir,$telefono);

if($exist == "0"){
    print '<script language="JavaScript">';
    print 'alert("Error al modificar");';
    print "";
    print '</script>';
}else{
    print '<script language="JavaScript">';
    print 'alert("Se modifico correctamente ");';
    print "window.location= 'M_Huesped.php'";
   // print "window.location= 'adminmenu.php'";
    print '</script>';
}