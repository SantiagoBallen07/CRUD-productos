<?php require_once "views/shared/header.php";?>

    <div class="container"> 
    <h1> <?php echo $data["titulo"]?></h1>
        <a href="index.php?control=marca&action=insert" class="btn btn-success">Crear nuevo</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Proveedor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['marcas'] as $marca) {  ?>
                    <tr>
                        <td><?= $marca['id'] ?></td>
                        <td><?= $marca['nombre'] ?></td>
                        <td><?= $marca['proveedor'] ?></td>
                        <td>
                            <a href="index.php?control=marca&action=edit&id=<?= $marca['id'] ?>" class="btn btn-warning">Actualizar</a>
                            <a href="index.php?control=marca&action=delete&id=<?= $marca['id'] ?>" class="btn btn-danger">Eliminar</a>
                            <a href="index.php?control=marca&action=view&id=<?= $marca['id'] ?>" class="btn btn-info">Ver</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php require_once "views/shared/footer.php";?>
