<?php

$connection = mysqli_connect("localhost", "root", "", "cafe_db");

if ($connection) {
    echo 'Conectado correctamente a la base de datos';
} else {
    echo 'No se a podido conectar correctamente';
}
