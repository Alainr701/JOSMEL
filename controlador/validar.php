<?php
include("../modelo/BD/dataBase.php");
include("../modelo/BD/config.php");

$db = new DataBase();

if (isset($_POST['submit'])) {
   
    $nombre = mysqli_real_escape_string($db->link, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($db->link, $_POST['apellido']);
    $direccion = mysqli_real_escape_string($db->link, $_POST['direccion']);
    $telefono = mysqli_real_escape_string($db->link, $_POST['telefono']);

    if (empty($nombre) || empty($apellido) || empty($direccion) || empty($telefono)) {    
        header('Location: ../vista/public/registrarCleintes.php ?error=' . urlencode('Debe llenar todos los campos'));
        exit();
    } else {
        // Insertar datos en la tabla tbl_usuario:
        $query = "INSERT INTO cliente (nombre, apellidos, direccion, NumeroCelular) 
                  VALUES ('$nombre', '$apellido', '$direccion', '$telefono')";

         $create =  mysqli_insert_id($db->registerUser ($query)); 
    }
} 
?>
