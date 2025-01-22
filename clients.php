<?php

include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    return;
}

$cif = $_REQUEST['cif'] ?? '';
$name = $_REQUEST['name'] ?? '';
$dni = $_REQUEST['dni'] ?? '';
$lastName = $_REQUEST['lastName'] ?? '';
$poblation = $_REQUEST['poblation'] ?? '';
$phone = $_REQUEST['phone'] ?? '';


$sql__insert_clients = "INSERT INTO empleados  (cif ,dni ,name ,lastName, poblation ,phone) VALUES (?, ?, ?, ?,?,?)";

$stmt = $conn->prepare($sql__insert_clients);
$stmt->bind_param('ssssss', $cif, $dni, $name, $lastName, $poblation, $phone);

$stmt->execute();

echo "Empresa creada correctamente";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button><a href="index.html">>volver al formulario</a>
</body>

</html>