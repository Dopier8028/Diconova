<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$db = new SQLite3(__DIR__ . '/../Datos/contacto.db');

$nombre = $_POST['nombre'] ?? '';
$correo = $_POST['correo'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$asunto = $_POST['asunto'] ?? '';
$mensaje = $_POST['mensaje'] ?? '';

if (empty($nombre) || empty($correo) || empty($telefono) || empty($asunto) || empty($mensaje)) {
    echo "Datos vacíos";
    exit;
}

$stmt = $db->prepare("
    INSERT INTO mensajes (nombre, correo, telefono, asunto, mensaje)
    VALUES (:nombre, :correo, :telefono, :asunto, :mensaje)
");

$stmt->bindValue(':nombre', $nombre, SQLITE3_TEXT);
$stmt->bindValue(':correo', $correo, SQLITE3_TEXT);
$stmt->bindValue(':telefono', $telefono, SQLITE3_TEXT);
$stmt->bindValue(':asunto', $asunto, SQLITE3_TEXT);
$stmt->bindValue(':mensaje', $mensaje, SQLITE3_TEXT);

$result = $stmt->execute();

if (!$result) {
    echo "ERROR SQLITE: " . $db->lastErrorMsg();
} else {
    echo "OK";
}

$db->close();
?>