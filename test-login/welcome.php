<?php
    require('conexion.php');
    session_start();
    
    $iduser = $_SESSION["nombre_usuario"];
    echo 'Bienvenido '.$iduser;
?>