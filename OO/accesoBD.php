<?php

class AccesoBD {
    protected $servername="";
    protected $username="";
    protected $password="";
    protected $bdname="";
    protected $connection;
    
  //orientado a objetos

    public function __construct($servername, $username, $password, $database){
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
    public function abrirConexion() {
        $this->connection = new mysqli($this->servername, $this->username, $this->password);

        if ($this->connection->connect_error) {
            die("Ha fallado la conexion: " . $this->connection->connect_error);
        }
        echo "Conectado";
        return $this->connection;
    }
    public function cerrarConexion(){
        $this->connection->close();
        echo 'Conexion cerrada';
    }
}

?>