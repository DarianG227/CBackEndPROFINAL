<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTALGAMES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styleAgregarP.css">
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
        <br>
        <h3 class="añadir">AÑADA LOS DATOS CORRESPONDIENTES</h3>
        <br>
        
        <form class="formulario" method="get" action="./response_get.php">
            <br>
            <label class="infoProducto" for="nombre"> <strong>Nombre:</strong> </label> <input class="espacioEscribir0" type="text" name="nombre" id="nombre">
            <br>
            <br>
            <label class="infoProducto" for="stock"> <strong> Stock: </strong></label> <input class="espacioEscribir1" type="number" name="stock" id="stock">
            <br>
            <br>
            <label class="infoProducto" for="precio"> <strong> Precio: </strong></label> <input class="espacioEscribir" type="number" name="precio" id="precio">
            <br>
            <br>
            <label class="infoProducto" for="marca"> <strong> Marca: </strong></label> <input class="espacioEscribir" type="text" name="marca" id="marca">
            <br>
            <br>
            <label class="infoProducto" for="añoLanzam"> <strong> Año de Lanzamiento: </strong> </label> <input type="date" name="añoLanzam" id="añoLanzam">
            <br>
            <br>
            <br>
            <input class="guardar" type="submit" value="Guardar">
        </form>
    </section>
    </div>
</body>
</html>