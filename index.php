<?php 

    //Controlador general del sitio
    require_once "config/config.php";
    require_once "core/routes.php";

    require_once "config/conexion.php"; //insertado el archivo de conexion
    require_once "controllers/ProductoController.php"; //insertando el controlador de productos
    require_once "controllers/MarcaController.php"; //insertando el controlador de productos
    require_once "controllers/UsuarioController.php";
    //$controlador = new ProductoController();
    //$controlador->index();

    if(isset($_GET['control']))
    {
        
        //cargue el controlador por parametro
        $controlador = cargarControlador($_GET['control']);
        if(isset($_GET['action'])) //si se pasó una accion en la URL
        {
            if(isset($_GET['id']))
            {
                cargarAccion($controlador, $_GET['action'], $_GET['id']);
            }
            else
            {
                //cargar la accion
                cargarAccion($controlador, $_GET['action']);
            }    
        }
        else
        {
            //cargar la accion principal
            cargarAccion($controlador, CONTROLADOR_PRINCIPAL);
        }
    }
    else
    {
        //cargue el controlador inicial (producto)
        $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
        cargarAccion($controlador, ACCION_PRINCIPAL);
    }
   
?>