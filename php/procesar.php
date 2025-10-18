<?php
// Incluir conexión
require_once '../php/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $reclamo = trim($_POST['reclamo']);

    if (empty($nombre) || empty($correo) || empty($reclamo)) {
        die("<h2>⚠️ Error</h2><p>Todos los campos son obligatorios.</p><a href='../index.php'>Volver</a>");
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO clientes (nombre, correo, reclamo) VALUES (?, ?, ?)");
        $stmt->execute([$nombre, $correo, $reclamo]);

        echo "<h2>✅ ¡Gracias por tu mensaje!</h2>";
        echo "<p>Hemos recibido tu solicitud y nos pondremos en contacto contigo pronto.</p>";
        echo "<a href='../index.php'>Volver al inicio</a>";

    } catch (PDOException $e) {
        die("<h2>❌ Error</h2><p>No se pudo guardar tu mensaje. Inténtalo más tarde.</p><a href='../index.php'>Volver</a>");
    }
} else {
    header("Location: ../index.php");
    exit();
}
?>