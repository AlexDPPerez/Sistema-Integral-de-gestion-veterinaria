<?php

namespace App\content\models;

class Bd {
    protected $db;
    private $bdHost = "localhost";
    private $bdNombre = "veterinaria";
    private $bdUsuario = "root";
    private $bdPassword = "";

    public function __construct() {
        try {
            $this->db = new \PDO("mysql:host={$this->bdHost};dbname={$this->bdNombre}", $this->bdUsuario, $this->bdPassword);
            // Configurar PDO para que lance excepciones en caso de error
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("Error de conexión a la base de datos: " . $e->getMessage());
        }
    }

    public function getDb() {
        return $this->db;
    }
}                   
    