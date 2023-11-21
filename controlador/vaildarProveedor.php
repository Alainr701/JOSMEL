<?php
include("../modelo/BD/dataBase.php");
include("../modelo/BD/config.php");

$db = new DataBase();

if (isset($_POST['enviar'])) {
   
    $nombre = mysqli_real_escape_string($db->link, $_POST['nombre']);
    $direccion = mysqli_real_escape_string($db->link, $_POST['direccion']);
    $telefono = mysqli_real_escape_string($db->link, $_POST['telefono']);

    if (empty($nombre) || empty($direccion) || empty($telefono)) {    
        header('Location: /vista/public/registrarProveedores.php ?error=' . urlencode('Debe llenar todos los campos'));
        exit();
    } else {
        // Insertar datos en la tabla tbl_usuario:
        $query = "INSERT INTO proveedor (nombre,direccion, NumeroTelefono) 
                  VALUES ('$nombre', '$direccion', '$telefono')";

         $create =  mysqli_insert_id($db-> registerProvedor ($query)); 
    }
} 
?>
