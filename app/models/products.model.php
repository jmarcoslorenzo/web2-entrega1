<?php
 
    /* Obtiene y devuelve de la base de datos todos los productos*/
    
    function getProductos(){
        /* coneccion a la db */
        $db = new PDO('mysql:host=localhost;'.'dbname=tienda;charset=utf8','root','');

        /*envio la consulta*/
        $query = $db->prepare("SELECT * FROM producto");
        /*ejecuta la respuesta*/
        $query->execute();
        /*obtiene la tabla en formate de objetos*/
        $productos = $query->fetchAll(PDO::FETCH_OBJ);

        return $productos;
    }

