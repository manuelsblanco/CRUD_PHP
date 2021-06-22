<?php

include("db.php");


    $nombre   = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad     = $_POST['edad'];
    $telefono = $_POST['tel'];
    $genero   = $_POST['genero'];

    $query = "INSERT INTO personas(Nombre, Apellido, Edad, Tel, Genero) 
    VALUES ('$nombre' ,'$apellido','$edad','$telefono','$genero')";

    $result = mysqli_query($conn,$query);

    if(!$result){
        die("Query fallada");
    }
    
    $_SESSION['message'] = 'Persona guardada de forma correcta';
    

    header("Location: index.php");

?>