<?php

$server="";
$username="";
$password="";
$bdname="";

$db = new mysqli($server, $username, $password, $bdname);

if($conexion->connect_error){
    die("Error en la conexión: "+$conexion->connect_error);
}else{
    //Conexión correcta
    echo "Conexión correcta"; 
}

/*mysql_connect('localhost','user',password);
mysql_query("CREATE USER 'username'@'localhost' IDENTIFIED BY 'password';");
mysql_query("GRANT ALL ON db1.* TO 'username'@'localhost'");
mysql_query("CREATE DATABASE newdatabase");
mysql_close();
*/

?>