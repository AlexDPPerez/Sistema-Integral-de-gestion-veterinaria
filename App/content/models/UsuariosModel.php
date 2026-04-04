<?php

namespace App\content\models;

class UsuariosModel extends Bd
{
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * La función `obtenerUsuarios()` es un método público que se utiliza para obtener 
     * una lista de usuarios desde la base de datos.
     * 
     * @return An array de usuarios, donde cada usuario es representado como un array asociativo con las
     * columnas de la tabla "usuarios".
     */
    public function obtenerUsuarios()
    {
        $stmt = $this->db->query("SELECT * FROM usuarios");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * La función `insertarUsuario()` es un método público que se utiliza para insertar un nuevo usuario en la base de datos.
     * 
     * @param string $username El nombre de usuario del nuevo usuario.
     * @param string $email El correo electrónico del nuevo usuario.
     * @param string $password La contraseña del nuevo usuario.
     * @param string $rol El rol del nuevo usuario.
     * @return bool Retorna true si el usuario fue insertado correctamente, false en caso contrario.
     */
    public function insertarUsuario($username, $email, $password, $rol)
    {
        $stmt = $this->db->prepare("INSERT INTO usuarios (username, email, password, rol) VALUES (:username, :email, :password, :rol)");
        return $stmt->execute([
            ':username' => $username,
            ':email' => $email,
            ':password' => $password,
            ':rol' => $rol
        ]);
    }

    /**
     * La función `validarUsuario()` es un método público que se utiliza para validar las credenciales de un usuario.
     * 
     * @param string $email El correo electrónico del usuario que se desea validar.
     * @param string $password La contraseña del usuario que se desea validar.
     * @return An array asociativo con los datos del usuario si las credenciales son válidas, o false si no lo son.
     */
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
