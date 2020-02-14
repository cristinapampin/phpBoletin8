<?php
    $servername="localhost";
    $username="alumno";
    $password="abc123.";
    $bdname="receitas";

 //proced
 $connection = mysqli_connect($servername, $username, $password);
 mysqli_select_db($connection, $bdname);


 if ($connection->connect_error) {
    die("Falló la conexion: " . $connection->connect_error);
} 
echo "Conectado";



$selectIngredientes = "SELECT nome FROM ingrediente";
if (!$resultado = mysqli_query($connection, $selectIngredientes) ) { 
    echo 'No puedes ver ingredientes';
} else if ($resultado->num_rows == 0){
    echo 'No hay ingredientes que mostrar';
} else {
    while($fila=mysqli_fetch_assoc($resultado)){
        echo "Ingrediente ". $fila['nome'] . '<br/>';
    }
}

mysqli_close($connection);


?>