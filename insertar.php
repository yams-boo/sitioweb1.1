<!DOCTYPE html>
<html>
<head>
    <title>Insertar Nuevo Producto</title>
    <link rel="stylesheet" type="text/css" href="css/insertar.css">
</head>
<body>
    <h2>Insertar Nuevo Producto</h2>
    <form action="insertar.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br>
        
        <label for="precio">Precio:</label><br>
        <input type="number" id="precio" name="precio" step="0.01" required><br>
        
        <label for="imagen_url">URL de la Imagen:</label><br>
        <input type="text" id="imagen_url" name="imagen_url" required><br>
        
        <input type="submit" value="Guardar">
    </form>

    <?php
    // Verificar si el formulario ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $imagen_url = $_POST['imagen_url'];

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

        // Preparar la consulta SQL para insertar el nuevo producto
        $sql = "INSERT INTO productos (nombre, precio, imagen_url) VALUES ('$nombre', $precio, '$imagen_url')";

        // Ejecutar la consulta
        if ($conn->query($sql) === TRUE) {
            header("Location: admin.php");
            exit();
        } else {
            echo "Error al insertar el producto: " . $conn->error;
        }

        // Cerrar conexión
        $conn->close();
    }
    ?>
</body>
</html>
