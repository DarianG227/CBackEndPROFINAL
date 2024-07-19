<?php

$producto = $_GET ["idPro"];
$nombre = $_GET["nombre"];
$precio = $_GET["precio"];
$stock = $_GET["stock"];
$marca = $_GET["marca"];
$añoLanz = $_GET["añoLanzam"];
$nuevoAñoLan = explode("-", $añoLanz);

/* verificar los valores recibidos
var_dump($producto, $nombre, $precio, $stock, $marca, $añoLanz);
exit;*/
                                
$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "portalgames");

    
if (!empty($nombre && $precio && $stock && $marca)){
    if (is_numeric($precio) && is_numeric($stock)){
        if (count($nuevoAñoLan) == 3 && checkdate((int)$nuevoAñoLan[1], (int)$nuevoAñoLan[2], (int)$nuevoAñoLan[0])) {
            $query = "UPDATE producto SET nombre_producto = '$nombre', precio_producto = '$precio', stock_producto = '$stock', 
            marca_producto = '$marca', añoLanzamiento_producto = '$añoLanz' WHERE id_producto = $producto";
            mysqli_query($conexion, $query);
        }
    }            
}
mysqli_close($conexion);
header("Location: index.php");
exit;
?>