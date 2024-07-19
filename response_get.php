<?php 
    $nombre = $_GET["nombre"];
    $precio = $_GET["precio"];
    $stock = $_GET["stock"];
    $marca = $_GET["marca"];
    $añoLanz = $_GET["añoLanzam"];
    $nuevoAñoLan = explode("-", $añoLanz);
                                
    $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "portalgames");
    
    
if (!empty($nombre && $precio && $stock && $marca)){
    if (is_numeric($precio) && is_numeric($stock)){
        if (count($nuevoAñoLan) == 3 && checkdate((int)$nuevoAñoLan[1], (int)$nuevoAñoLan[2], (int)$nuevoAñoLan[0])) {
            $query = "INSERT INTO producto (nombre_producto, precio_producto, stock_producto, marca_producto, añoLanzamiento_producto) 
                      VALUES ('$nombre', '$precio', '$stock', '$marca', '$añoLanz')";
            mysqli_query($conexion, $query);
        }
    }
}
    mysqli_close($conexion);

    header("Location: index.php");
    exit;
?>