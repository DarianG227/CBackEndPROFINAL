<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTALGAMES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styleEditP.css">
    </head>
<body>
  <img class="fondoPantalla" src="https://e1.pxfuel.com/desktop-wallpaper/741/314/desktop-wallpaper-playstation-games-ps2-games.jpg" alt="FONDO">
    <header>
            <!-- Barra de navegación -->
            <nav>
                <ul class="nav nav-underline">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="páginaInicio.html">PORTALGAMES</a>
                </li>
                <li class="nav-item">
                  <a class="PartesNav nav-link" href="#">AYUDA</a>
                </li>
                <li class="nav-item">
                  <a class="PartesNav nav-link" href="redes.html">REDES</a>
                </li>
              </ul>
            </nav>
    </header>
    <div>
    <section>
    <?php   
      $id_producto = $_GET["id_producto"];
      $conexion = mysqli_connect ("127.0.0.1:3306","root","","portalgames");

      $nombre_p_query = "SELECT nombre_producto FROM producto WHERE (id_producto = $id_producto)";
      $stock_p_query = "SELECT stock_producto FROM producto WHERE (id_producto = $id_producto)";
      $marca_p_query = "SELECT marca_producto FROM producto WHERE (id_producto = $id_producto)";
      $precio_p_query = "SELECT precio_producto FROM producto WHERE (id_producto = $id_producto)";
      $fecha_p_query = "SELECT añoLanzamiento_producto FROM producto WHERE (id_producto = $id_producto)";
      $id_p_query = "SELECT id_producto FROM producto WHERE (id_producto = $id_producto)";

      $nombre_p_result = mysqli_query($conexion, $nombre_p_query);
      $stock_p_result = mysqli_query($conexion, $stock_p_query);
      $marca_p_result = mysqli_query($conexion, $marca_p_query);
      $precio_p_result = mysqli_query($conexion, $precio_p_query);
      $fecha_p_result = mysqli_query($conexion, $fecha_p_query);
      $idProducto_result = mysqli_query($conexion, $id_p_query);
  
      $nombre_p = mysqli_fetch_assoc($nombre_p_result)['nombre_producto'];
      $stock_p = mysqli_fetch_assoc($stock_p_result)['stock_producto'];
      $marca_p = mysqli_fetch_assoc($marca_p_result)['marca_producto'];
      $precio_p = mysqli_fetch_assoc($precio_p_result)['precio_producto'];
      $fecha_p = mysqli_fetch_assoc($fecha_p_result)['añoLanzamiento_producto'];
      $id_p = mysqli_fetch_assoc($idProducto_result)['id_producto'];

      

       echo  '<br>
        <h3 class="añadir">AÑADA LOS DATOS CORRESPONDIENTES</h3>
        <br>

        <form class="formulario" method="get" action="./response_get_Edit.php">
         <input  class="espacioEscribir2" type="hidden" name="idPro" id="idPro" value="' . $id_p . '" >
            <br>
            <br>
            <label class="infoProducto" for="nombre"> <strong>Nombre:</strong> </label> <input class="espacioEscribir0" type="text" name="nombre" id="nombre" value="' . $nombre_p . '" >
            <br>
            <br>
            <label class="infoProducto" for="stock"> <strong> Stock: </strong></label> <input class="espacioEscribir1" type="number" name="stock" id="stock" value="' . $stock_p . '">
            <br>
            <br>
            <label class="infoProducto" for="precio"> <strong> Precio: </strong></label> <input class="espacioEscribir" type="number" name="precio" id="precio" value="' . $precio_p . '">
            <br>
            <br>
            <label class="infoProducto" for="marca"> <strong> Marca: </strong></label> <input class="espacioEscribir" type="text" name="marca" id="marca" value="' . $marca_p . '">
            <br>
            <br>
            <label class="infoProducto" for="añoLanzam"> <strong> Año de Lanzamiento: </strong> </label> <input type="date" name="añoLanzam" id="añoLanzam" value="' . $fecha_p . '">
            <br>
            <br>
            <br>
            
            <input class="guardar" type="submit" value="Guardar">
            


        </form>';
      mysqli_close($conexion);
      ?>
    </section>
    </div>
</body>
</html>