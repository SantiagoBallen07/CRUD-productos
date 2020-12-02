<?php

    class HomeController
    {


        public function __construct()
        {
            // session_start();
        }

        public function index ()
        {
            if(!isset($_SESSION))
            {
                session_start();
            }
            if(isset($_SESSION["cedula"]))
            {

                 $data['titulo'] = "Proyecto MVC-PHP";
                 require_once "views/home/index.php";
            }
            else
            {
                header("location: index.php?control=usuario&action=verLogin");
            }
        }

        }
?>