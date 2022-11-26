<?php

$connection = mysqli_connect("localhost", "root", "", "cafe_db");

if (!$connection) {
    echo 'Conectado correctamente a la base de datos';
}

mysqli_set_charset($connection, 'utf8');
