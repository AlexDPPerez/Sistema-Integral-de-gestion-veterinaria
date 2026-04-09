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
     * La función `obtenerUsuarioPorId()` es un método público que se utiliza para obtener los datos de un usuario específico a partir de su ID.
     * @param int $id El ID del usuario que se desea obtener.
     * @return An array asociativo con los datos del usuario, o false si no se encuentra un usuario con el ID proporcionado. El array asociativo contiene las columnas de la tabla "usuarios" como claves y sus respectivos valores.
     */
    public function obtenerUsuarioPorId($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
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
    public function insertarUsuario($username, $email, $password, $rol, $is_active)
    {
        $stmt = $this->db->prepare("INSERT INTO usuarios (username, email, password, rol, is_active) VALUES (:username, :email, :password, :rol, :is_active)");
        return $stmt->execute([
            ':username' => $username,
            ':email' => $email,
            ':password' => $password,
            ':rol' => $rol,
            ':is_active' => $is_active
        ]);
    }


    /**
     * La función `actualizarUsuario()` es un método público que se utiliza para actualizar los datos de un usuario existente.
     * @param int $id El ID del usuario que se desea actualizar.
     * @param string $username El nombre de usuario del usuario.
     * @param string $email El correo electrónico del usuario.
     * @param string $password La contraseña del usuario.
     * @param string $rol El rol del usuario.
     * @param bool $is_active El estado de activación del usuario.
     * @return bool Retorna true si el usuario fue actualizado correctamente, false en caso contrario.
     */
    public function actualizarUsuario($id, $username, $email, $password, $rol, $is_active)
    {
        $sql = "UPDATE usuarios SET username = :username, email = :email, rol = :rol, is_active = :is_active";
        $params = [
            ':id' => $id,
            ':username' => $username,
            ':email' => $email,
            ':rol' => $rol,
            ':is_active' => $is_active
        ];

        if (!empty($password)) {
            $sql .= ", password = :password";
            $params[':password'] = $password; 
        }

        $sql .= " WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute($params);
    }


    /**
     * La función `eliminarUsuario()` es un método público que se utiliza para eliminar un usuario de la base de datos.
     * 
     * @param int $id El ID del usuario a eliminar.
     * @return bool Retorna true si el usuario fue eliminado correctamente, false en caso contrario.
     */
    public function eliminarUsuario($id)
    {
        try {
            $stmt = $this->db->prepare("DELETE FROM usuarios WHERE id = :id");
            return $stmt->execute([
                ':id' => $id
            ]);
        } catch (\Exception $e) {
            return false;
        }
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
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE email = :email AND password = :password AND is_active = 1");
        $stmt->execute([
            ':email' => $email,
            ':password' => $password
        ]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}
