<?php
require_once("../methods/mascotas.php");

// GUARDAR
if(isset($_POST["guardar"])) {
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];
    $nombreImagen = $_FILES["imagen"]["name"];
    $rutaTemporal = $_FILES["imagen"]["tmp_name"];

    if($nombreImagen != "") {
        move_uploaded_file($rutaTemporal, "../uploads/" . $nombreImagen);
    } else {
        $nombreImagen = "1.png"; // Default image if none uploaded
    }

    agregarMascota($nombre, $edad, $sexo, $nombreImagen);
    header("Location: ../index.php");
    exit();
}

// ELIMINAR
if(isset($_GET["eliminar"])) {
    $id = $_GET["eliminar"];
    eliminarMascota($id);
    header("Location: ../index.php");
    exit();
}

// EDITAR
if(isset($_POST["editar"])) {
    $id = $_POST["id_mascota"];
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];
    
    // Imagen actual
    $imagen = $_FILES["imagen"]["name"];
    
    if($imagen != "") {
        $ruta = $_FILES["imagen"]["tmp_name"];
        move_uploaded_file($ruta, "../uploads/" . $imagen);
    } else {
        // Mantener imagen anterior
        $mascota = obtenerMascotaPorId($id);
        $imagen = $mascota["imagen"];
    }
    
    actualizarMascota($id, $nombre, $edad, $sexo, $imagen);
    header("Location: ../index.php");
    exit();
}
?>
