<?php

include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    return;
}


$cif = $_REQUEST['cif'] ?? '';
$country = $_REQUEST['country'] ?? '';
$name = $_REQUEST['name'] ?? '';

$sql__insert_employe = "INSERT INTO company (cif, country, name) VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql__insert_employe);
$stmt->bind_param('sss', $cif, $country, $name);

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