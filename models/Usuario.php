<?php

class Usuario 
{

    private $id;
    private $cedula;
    private $nombre;
    private $email;
    private $contrasenia;
    
    public function __construct()
    {
        $this->db = conectar::conexion();
    }
    public function store($cedula, $nombre, $email, $contrasenia)
    {
        //Encriptar la contraseña
        $nuevaContrasenia = password_hash($contrasenia,PASSWORD_ARGON2I);

        $sql = "INSERT INTO usuario (cedula, nombre, email,contrasenia)
                VALUES ('$cedula', '$nombre', '$email', '$nuevaContrasenia')";

                $this->db->query($sql);
    }

    public function consultarUsuario($cedula)
    {
        $sql = "SELECT * FROM usuario WHERE cedula = $cedula";
        $row = $this->db->query($sql);
        $objetoUsuario = $row->fetch_assoc();
        return $objetoUsuario;
    }
    
}


?>
