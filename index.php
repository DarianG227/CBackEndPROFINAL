<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTALGAMES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
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
        <section>
        <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-4">
                    <h2 class="heading-section"> <strong>PRODUCTOS</strong></h2>
                </div>
        </div>
        <div class="row">
                    <div class="col-md-12">
                        <div class="table-wrap">
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Stock</th>
                                        <th>Marca</th>
                                        <th>Fecha Lanzamiento</th>
                                        <th>Eliminar Producto</th>
                                        <th>Editar Producto</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "portalgames");

                                    $query = "SELECT * FROM producto";
                                    $resultado = mysqli_query($conexion, $query);

                                    while($unaFila = mysqli_fetch_assoc($resultado)){
                                        echo '<tr class="alert" role="alert">
                                                <td>
                                                    <div class="email">
                                                        <span>'.$unaFila["nombre_producto"].'</span>
                                                    </div>
                                                </td>
                                                <td>$'.$unaFila["precio_producto"].'</td>
                                                <td>'.$unaFila["stock_producto"].'</td>
                                                <td><span>'.$unaFila["marca_producto"].'</span> </td>
                                                <td>'.$unaFila["añoLanzamiento_producto"].'</td>
                                                <td>
                                                    <a href="borrar_producto.php?id_producto='.$unaFila["id_producto"].'">
                                                    <i class="bi bi-trash"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                                        </svg>
                                                    </a>
                                                </td>
                                                <td>
                                                <a href="editarP.php?id_producto='.$unaFila["id_producto"].'">
                                                    <i class="bi bi-pencil"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                                                    </svg>
                                                </a>
                                                </td>
                                            </tr>';
                                    }
                                    mysqli_close($conexion);
                                ?>                                
                            </tbody>
                            <div class="botones">
                            <button type="button"><a href="agregarP.php"> AGREGAR PRODUCTO </a></button>
                            </div>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button"><a href="agregarP.php"> AGREGAR PRODUCTO </a></button>
        </section>
</body>
</html>