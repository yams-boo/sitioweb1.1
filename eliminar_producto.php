<?php
// Verificar si se ha enviado el formulario para eliminar productos
if(isset($_POST['eliminar'])) {
    // Verificar si se han seleccionado productos para eliminar
    if(isset($_POST['productos_seleccionados']) && !empty($_POST['productos_seleccionados'])) {
        // Datos de conexión a la base de datos
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $database = "dbtecnicojoel";

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $database);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Eliminar cada producto seleccionado
        foreach($_POST['productos_seleccionados'] as $idProducto) {
            // Consulta SQL para eliminar el producto
            $sql = "DELETE FROM productos WHERE id = $idProducto";

            // Ejecutar la consulta
            if ($conn->query($sql) !== TRUE) {
                echo "Error al eliminar el producto con ID: " . $idProducto . "<br>";
            }
        }

        // Cerrar conexión
        $conn->close();

        // Redireccionar a la página de productos después de eliminar
        header("Location: products.php");
        exit();
    } else {
        // Si no se han seleccionado productos, mostrar un mensaje de error
        echo "No se han seleccionado productos para eliminar.";
    }
}
?>
