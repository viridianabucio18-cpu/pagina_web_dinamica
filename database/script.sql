CREATE DATABASE IF NOT EXISTS crud_mascotas;
USE crud_mascotas;

CREATE TABLE mascotas (
    id_mascota INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(150) NOT NULL,
    edad VARCHAR(50) NOT NULL,
    sexo VARCHAR(50) NOT NULL,
    imagen VARCHAR(255) NOT NULL
);
