<?php
session_start(); // Inicia la sesión

if (isset($_SESSION['correo']) && isset($_SESSION['pass'])) {
    $correo = $_SESSION['correo'];
    $pass = $_SESSION['pass'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... tus etiquetas meta y enlaces de estilo ... -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>

<body class="bg-danger bg-opacity-25">
    <section class="container bg-warning bg-opacity-25 mt-3 rounded p-3">
        <h2 class=" text-center fw-semibold text-uppercase">BIENVENIDO</h2>
        <main class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                <div class="card">
                    <!-- ... contenido de la tarjeta ... -->
                    <div class="card-body text-center">
                        <h5 class="card-title">Email: <?php echo $correo; ?></h5>
                        <p class="card-text fw-bold">Contraseña: <?php echo $pass; ?></p>
                        <a href="../../index.php" class="btn btn-primary">Ir a formulario de registro</a>
                    </div>
                </div>
            </div>
        </main>
    </section>
    <!-- ... enlace a Bootstrap JavaScript ... -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
} else {
    // Redirige si las variables de sesión no están disponibles
    header('Location:../../index.php');
}
?>