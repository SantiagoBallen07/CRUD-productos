<?php require_once "views/shared/header.php";?>

    <div class="container">
    <h1> <?php echo $data["titulo"]?></h1>
        <form action="index.php?control=producto&action=store" method="post">
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <div>
                <label for="marca">Marca</label>
                <input type="text" name="idmarca" id="idmarca" class="form-control"><br>
                <select name="idmarca" id="idmarca" class="form-control">
                <?php
                
                    foreach($data["marcas"] as $marca)
                    {
                        $id = $marca["id"];
                        $nombre =$marca["nombre"];
                    echo "<option value=$id> $nombre </option>";                   
                    }
                ?>
                </select>
            </div>
            <div>
                <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio" class="form-control">
            </div>
            <div>
                <label for="cantidad">Cantidad</label>
                <input type="number" name="cantidad" id="cantidad" class="form-control">
            </div>
            <button type="sumbit" class="btn btn-primary">Crear</button>
        </form>
    </div>
    
    <?php require_once "views/shared/footer.php";?>