<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de tu página</title>
    <link rel="stylesheet" href="vista/assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="vista/public/registrarProveedores.php">Registrar Proveedores</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="vista/public/registrarCleintes.php">Registrar Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vista/public/registrarProductos.php">Registrar Productos</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img src="ruta_de_la_imagen" alt="Imagen de la tienda">
            </div>
            <div class="col-md-6">
                <p>Descripción de la tienda que vende accesorios y partes de computadoras.</p>
            </div>
        </div>
    </div>

    <script src="vista/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>