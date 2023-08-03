<?php
    $conexion= new mysqli('localhost', 'id20691284_omar', 'ELtiokuku1$', 'id20691284_ogm');
    if($conexion){
        echo "CONEXION EXITOSA";
    }else {
        echo "NO FUNCIONO LA CONEXION";
    }
?>