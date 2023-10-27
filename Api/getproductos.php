<?php
// Incluye el archivo de conexión a la base de datos
include("../config/conexion.php");



// Consulta SQL para obtener los juegos desde la tabla "games"
$sql = "SELECT Titulo, Descripcion, nombre_imagen FROM games";
$result = ejecutarConsulta($sql); // Usamos la función ejecutarConsulta definida en conexion.php

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = array(
            "titulo" => $row["Titulo"],
            "descripcion" => $row["Descripcion"],
            "imagen" => "assets/imagen/" . $row["nombre_imagen"]
        );
    }
}
// Codifica el resultado en formato JSON
echo json_encode($data);

