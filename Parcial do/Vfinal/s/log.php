<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form action="log.php" method="post">
            <label for="nameU">Nombre de Usuario:</label>
            <input type="text" id="nameU" name="nameU" required>
            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" required>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nameU = $_POST['nameU'];
        $pass = sha1($_POST['pass']);

        $conexion = mysqli_connect('localhost', 'root', '', 'Silverhand', '3306');

        if (!$conexion) {
            die("Error de conexión: " . mysqli_connect_error());
        }

        $sql = "SELECT mart FROM usuarios WHERE nameU = '$nameU' AND pass = '$pass'";
        $result = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['mart']) {
                header("Location: master.php");
            } else {
                header("Location: slave.php");
            }
            exit();
        } else {
            echo "Nombre de usuario o contraseña incorrectos.";
        }

        mysqli_close($conexion);
    }
    ?>
     
</body>
</html>
<li><a href="index.html">Pagina principal</a></li>
