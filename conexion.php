<?php
//CONEXION A LA BASE DE DATOS
function ConexionBD(){

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
    
   
}

//SECCION DE INSERTS

function InsertBD(){
        
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

    $sql = "INSERT INTO prueba VALUES (?,?);";
    $params = array(7,'Crash3');

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
}

function InsertContact($nombre,$email,$telefono,$mensaje,$cli,$fecha){
        
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


//SECCION DE DELETES

function DeleteBD(){
    
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

    $sql = "DELETE FROM prueba WHERE id=?;";
    $params = array(1);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
}


//SECCION DE UPDATES
function UpdateBD(){
    
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

    $sql = "UPDATE prueba SET nombre = ? WHERE id = ?;";
    $params = array('Crash2',7);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
}


//SECCION DE SELECTS

function SelectBD(){
    
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



?>