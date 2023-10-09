<?php 
//Establecer el encabezado de actualización utilizando PHP.
header("refresh:5;url=https://glutenfree1234.000webhostapp.com/index.html");

    $pais = $_POST['pais'];
    $provincia = $_POST['provincia'];
    $mail = $_POST['mail'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $fechanac = $_POST['fechanac'];

   
        echo "Recibimimos...<br>";
        echo "Usuario: ".$usuario."<br>";
        echo "Email: ".$mail."<br>";
        echo "Fecha de Nacimiento: ".$fechanac."<br>";
        echo "Pais: ".$pais."<br>";
        echo "Provincia: ".$provincia."<br>";
        
    ?>

