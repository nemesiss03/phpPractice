<?php
    $conexion= mysqli_connect("localhost","root","","test");
    if($conexion){
        echo 'Conectado exitosamente en la base de datos';
    }else{
        echo 'No se pudo conectar en la base de datos ';
    }
?>