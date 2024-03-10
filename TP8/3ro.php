<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Document</title>
</head>
<body>
<table border="1" cellpacing="0" class="i">
    <tr>
 <td><li><a href="Index.html">Inicio</a></li></td>   
</tr>
</table>
<h1>3991. Adquisición de Letras</h1>
<h5><table border="1" cellspacing="0" cellpadding = "8" class="Jo">
        <tr>
            <td><h5>Puntos</h5></td>
            <td>16.93</td>
            <td><h5>Limite de memoria</h5></td>
            <td>32 MiB</td>
        </tr>
        <tr>
            <td><h5>Limite de tiempo (caso)</h5></td>
            <td>1s</td>
            <td><h5>Limite de tiempo (total)</h5></td>
            <td>1m0s</td>
        </tr>
        <tr>
            <td><h5>Tamaño límite de entrada (bytes)</h5></td>
            <td>10 KiB</td>
        </tr>
    </table>
    <h2>Descripcion</h2>
    <p>En el ITAM, a los alumnos que estudian ingeniería les gusta comer letras. A Miguel le encanta la letra "d" y quiere<br>
     saber cuántas se va a poder comer de un paquete que la escuela proporciona a todos sus alumnos.<br>
    El paquete que la escuela entrega es una palabra con letras minúsculas del alfabeto.</p>
    <h2>Entrada</h2>
    <p>Un solo string de letras minúsculas.</p>
    <h2>Salida</h2>
    <p>La cantidad de veces que aparece la letra favorita de Miguel.</p>
    <table border="1">
        <tr>
            <td>Entrada</td> <td>Salida</td>
        </tr>
        <tr>
            <td> abcjdlllld </td> <td>  2</td>
        </tr>
    </table>
    <form method="post">
  <label for="cadena">Cadena de caracteres:</label>
  <input type="text" id="cadena" name="cadena" maxlength="100">
  <br>
  <input type="submit" value="Enviar"> <br>
</form>
<?php
    if ($_POST) {
  $cadena = $_POST['cadena'];

  // Validar la cadena
  if (!preg_match('/^[A-Za-z0-9-]{0,100}$/', $cadena)) {
    echo "<p style='color: red'>Error: La cadena no debe tener más de 100 caracteres y solo puede contener letras, números y guiones.</p>";
    exit;
  }

  // Contar la cantidad de apariciones de la letra "d"
  $count = 0;
  for ($i = 0; $i < strlen($cadena); $i++) {
    if ($cadena[$i] === 'd') {
      $count++;
    }
  }

  // Mostrar el resultado
  echo "<p>La letra 'd' aparece $count veces en la cadena.</p>";
}
?>
<table border="1" cellpacing="0" class="i">
    <tr>
 <td><li><a href="2do.php">Regresar</a></li></td>   
</tr>
</table>
</body>
</html>