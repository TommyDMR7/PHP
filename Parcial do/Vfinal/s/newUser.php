<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Registrarse</h2>
        <form action="newUser.php" method="post">
            <label for="nombre">Nombre Completo:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="nameU">Nombre de Usuario:</label>
            <input type="text" id="nameU" name="nameU" required>
            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" required>
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required>
            <label for="mart">¿Eres maestro?</label>
            <select id="mart" name="mart" required>
                <option value="0">No</option>
                <option value="1">Sí</option>
            </select>
            <input type="submit" value="Registrarse">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $nameU = $_POST['nameU'];
        $pass = sha1($_POST['pass']);
        $correo = $_POST['correo'];
        $mart = $_POST['mart'] == '1' ? true : false;

        $conexion = mysqli_connect('localhost', 'root', '', 'Silverhand', '3306');

        if (!$conexion) {
            die("Error de conexión: " . mysqli_connect_error());
        }

        $martValue = $mart ? 1 : 0;
            $sql = "INSERT INTO usuarios (nombre, nameU, pass, correo, mart) VALUES ('$nombre', '$nameU', '$pass', '$correo', $martValue)";


        if (mysqli_query($conexion, $sql)) {
            header("Location: log.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }

        mysqli_close($conexion);
    }
    ?>
     
</body>
</html>
<li><a href="index.html">Pagina principal</a></li>
