<?php
include(__DIR__ . "/../config/conexion.php");

function obtenerMascotas() {
    global $conexion;
    $sql = "SELECT * FROM mascotas ORDER BY id_mascota DESC";
    $consulta = $conexion->prepare($sql);
    $consulta->execute();
    return $consulta->fetchAll(PDO::FETCH_ASSOC);
}

function obtenerMascotaPorId($id) {
    global $conexion;
    $sql = "SELECT * FROM mascotas WHERE id_mascota = ?";
    $consulta = $conexion->prepare($sql);
    $consulta->execute([$id]);
    return $consulta->fetch(PDO::FETCH_ASSOC);
}

function agregarMascota($nombre, $edad, $sexo, $imagen) {
    global $conexion;
    $sql = "INSERT INTO mascotas (nombre, edad, sexo, imagen) VALUES (?, ?, ?, ?)";
    $consulta = $conexion->prepare($sql);
    return $consulta->execute([$nombre, $edad, $sexo, $imagen]);
}

function actualizarMascota($id, $nombre, $edad, $sexo, $imagen) {
    global $conexion;
    $sql = "UPDATE mascotas SET nombre=?, edad=?, sexo=?, imagen=? WHERE id_mascota=?";
    $consulta = $conexion->prepare($sql);
    return $consulta->execute([$nombre, $edad, $sexo, $imagen, $id]);
}

function eliminarMascota($id) {
    global $conexion;
    $sql = "DELETE FROM mascotas WHERE id_mascota=?";
    $consulta = $conexion->prepare($sql);
    return $consulta->execute([$id]);
}
?>
