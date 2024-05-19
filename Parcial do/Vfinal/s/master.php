<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Alumnos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Gestión de Alumnos</h2>
        <form action="master.php" method="post">
            <input type="hidden" name="action" value="add">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
            <label for="semestre">Semestre:</label>
            <input type="number" id="semestre" name="semestre" required>
            <label for="promedio">Promedio:</label>
            <input type="number" step="0.01" id="promedio" name="promedio" required>
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>
            <label for="numero_telefono">Número de Teléfono:</label>
            <input type="text" id="numero_telefono" name="numero_telefono" required>
            <input type="submit" value="Agregar Alumno">
        </form>

        <table>
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Semestre</th>
                    <th>Promedio</th>
                    <th>Dirección</th>
                    <th>Número de Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conexion = mysqli_connect('localhost', 'root', '', 'Silverhand', '3306');

                if (!$conexion) {
                    die("Error de conexión: " . mysqli_connect_error());
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $action = $_POST['action'];
                    
                    if ($action == 'add') {
                        $nombre = $_POST['nombre'];
                        $apellido = $_POST['apellido'];
                        $semestre = $_POST['semestre'];
                        $promedio = $_POST['promedio'];
                        $direccion = $_POST['direccion'];
                        $numero_telefono = $_POST['numero_telefono'];

                        $sql = "INSERT INTO alumnos (nombre, apellido, semestre, promedio, direccion, numero_telefono) VALUES ('$nombre', '$apellido', $semestre, $promedio, '$direccion', '$numero_telefono')";
                        mysqli_query($conexion, $sql);
                    } elseif ($action == 'delete') {
                        $matricula = $_POST['matricula'];
                        $sql = "DELETE FROM alumnos WHERE matricula = $matricula";
                        mysqli_query($conexion, $sql);
                    }
                }

                $sql = "SELECT * FROM alumnos";
                $result = mysqli_query($conexion, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['matricula'] . "</td>";
                        echo "<td>" . $row['nombre'] . "</td>";
                        echo "<td>" . $row['apellido'] . "</td>";
                        echo "<td>" . $row['semestre'] . "</td>";
                        echo "<td>" . $row['promedio'] . "</td>";
                        echo "<td>" . $row['direccion'] . "</td>";
                        echo "<td>" . $row['numero_telefono'] . "</td>";
                        echo "<td>
                                <form style='display:inline;' action='master.php' method='post'>
                                    <input type='hidden' name='action' value='delete'>
                                    <input type='hidden' name='matricula' value='" . $row['matricula'] . "'>
                                    <input type='submit' value='Borrar'>
                                </form>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No hay alumnos registrados.</td></tr>";
                }

                mysqli_close($conexion);
                ?>
               
            </tbody>
        </table>
    </div>
</body>
</html>
<li><a href="index.html">Pagina principal</a></li>
