<?php

    function cargarControlador($controlador)
    {
        //producto
        $nombreControlador = ucwords($controlador) . "Controller";
        //ProductoController
        $archivoControlador = "controllers/$nombreControlador.php";
        
        if(!is_file($archivoControlador)) //si no esxiste el archivo
        {
            //cargar el controlador por defecto
            $archivoControlador = "controllers/" . CONTROLADOR_PRINCIPAL . ".php";
        }

        require_once $archivoControlador;
        $controlador = new $nombreControlador(); //Es una variable que al momento de invocar se convierte en texto
        return $controlador;
    }

    //Función que cargue la acción
    function cargarAccion($controlador, $accion, $id = null)
    {
        if(isset($accion) && method_exists($controlador,$accion)) //Si se recibe una acción y el metodo existe
        {
            if($id == null)
            {
                $controlador->$accion();
            }
            else
            {
                $controlador->$accion($id);
            }
            
        }
        else
        {
            $controlador->ACCION_PRINCIPAL;
        }
    }
?>