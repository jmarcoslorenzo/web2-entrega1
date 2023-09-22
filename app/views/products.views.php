<?php
require_once 'app/models/products.model.php';


/* arreglar el header para que se muestre - NO ANDA!!!*/

function showHome() {
    echo "header";
}

function showProducts() {
    $productos = getProductos();
    
    foreach($productos as $producto){
        echo $producto->TIPO;
        echo $producto->TALLE;
        echo $producto->PRECIO;
    }

}
