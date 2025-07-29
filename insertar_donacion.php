<?php
include 'conexion.php';

$monto = $_POST['monto'];
$fecha = $_POST['fecha'];
$id_proyecto = $_POST['id_proyecto'];
$id_donante = $_POST['id_donante'];

$stmt = $conn->prepare("INSERT INTO DONACION (monto, fecha, id_proyecto, id_donante) VALUES (?, ?, ?, ?)");
$stmt->bind_param("dsii", $monto, $fecha, $id_proyecto, $id_donante);
$stmt->execute();

echo "Donación registrada correctamente.";
$stmt->close();
$conn->close();
?>