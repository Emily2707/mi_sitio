<?php
include "conexion.php";

$nombre  = trim($_POST["nombre"]);
$correo  = trim($_POST["correo"]);
$mensaje = trim($_POST["mensaje"]);

// Validación básica
if ($nombre == "" || $correo == "" || $mensaje == "") {
    header("Location: ../contacto.html?ok=0");
    exit;
}

// Insertar en la base de datos
$sql = "INSERT INTO mensajes (nombre, correo, mensaje) 
        VALUES ('$nombre', '$correo', '$mensaje')";

if (mysqli_query($conn, $sql)) {

    // Redirige de regreso con mensaje estilo Facebook
    header("Location: ../contacto.php?ok=1");
    exit;

} else {
    echo "Error: " . mysqli_error($conn);
}
?>
