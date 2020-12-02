<?php require_once "views/shared/header.php";?>

    <div class="container">

    <h1> <?php echo $data["titulo"]?></h1>
    
        <form action="index.php?control=marca&action=store" method="post">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="number" name="id" id="id" class="form-control">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="proveedor">Proveedor</label>
                <input type="text" name="proveedor" id="proveedor" class="form-control">
            </div>
            <button type ="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
    <?php require_once "views/shared/footer.php";?>