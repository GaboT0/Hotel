<?php
//CONEXION A LA BASE DE DATOS

function ConexionBD(){//Funcion de prueba

    $host="localhost";
    $dbname="Hotel";
    $username="prueba";
    $pasword ="p1234";
    $puerto=1433;

    $serverName = "localhost\SQLEXPRESS\sqlexpress,$puerto"; 
    $connectionInfo = array( "Database"=>$dbname, "UID"=>$username, "PWD"=>$pasword);
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

    if( $conn ) {
        echo "<br />";

    }else{
        echo "Conexión no se pudo establecer.<br />";
        die( print_r( sqlsrv_errors(), true));
    }
    return $conn;
   
}
//ConexionBD();

//  $c=ConexionBD();


//SECCION DE INSERTS

function InsertBD(){//Funcion de prueba
        
    $conn =ConexionBD();

    $sql = "INSERT INTO sa VALUES (?,?);";
    $params = array(7,'Crash3');

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
}

function InsertContact($nombre,$email,$telefono,$mensaje,$cli,$fecha){
        
    $conn = ConexionBD();

    if($cli === "SI"){
        $bcli=1;
    }
    else{
        $bcli=0;
    }
    $sql = "EXEC inContact ?,?,?,?,?,? ;";
    $params = array($nombre,$email,$telefono,$mensaje,$bcli,$fecha);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) 
        die( print_r( sqlsrv_errors(), true));
    
}

function InsertNewReg($nombre,$app,$apm,$dir,$email,$telefono,$pass){
    $conn= ConexionBD();
    
    $sql = "EXEC CreateHuesped ?,?,?,?,?,?,?";
    $params = array($nombre,$app,$apm,$dir,$email,$telefono,$pass);
    //'Jeromy','Nelthorp','Mum','International','mum0@yhoco.jp','6087384170','XGWJ9t'
    $stmt = sqlsrv_query( $conn, $sql,$params);
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        echo $row['exist']." valor<br />";
        return $row['exist'];
    }

    sqlsrv_free_stmt( $stmt);

}
//Inserta nuevo recepcionista

function A_recepcionista($nombre,$app,$apm,$dir,$email,$telefono,$tipoemp,$pass){
    $conn= ConexionBD();
    
    $sql = "EXEC CreateEmployee ?,?,?,?,?,?,?,?";
    $params = array($nombre,$app,$apm,$dir,$email,$telefono,$tipoemp,$pass);
    $stmt = sqlsrv_query( $conn, $sql,$params);
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        echo $row['exist']." valor<br />";
        return $row['exist'];
    }

    sqlsrv_free_stmt( $stmt);

}

//Consulta recepcionista
function B_recepcionista($email){
    $conn= ConexionBD();
    
    $sql = "EXEC ReadEmployees ?";
   // $params = array($email);
    /*$stmt = sqlsrv_query( $conn, $sql,$params);
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        echo $row['exist']." valor<br />";
        return $row['exist'];
    }

    sqlsrv_free_stmt( $stmt);*/


    $params = array(1);
    $result = sqlsrv_query($conn, $sql, $params);
    if($result === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    #Imprime los registros
   /* $num =0;
    while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
        $num +=1; 
        print_r("<br><br>Registro numero $num");
        print_r($row);

    }*/

    


}





//SECCION DE DELETES

function DeleteBD(){//Funcion de prueba
    
    $conn= ConexionBD();

    $sql = "DELETE FROM prueba WHERE id=?;";
    $params = array(1);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
}

function E_recepcionista($email,$pass){
    
    $conn= ConexionBD();

    $sql = "EXEC DeleteEmployee ?,?;";
    $params = array($email,$pass);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        echo $row['id']." valor<br />";
        return $row['id'];
    }
}

function E_Huesped($email,$pass){
    
    $conn= ConexionBD();

    $sql = "EXEC DeleteHuesped ?,?;";
    $params = array($email,$pass);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        echo $row['id']." valor<br />";
        return $row['id'];
    }
}


//SECCION DE UPDATES
function UpdateBD(){//Funcion de prueba
    
    $conn= ConexionBD();

    $sql = "UPDATE prueba SET nombre = ? WHERE id = ?;";
    $params = array('Crash2',7);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
}
//Modifica Recepcionista
//$idemp,  ?, $idemp,
function M_recepcionista($idemp,$nombre,$app,$apm,$dir,$telefono,$tipoemp){
    $conn= ConexionBD();
    
    $sql = "EXEC UpdateEmployee ?,?,?,?,?,?,?";
    $params = array($idemp,$nombre,$app,$apm,$dir,$telefono,$tipoemp);
    $stmt = sqlsrv_query( $conn, $sql,$params);
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        echo $row['exist']." valor<br />";
        return $row['exist'];
    }
}

function M_Huesped($id,$nombre,$app,$apm,$dir,$telefono){
    $conn= ConexionBD();
    
    $sql = "EXEC UpdateHuesped ?,?,?,?,?,?";
    $params = array($id,$nombre,$app,$apm,$dir,$telefono);
    $stmt = sqlsrv_query( $conn, $sql,$params);
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        echo $row['exist']." valor<br />";
        return $row['exist'];
    }
}

//SECCION DE SELECTS

function SelectBD(){//Funcion de prueba
    
    $host="localhost";
    $dbname="Hotel";
    $username="prueba";
    $pasword ="p1234";
    $puerto=1433;

    $serverName = "localhost\sqlexpress,$puerto"; 
    $connectionInfo = array( "Database"=>$dbname, "UID"=>$username, "PWD"=>$pasword);
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if( $conn === false ) {
        die( print_r( sqlsrv_errors(), true));
    }

    print "<h3>Query Example SELECT | EXEC </h3>";
    $sql = "EXEC VerCont ?;";
    $params = array(1);
    $result = sqlsrv_query($conn, $sql, $params);
    if($result === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    #Imprime los registros
    $num =0;
    while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
        $num +=1; 
        print_r("<br><br>Registro numero $num");
        print_r($row);

    }

}

function validarPass($usuario,$contraseña){
    $conn=ConexionBD();

    echo $usuario."<br/>";
    echo $contraseña."<br/>";

    $sql = "EXEC validarP ?,?";
    $params = array($usuario,$contraseña);
    //'jmum0@yahoo.co.jp','XGWJ9t'
    $stmt = sqlsrv_query( $conn, $sql,$params);
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        echo $row['num']." valor<br />";
        return $row['num'];
    }

    sqlsrv_free_stmt( $stmt);
    
}

function validaradPass($usuario,$contraseña){
    $conn=ConexionBD();

    echo $usuario."<br/>";
    echo $contraseña."<br/>";

    $sql = "EXEC validarADP ?,?";
    $params = array($usuario,$contraseña);
    //'dfossickd@n.org' , '35448'
    $stmt = sqlsrv_query( $conn, $sql,$params);
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        echo $row['Tipo']." valor<br />";
        return $row['Tipo'];
    }

    sqlsrv_free_stmt( $stmt);
    
}

?>