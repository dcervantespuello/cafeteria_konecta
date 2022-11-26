<?php
include('db_connection.php');
$query = "SELECT * FROM products";
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Productos</h1>
        </div>
        <div class="col-2">
            <a href="?menu=nuevo-producto">
                <button type="button" class="btn btn-success btn-lg" style="margin-left: 13px;">Nuevo producto</button>
            </a>
        </div>
    </div>
</div>

<table class="table table-hover mt-4 mb-5 text-center">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Referencia</th>
            <th>Precio</th>
            <th>Peso</th>
            <th>Categoría</th>
            <th>Stock</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php $products = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($products)) { ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["reference"]; ?></td>
                <td><?php echo $row["price"]; ?></td>
                <td><?php echo $row["weight"]; ?></td>
                <td><?php echo $row["category"]; ?></td>
                <td><?php echo $row["stock"]; ?></td>
                <td><button class="btn btn-primary">Editar</button></td>
                <td><button class="btn btn-danger">Eliminar</button></td>
            </tr>
        <?php }
        mysqli_free_result($products);
        mysqli_close($connection); ?>
    </tbody>
</table>