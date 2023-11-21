<?php

session_start();

if(isset($_POST['enviar'])) {

    $correo = $_POST['user'];
    $pass = $_POST['pass'];

    // Realiza la validación aquí
    if (empty($correo) || empty($pass)) {
        $_SESSION['mensaje'] = 'Debe llenar los campos';
        $_SESSION['mensaje_tipo'] = 'alert-danger'; // Establece el tipo de mensaje a error (rojo)
    } elseif ($correo === 'chelitoquiroga@instituto.com' || $correo === 'chelitosubsede@instituto.com') {
        // Validar correo
        if ($pass === 'sistemasNoche' || $pass === 'sistemaPenal23') {
            // Datos de inicio de sesión correctos
            $_SESSION['correo'] = $correo; // Almacena el correo en la sesión
            $_SESSION['pass'] = $pass; // Almacena la contraseña en la sesión
        } else {
            // Contraseña incorrecta
            $_SESSION['mensaje'] = 'Error en la contraseña';
            $_SESSION['mensaje_tipo'] = 'alert-warning'; // Establece el tipo de mensaje a advertencia (amarillo)
        }
    } else {
        // Correo incorrecto
        $_SESSION['mensaje'] = 'Correo inexistente';
        $_SESSION['mensaje_tipo'] = 'alert-warning'; // Establece el tipo de mensaje a advertencia (amarillo)
    }

  if($inicio_sesion_exitoso) {

    // Mostrar datos en una card
    echo '<div class="card">';
    echo '<div class="card-body">';

    echo '<h5 class="card-title">Datos de Sesión</h5>';
    
    echo '<p class="card-text">';
    echo '<b>Correo:</b> ' . $_SESSION['correo'];  
    echo '</p>';

    echo '<p class="card-text">';
    echo '<b>Contraseña:</b> ' . $_SESSION['pass'];
    echo '</p>';

    echo '</div>';
    echo '</div>';

  } else {
    header('Location:../../index.php');
    exit();
  }

}

?>



//<section class="container bg-warning bg-opacity-25 mt-3 rounded p-3">
    <h2 class="text-center fw-semibold text-uppercase">Resultado del formulario</h2>
    <main class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
            <!-- Componente de tarjeta de Bootstrap -->
            <div class="card">
                <div class="card bg-warning bg-opacity-50">
                    <img src="imagenes/jos.jpg" class="card-img-top rounded-circle mx-auto" alt="" style="width: 150px; height: 150px;">
                </div>

                <div class="card-body text-center">
                    <?php
                    // Verifica si las variables de sesión están definidas antes de mostrarlas
                    if (isset($_SESSION['correo']) && isset($_SESSION['pass'])) {
                        $correo = $_SESSION['correo'];
                        $pass = $_SESSION['pass'];

                        echo '<h5 class="card-title">Email: ' . $correo . '</h5>';
                        echo '<p class="card-text fw-bold">Contraseña: ' . $pass . '</p>';
                    }
                    ?>
                    <a href="resultado.php" class="btn btn-primary">Ir a formulario de registro</a>
                </div>
            </div>
        </div>
    </main>
</section>
