<?php

class Marca
{
    private $db;
    private $marcas;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->marcas = array();
    }

    public function listar()
    {
        $sql = "SELECT * FROM marca";
        $resultado = $this->db->query($sql);
        if(!$resultado)
        {
            echo "Lo sentimos este sitio está experimentndo problemas.\n\n";

            echo "Eror: La ejecución de la consulta falla debido a :\n";
            echo "Query : " . $sql . "\n";
            echo "Errno" . $mysqli->errno . "\n" ;
            echo "Error" . $mysqli->error . "\n" ;
            exit;
        }

        while ($row = $resultado->fetch_assoc())
        {
            $this->marcas[] = $row;
        }
        return $this->marcas;
    }

    public function insert($id, $nombre, $proveedor)
    {
        $sql = "INSERT INTO marca  (id, nombre, proveedor) VALUES ($id, '$nombre', '$proveedor')";
        $this->db->query($sql);
    }

    public function update($id, $nombre, $proveedor)
    {
        $sql ="UPDATE marca SET nombre = '$nombre', proveedor = '$proveedor' WHERE id = $id";
        $resultado = $this->db->query($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM marca WHERE id = $id";
        $resultado = $this->db->query($sql);
    }

    public function view($id)
    {
        $sql = "SELECT FROM marca WHERE id = $id";
        $resultado = $this->db->query($sql);
    }

    public function getMarca($id)
    {
        $sql = "SELECT * FROM marca WHERE id = $id";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;
    }
}

?>