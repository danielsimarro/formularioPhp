<?php
    $usuario = $_POST['usuario'];
    $contra1 = $_POST['contra1'];
    $contra2 = $_POST['contra2'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Datos Usuario</title>
</head>

<body>

    <form id="form" action="AreaInteres.php" method="post">

        <h1>Datos del usuario</h1>

        <div id="contenedor">
            <label  class="principal" for="nombre">Nombre: </label><br>
            <input class="principal" type="text" name="nombre">

            <label class="principal" for="apellido">Apellido: </label><br>
            <input class="principal" type="text" name="apellido" id="apellido">

            <label class="principal" for="correo">Correo electrónico: </label><br>
            <input class="principal" type="text" name="correo" id="correo">
            
            <input id="enviar" type="submit" value="Enviar">
            
            <input hidden type="text" name="usuario" value="<?php echo $usuario;?>">
            <input hidden type="text" name="contra1" value="<?php echo $contra1;?>">
            <input hidden type="text" name="contra2" value="<?php echo $contra2;?>">
            

        </div>

    </form>

</body>

</html>
