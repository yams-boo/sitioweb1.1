<?php
// Verificar si los datos del formulario se han enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $username_input = $_POST['username'];
    $password_input = $_POST['password'];

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

    // Consulta SQL para verificar las credenciales
    $sql = "SELECT * FROM usuario WHERE nombre = '$username_input' AND clave = '$password_input'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Credenciales válidas, redireccionar al usuario a admin.php
        header("Location: admin.php");
        exit(); // Importante: asegúrate de salir del script después de redirigir
    } else {
        // Credenciales inválidas, mostrar mensaje de error
        $error_message = "Nombre de usuario o contraseña incorrectos.";
    }

    // Cerrar conexión
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <div class="container">
        <section id="content">
            <form action="" method="post"> <!-- Se especifica el archivo PHP para manejar el inicio de sesión -->
                <h1>Login Form</h1>
                <div>
                    <input type="text" placeholder="Username" required="" name="username" id="username" /> <!-- Se agrega el atributo 'name' -->
                </div>
                <div>
                    <input type="password" placeholder="Password" required="" name="password" id="password" /> <!-- Se agrega el atributo 'name' -->
                </div>
                <div>
                    <input type="submit" value="Log in" />
                </div>
            </form><!-- form -->
            <?php if(isset($error_message)) echo "<p>$error_message</p>"; ?> <!-- Mostrar mensaje de error si existe -->
        </section><!-- content -->
    </div><!-- container -->
</body>
</html>
