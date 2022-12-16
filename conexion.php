<?php

class Cconexion{

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

        print "<h2>Query Example 1 | Fetching by Associate Array</h2>";
        $sql = "SELECT * FROM prueba";
        
        $result = sqlsrv_query($conn, $sql);
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

}

?>