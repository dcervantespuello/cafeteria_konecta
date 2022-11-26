<?php

include('../db_connection.php');

$name = $_POST["name"];
$reference = $_POST["reference"];
$price = $_POST["price"];
$weight = $_POST["weight"];
$category = $_POST["category"];
$stock = $_POST["stock"];
$created_at = date("Y-m-d");

$query = $connection->prepare("INSERT INTO products(name, reference, price, weight, category, stock, created_at) VALUES (?,?,?,?,?,?,?);");
$insertar = $query->execute([$name, $reference, $price, $weight, $category, $stock, $created_at]);

if ($insertar) {
    echo "<script>alert('Se ha guardado el producto con éxito');
    window.location = '/'</script>";
} else {
    echo "<script>alert('No se pudo guardar el producto');
    window.history.go(-1);</script>";
}
