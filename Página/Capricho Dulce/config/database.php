<?php

class Database{

    private $hostname = "localhost";
    private $database = "catalogo";
    private $username = "root";
    private $password = "2DZp5UR8jiGdw&y";
    private $charset = "utf8";

    
function conectar()
{
    try{
    $conexion = "mysql:host=" . $this->hostname . "; dbname=" . $this->database . "; charset=" . $this->charset;

    $option = [
        PDO::ATTR_ARRMODE => PDO::ERMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    ];

    $pdo = new PDO($conexion, $this->username, $this->password, $options);

    return$pdo;
} catch (PDOException $e) {
    echo 'Error conexion: ' . $e->getMessage();
    exit;
}
}

}











?>