<?php
$host = "localhost";
$usuario ="gluten";
$clave ="gluten123";
$basededatos ="datousuarios";

$conn = new mysqli($host, $usuario, $clave, $basededatos);
    mysqli_query($conn , "SET character_set_result=uft8");
    if($conn->connect_error){
        die("Database Error : " . $conn->connect_error);
    }
?>
