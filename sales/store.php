<?php

include('../db_connection.php');

$product_id = $_POST["product_id"];
$sold = $_POST["sold"];

$query = $connection->prepare("INSERT INTO sales (product_id, sold) VALUES (?,?);");
$insert = $query->execute([$product_id, $sold]);

if ($insert) {
    $stock = $_POST["stock"];
    $stock -= $sold;

    $query2 = $connection->prepare("UPDATE products SET stock = ? WHERE id = ?;");
    $update = $query2->execute([$stock, $product_id]);

    echo "<script>alert('Se ha guardado la venta con éxito');
    window.location = '/'</script>";
} else {
    echo "<script>alert('No se pudo guardar la venta');
    window.history.go(-1);</script>";
}
