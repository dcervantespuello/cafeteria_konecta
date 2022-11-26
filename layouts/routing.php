<?php
if (!isset($_GET['menu'])) {
    include('products/show.php');
} else {
    switch ($_GET['menu']) {
        case 'nuevo-producto':
            require_once('products/create.php');
            break;

        case 'editar-producto':
            require_once('products/edition.php');
            break;

        case 'eliminar-producto':
            require_once('products/delete.php');
            break;

        default:
            # code...
            break;
    }
}
