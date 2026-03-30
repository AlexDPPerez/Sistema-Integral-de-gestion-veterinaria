<?php

namespace App\content\models;

class UsuariosModel extends Bd
{
    public function __construct()
    {
        parent::__construct();
    }

    public function obtenerUsuarios()
    {
        $stmt = $this->db->query("SELECT * FROM usuarios");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function validarUsuario($email, $password)
    {
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE email = :email AND password = :password");
        $stmt->execute([
            ':email' => $email, 
            ':password' => $password
        ]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

}
