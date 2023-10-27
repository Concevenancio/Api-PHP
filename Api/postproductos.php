<?php

include("../config/conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario HTML
    $Titulo = $_POST['Titulo'];
    $Descripcion = $_POST['Descripcion'];
    $nombre_imagen = $_FILES['nombre_imagen']['name']; // Usamos $_FILES para obtener la imagen
    $imagen_tmp = $_FILES['nombre_imagen']['tmp_name']; // Ruta temporal de la imagen

    // Mover la imagen a la carpeta de destino (assets/imagen)
    $imagen_destino = __DIR__ ."assets/imagen/" . $nombre_imagen;
    if (move_uploaded_file($imagen_tmp, $imagen_destino)) {
        // Insertar solo el nombre de la imagen en la base de datos
        $sql = "INSERT INTO games (Titulo, Descripcion, nombre_imagen) VALUES ('$Titulo', '$Descripcion', '$nombre_imagen')";

        if ($conexion->query($sql) === TRUE) {
            echo "Datos insertados con éxito.";
        } else {
            echo "Error al insertar datos: " . $conexion->error;
        }
    } else {
        echo "Error al subir la imagen.";
    }
} else {
    echo "Esta API solo admite solicitudes POST.";
}

$conexion->close();

?>