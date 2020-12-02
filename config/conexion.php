<?php

class Conectar
{
    public static function conexion()
    {
        $conexion = new mysqli("localhost","root","","adsi");
        if(!$conexion)
        {
            die("Conexion fallida" . mysqli_connect_error());
        }
        return $conexion;
    }
}

?>