-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS contactos
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

-- Usar la base de datos
USE contactos;

-- Crear la tabla para almacenar los mensajes del formulario
CREATE TABLE IF NOT EXISTS mensajes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(150) NOT NULL,
    mensaje TEXT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
