<?php require_once "views/shared/header.php";?>

    <div class="container"> 
    <h1> <?php echo $data["titulo"]?></h1>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <td><?= $data["producto"] ["id"]; ?></td>
                        <td><?= $data["producto"] ["nombre"]; ?></td>
                        <td><?= $data["producto"] ["nombreMarca"]; ?></td>
                        <td><?= $data["producto"] ["precio"]; ?></td>
                        <td><?= $data["producto"] ["cantidad"]; ?></td>
                    </tr>
                
            </tbody>
        </table>
        <a href="index.php" class="btn btn-primary">Volver</a>
    </div>

    <?php require_once "views/shared/footer.php";?>
