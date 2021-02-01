<?php
$usuario = "id15689958_root";
$contrasena = "EB>^WMZr!+u{k6!/";  
$servidor = "localhost";
$basededatos = "id15689958_alter";

    $conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");
    mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
?>  