<?php
require 'accesoBD.php';
$conexion1 = new AccesoBD('localhost', 'alumno', 'abc123.', 'receita');
$conectadoBD = $conexion1->abrirConexion();
$conexion1->cerrarConexion();

?>