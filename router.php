<?php
require_once 'app/controllers/products.controller.php';
require_once 'app/views/products.views.php';

// leemos la accion que viene por parametro
$action = 'home'; // acción por defecto

if (!empty($_GET['action'])) { // si viene definida la reemplazamos
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home':
        showHome();
        break;
    case 'listar':
        showProducts();
        break;
    default:
        echo('404 Page not found');
        break;
}
