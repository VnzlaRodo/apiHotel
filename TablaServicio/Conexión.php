<?php

class DB{

    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this -> host = 'localhost';
        $this -> db = 'hotel';
        $this -> user = 'root';
        $this -> password = '123qwe';
        $this -> charset = 'utf8mb4';
    }

    function connect(){
        try {
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this ->db. ";charset=" . $this->charset;

            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                        PDO::ATTR_EMULATE_PREPARES => false,
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"];

            $pdo = new PDO($connection, $this->user, $this->password, $options);
            return $pdo;
        } catch (PDOException $e) {
            print_r("Error connection: " . $e->getMessage());
            
        }
    }
}

/*class DB{

    function connect(){

    $server = "localhost";
    $db = "hotel";
    $user = "root";
    $password = "";

    $conexion = new mysqli($server, $user, $password, $db);

        if($conexion -> connect_error){
            die("Conexión fallida: " . $conexion -> connect_error);
        }else{
        echo "Conexión Exitosa...";
        }
    }
}*/
?>