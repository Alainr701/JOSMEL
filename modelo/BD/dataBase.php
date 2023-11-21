<?php


class DataBase{
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $dbname = DB_NAME;
    public $link;

    /* Define un constructor para inicializar el objeto. El constructor llama al método connectDB() */
    public function __construct() {
        $this->connectDB();
    }

    /* Este método se encarga de establecer la conexión con la base de datos utilizando la información almacenada en las variables
    $host, $user, $pass y $dbname */
    private function connectDB() {
        $this->link = new mysqli($this->link, $this->user, $this->pass, $this->dbname);
        

        if ($this->link->connect_error) {
            throw new Exception("Conexión fallida: " . $this->link->connect_error);
        }
    }

    /* Este método se utiliza para ejecutar una consulta SQL en la base de datos. */
    public function select($query) {
        $result = $this->link->query($query) or die($this->link->error . " en la línea " . __LINE__);

        /* Si la consulta devuelve algún resultado, el método devuelve un objeto mysqli_result que contiene los resultados de la
        consulta. */
        if ($result->num_rows > 0) {
            return $result;
        } else {
            /* Si la consulta no devuelve ningún resultado, el método lanza una excepción con un mensaje de error. */
            throw new Exception("El dato no existe!!!");
        }
    }



//========================CRUD=========================/
//REGISTRAR DATOS DE LA TABLA CLIENTES//
public function registerUser($query)
{
    $result = $this->link->query($query) or die($this->link->error . ' en la línea ' . __LINE__);

    if ($result) {
        header("Location: ../vista/public/registrarCleintes.php?msg=" . urlencode("Los datos han sido registrados exitosamente!!"));
        exit();
    } else {
        die("Error: (" . $this->link->errno . ") " . $this->link->error);
    }
}



//REGISTRAR DATOS DE LA TABLA proveedores//

public function registerProvedor($query)
{
    $result = $this->link->query($query) or die($this->link->error . ' en la línea ' . __LINE__);

    if ($result) {
        header("Location: ../vista/public/registrarProveedores.php?msg=" . urlencode("Los datos han sido registrados exitosamente!!"));
        exit();
    } else {
        die("Error: (" . $this->link->errno . ") " . $this->link->error);
    }
}
//REGISTRAR DATOS DE LA TABLA productos//

public function registerProductos($query)
{
    $result = $this->link->query($query) or die($this->link->error . ' en la línea ' . __LINE__);

    if ($result) {
        header("Location: ../vista/public/registrarProductos.php?msg=" . urlencode("Los datos han sido registrados exitosamente!!"));
        exit();
    } else {
        die("Error: (" . $this->link->errno . ") " . $this->link->error);
    }
}

}
?>
