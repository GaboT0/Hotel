<?php
require './conexion.php';

$idemp= $_POST['idempl'];
$nombre = $_POST['nombre'];
$app = $_POST['app'];
$apm = $_POST['apm'];
$dir= $_POST['dir'];
// $email= $_POST['email'];
$telefono= $_POST['telefono'];
$tipoemp= $_POST['tipoemp'];
//session_start();
//$_SESSION['usuario']=$usuario;


//$idemp,
$exist = M_recepcionista($idemp,$nombre,$app,$apm,$dir,$telefono,$tipoemp);

if($exist == "0"){
    print '<script language="JavaScript">';
    print 'alert("Error al modificar");';
    print "";
    print '</script>';
}else{
    print '<script language="JavaScript">';
    print 'alert("Se modifico correctamente ");';
    print "window.location= 'M_recepcionista.php'";
   // print "window.location= 'adminmenu.php'";
    print '</script>';
}