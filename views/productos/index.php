
    <?php require_once "views/shared/header.php";?>

    <div class="container"> 
    <h1> <?php echo $data["titulo"]?></h1>
        <a href="index.php?control=producto&action=insert" class="btn btn-success">Crear nuevo</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['productos'] as $producto) {  ?>
                    <tr>
                        <td><?= $producto['id'] ?></td>
                        <td><?= $producto['producto'] ?></td>
                        <td><?= $producto['marca'] ?></td>
                        <td>
                            <a href="index.php?control=producto&action=edit&id=<?= $producto['id'] ?>" class="btn btn-warning">Actualizar</a>
                            <a href="index.php?control=producto&action=delete&id=<?= $producto['id'] ?>" class="btn btn-danger">Eliminar</a>
                            <a href="index.php?control=producto&action=view&id=<?= $producto['id'] ?>" class="btn btn-info">Ver</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php require_once "views/shared/footer.php";?>

