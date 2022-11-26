<?php
if (!isset($_GET['menu'])) {
    include('products.php');
} else {
    if ($_GET['menu'] == 'nuevo') {
        require_once('new.php');
    }
}
