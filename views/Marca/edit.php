<?php require_once "views/shared/header.php";?>
    <div class="container">
    <h1> <?php echo $data["titulo"]?></h1>
        <form action="index.php?control=marca&action=update" method="post">
            <input type="hidden" name="id" value=<?php echo $data["id"]; ?>>
            <div>
                <label for="id">Id</label>
                <input type="number" name="id" id="id" class="form-control" value=<?php echo $data["marca"]["id"]; ?>>
            </div>
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value=<?php echo $data["marca"]["nombre"]; ?>>
            </div>
            <div>
                <label for="proveedor">Proveedor</label>
                <input type="text" name="proveedor" id="proveedor" class="form-control" value=<?php echo $data["marca"]["proveedor"]; ?>>
            </div>
            <button type="sumbit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>

    <?php require_once "views/shared/footer.php";?>