<?php

class Conexion
{
    protected $db;
    private $driver = "mysql"; //no se modifica
    private $host = "localhost";  //no se modifica
    private $dbname = "phpcrud"; //nomnbre de la base de datos ->
    private $usuario = "root";   //usuarios de la bd ->
    private $password = ""; //password

    public function __construct()
    {
        try {
            $db = new PDO("{$this->driver}:host={$this->host};dbname={$this->dbname}", $this->usuario, $this->password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            echo "Fallo la conexion, Problema: " . $e->getMessage();
        }
    }
}
