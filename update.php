<!--Me conecto a la DBA-->
<?php include("db.php");?>
<!--Me conecto a la DBA-->

<?php

$id = $_GET['id'];
$query = "SELECT * FROM personas WHERE id = $id";
$consulta = mysqli_query($conn,$query);

$row = mysqli_fetch_array($consulta)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP UPDATE</title>

    <!--CSS-->
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <!--CSS-->

    <!--Esta linea de codigo llama al archivo banner.php y lo muestra en la pantalla-->
    <?php include("banner.php")?>
    <!--Esta linea de codigo llama al archivo banner.php y lo muestra en la pantalla-->

    
<div>
        <h2>Ingrese los datos a guardar</h2>        

        <!--Creo el formulario-->

        <form action="update.php?id=<?php echo $_GET['id'];?>" method="POST">

        <p>Nombre</p>
        <input type="text" id="nombre" name="nombre" required minlength="4" maxlength="100" size="50" value="<?php echo $row['Nombre']?>" >
        <br>

        <p>Apellido</p>
        <input type="text" id="apellido" name="apellido" required minlength="4" maxlength="100" size="50" value="<?php echo $row['Apellido']?>" >
        <br>

        <p>Edad</p>
        <input type="number" id="edad" name="edad" required minlength="1" maxlength="3" size="50" value="<?php echo $row['Edad']?>" >
        <br>

        <p>Telefono</p>
        <input type="number" id="tel" name="tel" required minlength="8" maxlength="15" size="50" value="<?php echo $row['Tel']?>" >
        <br>     
        
        
        <p>Indique su genero</p>
        <input type="radio" id="generoM" name="genero" value="M"  >
        <label>Masculino</label><br>
    
        <input type="radio" id="generoF" name="genero" value="F"  >
        <label>Femenino</label><br>
        <br>

        <input type="submit" name="update" value="Editar">
        </form>      
    </div>
</td>
<!--Fin del formulario-->



</head>
<body>
    
</body>
</html>

