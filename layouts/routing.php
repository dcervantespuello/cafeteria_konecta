<?php
if (!isset($_GET['menu'])) {
    include('products/show.php');
} else {
    if ($_GET['menu'] == 'nuevo') {
        require_once('products/create.php');
    }
}
