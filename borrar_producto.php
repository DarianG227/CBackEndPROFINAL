<?php

$id_producto = $_GET["id_producto"];
$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "portalgames");

$query = "DELETE FROM producto WHERE ($id_producto = id_producto)";
$resultado = mysqli_query($conexion, $query);

mysqli_close($conexion);

// Redirigir de vuelta a la página de productos
header("Location: index.php");
exit;

?>