<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    return;
}


$cif = $_POST['cif'] ?? '';
$dni = $_POST['dni'] ?? '';


try {
    $sql__insert_worker = "INSERT INTO trabajar (cif, dni) VALUES (?, ?)";

    $stmt = $conn->prepare($sql__insert_worker);
    $stmt->bind_param('ss', $cif, $dni);
    if ($stmt->execute()) {
        echo "Trabajador registrado en la empresa correctamente";
    } else {
        echo "Error al insertar el registro: " . $stmt->error;
    }
} catch (mysqli_sql_exception $e) {
    // Mensaje personalizado para el error específico
    if (str_contains($e->getMessage(), 'a foreign key constraint fails')) {
        echo "Error: El valor del campo 'cif' no coincide con un registro existente en la tabla 'company'.";
    } else {
        // Para otros errores, muestra un mensaje genérico o el original
        echo "Ocurrió un error: " . $e->getMessage();
    }
}
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