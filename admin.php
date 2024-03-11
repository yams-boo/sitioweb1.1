<?php
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

// Consulta SQL para obtener todos los productos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

// Array para almacenar los productos
$productos = array();

if ($result->num_rows > 0) {
    // Guardar los productos en un array
    while($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }
}

// Cerrar conexión
$conn->close();
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Admin - Lista de Productos</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
    <div class="container">
        <h2>Lista de Productos</h2>
        <form action="eliminar_producto.php" method="post">
            <table>
                 <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                </tr>
                <?php foreach ($productos as $producto) : ?>
                    <tr>
                        <td><input type="checkbox" name="productos_seleccionados[]" value="<?php echo $producto['id']; ?>"></td>
                        <td><?php echo $producto['nombre']; ?></td>
                        <td><?php echo $producto['precio']; ?></td>
                        <td><img src="<?php echo $producto['imagen_url']; ?>" alt="<?php echo $producto['nombre']; ?>" width="100"></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <button type="submit" name="eliminar">Eliminar</button>
        </form>
            <a href="insertar.php"><button>Agregar</button></a>
            <a href="products.php"><button>Actualizar</button></a> 
            <a href="index.php"><button>Salir</button></a> 

    </div>
</body>
</html>



