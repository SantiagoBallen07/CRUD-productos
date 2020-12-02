<?php require_once "views/shared/header.php";?>

    <div class="container">
    <h1> <?php echo $data["titulo"]?></h1>
        <form action="index.php?control=producto&action=update" method="post">
            <input type="hidden" name="id" value=<?php echo $data["id"]; ?>>
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value=<?php echo $data["producto"]["nombre"]; ?>>
            </div>
            <div>
                <label for="idmarca">Marca</label>
               <select name="idmarca" id="idmarca" class="form-control">
               
               <?php
               
               foreach($data["marcas"] as $marca)
               {
                   $id = $marca["id"];
                   $nombre = $marca["nombre"];
                   if($id = $data["producto"] ["idmarca"])
                   {
                       echo "<option value= $id selected> $nombre </option>";
                   }
                   else
                   {
                       echo "<option value= $id> $nombre </option>";
                   }
               }

               ?>

               </select>
            </div>
            <div>
                <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio" class="form-control" value=<?php echo $data["producto"]["precio"]; ?>>
            </div>
            <div>
                <label for="cantidad">Cantidad</label>
                <input type="number" name="cantidad" id="cantidad" class="form-control" value=<?php echo $data["producto"]["cantidad"]; ?>>
            </div>
            <button type="sumbit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
    <?php require_once "views/shared/footer.php";?>