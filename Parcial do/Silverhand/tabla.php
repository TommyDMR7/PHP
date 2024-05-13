<?php
$db = mysqli_connect('localhost', 'root', '', 'world', '3306');

if ($db->connect_error) {
    die('Error de conexión: ' . $db->connect_error);
}
$countryCode = $_POST['countrycode'];

$sql = "SELECT * FROM City WHERE countrycode='$countryCode'";
$resultado = $db->query($sql);

if ($resultado->num_rows > 0) {
    echo "<h1>Lista de Ciudades</h1>";
    echo "<table border=1>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Código País</th><th>Distrito</th><th>Población</th></tr>";

    while($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila["ID"] . "</td>";
        echo "<td>" . $fila["Name"] . "</td>";
        echo "<td>" . $fila["CountryCode"] . "</td>";
        echo "<td>" . $fila["District"] . "</td>";
        echo "<td>" . $fila["Population"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay resultados para el código de país: $countryCode";
}

$db->close();