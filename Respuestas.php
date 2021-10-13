<?php
    $usuario = $_POST['usuario'];
    $contra1 = $_POST['contra1'];
    $contra2 = $_POST['contra2'];

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];

    $deporte = $_POST['deporte'];
    $pelicula = $_POST['pelicula'];
    $leer = $_POST['leer'];
    $jugar = $_POST['jugar'];
    $amigos = $_POST['amigos'];

?>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Respuestas</title>
    </head>
    
    <body>
            
    
            <h1>Respuestas del Usuario</h1>
            
            <p>Usuario: <?php echo $usuario;?></p>
            <p>Contraseña: <?php echo $contra1;?></p>
            <p>Confirmar contraseña: <?php echo $contra2;?></p>
            
            <p>Nombre: <?php echo $nombre;?></p>
            <p>Apellido: <?php echo $apellido;?></p>
            <p>Correo electrónico: <?php echo $correo;?></p>
            
            <h3>Datos de interes</h3>
            
            <p><?php if($deporte == "deporte")
            echo 'Hacer deporte';?></p>
            <p><?php if($pelicula == "pelicula")
            echo 'Ver peliculas';?></p>
            <p><?php if($leer == "leer")
            echo 'Leer libros';?></p>
            <p><?php if($jugar == "jugar")
            echo 'Jugar a videojuegos';?></p>
            <p><?php if($amigos == "amigos")
            echo 'Estar con los amigos';?></p>
            
    </body>
    
    </html>
