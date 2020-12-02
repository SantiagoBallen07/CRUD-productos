<?php  require_once "views/shared/header.php"; ?>

    <h1> Bienvenido al portal web</h1>

    <?php
        if(isset($_SESSION["cedula"]))
        {

            echo $_SESSION["cedula"];
        }
        else
        {
            echo "Usuario no ha ingresado";
        }

    ?>
<?php  require_once "views/shared/footer.php"; ?>