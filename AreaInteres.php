<?php
    $usuario = $_POST['usuario'];
    $contra1 = $_POST['contra1'];
    $contra2 = $_POST['contra2'];

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Area Interes</title>
</head>

<body>

    <form id="formIn" action="Respuestas.php" method="post">

        <h1>Datos de interes</h1>

        <div id="contenedor">

            <p>¿Que te gusta realizar en tu tiempon libre?</p>
            <label for="deporte">Hacer deporte: </label>
            <input type="checkbox" name="deporte" value="deporte"><br>

            <label  for="pelicula">Ver peliculas: </label>
            <input  type="checkbox" name="pelicula" value="pelicula"><br>

            <label class="interes" for="leer">Leer libros: </label>
            <input  type="checkbox" name="leer" value="leer"><br>

            <label  for="jugar">Jugar a videojuegos: </label>
            <input class="interesIn" type="checkbox" name="jugar" value="jugar"><br>

            <label  for="amigos">Salir con amisgos: </label>
            <input  type="checkbox" name="amigos" value="amigos"><br>

            <input id="enviarIn" type="submit" value="Enviar">
            
            <input hidden type="text" name="usuario" value="<?php echo $usuario;?>">
            <input hidden type="text" name="contra1" value="<?php echo $contra1;?>">
            <input hidden type="text" name="contra2" value="<?php echo $contra2;?>">
            
            <input hidden type="text" name="nombre" value="<?php echo $nombre;?>">
            <input hidden type="text" name="apellido" value="<?php echo $apellido;?>">
            <input hidden type="text" name="correo" value="<?php echo $correo;?>">

        </div>

    </form>

</body>

</html>
