<?php
//CONEXION A LA BASE DE DATOS
function ConexionBD(){//Funcion de prueba

    $host="localhost";
    $dbname="Hotel";
    $username="prueba";
    $pasword ="p1234";
    $puerto=1433;

    $serverName = "localhost\sqlexpress,$puerto"; 
    $connectionInfo = array( "Database"=>$dbname, "UID"=>$username, "PWD"=>$pasword);
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

    if( $conn ) {
        echo "Conexión establecida.<br />";

    }else{
        echo "Conexión no se pudo establecer.<br />";
        die( print_r( sqlsrv_errors(), true));

    }
    return $conn;
   
}

//SECCION DE INSERTS

function InsertBD(){//Funcion de prueba
        
    $conn =ConexionBD();

    $sql = "INSERT INTO prueba VALUES (?,?);";
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
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
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

?>