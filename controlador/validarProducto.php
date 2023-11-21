<?php
include("../modelo/BD/dataBase.php");
include("../modelo/BD/config.php");

$db = new DataBase();

if (isset($_POST['enviar'])) {
   
    $codigo = mysqli_real_escape_string($db->link, $_POST['Codigo']);
    $descripcion = mysqli_real_escape_string($db->link, $_POST['descripcion']);
    $marca = mysqli_real_escape_string($db->link, $_POST['marca']);
    $precio = mysqli_real_escape_string($db->link, $_POST['precio']);

    $cantidad = mysqli_real_escape_string($db->link, $_POST['cantidad']);

     echo $codigo;
     echo $descripcion;
     echo $marca;
     echo $precio;
     echo $cantidad;

    if (empty($codigo) || empty($descripcion) || empty($marca) || empty($precio) || empty($cantidad)) {
        header('Location: ../vista/public/registrarProductos.php ?error=' . urlencode('Debe llenar todos los campos'));
        exit(); 
    }    
   
        // Insertar datos en la tabla tbl_usuario:
        $query = "INSERT INTO producto (IdProducto,Descripcion,Marca, Precio,NumeroExistencias) 
                  VALUES ('$codigo', '$descripcion', '$marca', '$precio', '$cantidad')";

         $create =  mysqli_insert_id($db-> registerProductos ($query)); 
} 
?>
