<?php

class MarcaController
{
    public function __construct()
    {
        require_once "models/Marca.php";
    }

    public function index()
    {
        $marcas = new Marca();
        $data["marcas"] = $marcas->listar();
        
        //Cargar la vista
        require_once "views/marca/index.php";
    }

    //Mostrar la vista para crear un nuevo registro (producto)
    public function insert()
    {
        $data["titulo"] = "Insertar Marcas";
        require_once "views/marca/insert.php";
    }
    // Guarda el registro
    public function store()
    {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $proveedor = $_POST['proveedor'];
        

        $marca = new Marca();  
        $marca->insert($id, $nombre, $proveedor);
        $this->index();           
            
    }

    public function edit($id)
    {
        $marca = new Marca();
        // Pasar a la vista el id y el producto en si
        
        $data["id"] = $id;
        $data["marca"] = $marca->getMarca($id);
        $data["titulo"] = "Actualizar marcas";
        
        require_once "views/marca/edit.php";
    }

    public function update()
    {
        $id = $_POST ['id'];
        $nombre = $_POST['nombre'];
        $proveedor = $_POST['proveedor'];

        $marca = new Marca();
        $marca->update($id, $nombre, $proveedor);
        $this->index();
    }

    public function delete($id)
    {
        $marca = new Marca();
        $marca->delete($id);
        $this->index();
    }

    public function view($id)
    {
        $marca = new Marca();
        $data["id"] = $id;
        $data["marca"] = $marca->getMarca($id);
        $data["titulo"] = "ver Vistas";
        require_once "views/marca/view.php";
    }
    
}


?>