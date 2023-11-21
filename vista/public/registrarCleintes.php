<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de tu página</title>
    <link rel="stylesheet" href="vista/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
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
                    <a class="nav-link" href="registrarProveedores.php">Registrar Proveedores</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="registrarCleintes.php">Registrar Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registrarProductos.php">Registrar Productos</a>
                </li>
            </ul>
        </div>
    </nav>
    <body class="bg-success bg-opacity-50 m-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="vista/assets/img/galeria/f.jpg" class="img-fluid" alt="Imagen">
      </div>

      <div class="col-md-6 m-5" >
        <form action="../../controlador/validar.php" method="POST" class="mx-5 p-4 rounded bg-secondary bg-gradient border border-info border-4 bg-opacity-75">
          <?php
          if (isset($_GET['msg'])) {
            echo '<center class="alert alert-danger fw-bold">' . $_GET['msg'] . '</center>';
          }
          if (isset($_GET['msg2'])) {
            echo '<center class="alert alert-warning fw-bold">' . $_GET['msg2'] . '</center>';
          }
          ?>
          <center>
            <h3 class="display-5 fw-bold">Registro</h3>
          </center>
          <div class="row mb-3">
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Nombre" name="nombre">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-12">
              <input type="text" class="form-control" placeholder="Apellido" name="apellido">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-12">
              <input type="text" class="form-control" placeholder="Dirección" name="direccion">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Teléfono" name="telefono">
            </div>
          </div>

          <center>
            <button type="submit" id="enviar" name="submit" class="btn btn-primary">Enviar</button>
           
            <input type="reset" class="btn btn-success"value="Limpiar">
          </center>
        </form>

      </div>
    </div>
  </div>

  <script src="vista/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
    <script src="vista/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>