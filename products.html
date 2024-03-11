<?php
// Conectarse a la base de datos y obtener los productos
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="css/pp.css">
</head>
<body>
    <header>
        <h1>Productos Stock</h1>
        <div class="container-icon">
            <svg 
            xmlns="http://www.w3.org/2000/svg" 
            fill="none" viewBox="0 0 24 24"
             stroke-width="1.5"
              stroke="currentColor"
               class="icon-cart"
               >
                <path 
                stroke-linecap="round" 
                stroke-linejoin="round"
                d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>
            <div class="count-products">
                <span id="contador-productos">0</span>
            </div>
            <div class="container-cart-products hidden-cart">
                <div class="cart-product">
                    <div class="info-cart-product">
                        <span class="cantidad-producto-carrito">0</span>
                        <p class="titulo-producto-carrito"></p>
                        <span class="precio-producto-carrito"></span>
                    </div>
                    <svg
                     xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                       viewBox="0 0 24 24" 
                       stroke-width="1.5"
                        stroke="currentColor" 
                        class="icon-close"
                        >

                        <path 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        d="M6 18L18 6M6 6l12 12" 
                        />
                    </svg>
                </div>
                <div class="cart-total">
                    <h3>Total:</h3>
                    <span class="total-pagar">S/00</span>
                    <button>Comprar</button>
                </div>
            </div>
        </div>
    </header>
    <div class="container-items">
        <?php foreach ($productos as $producto) : ?>
            <div class="item">
                <figure>
                    <img src="<?php echo $producto['imagen_url']; ?>" alt="producto">
                </figure>
                <div class="info-product">
                    <h2><?php echo $producto['nombre']; ?></h2>
                    <p class="price"><?php echo $producto['precio']; ?></p>
                    <button>Añadir al carrito</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <style>
        footer {
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #f8f8f8;
            padding: 10px;
            z-index: 1000; /* Asegura que el pie de página esté en la parte superior */
        }

        footer img {
            max-width: 5%;
            display: inline-block;
            vertical-align: middle;
        }

        .container-items {
        margin-bottom: 150px; /* Ajusta el margen inferior para dejar espacio para el pie de página */
        }
        .swiper-special {
        margin-bottom: 200px; /* Ajusta este valor según sea necesario para dejar suficiente espacio */
        }
    </style>

    <footer>
        <!-- Logo con calidad 100% -->
        <img src="images/logo1.jpg" alt="Logo" style="width: 10%;" />
    </footer>
	<script src="js/product.js"></script>
</body>
</html>











