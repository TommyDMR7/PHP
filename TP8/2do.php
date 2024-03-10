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
    <h1>4886. Autores</h1>
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
    <p>Los grandes descubrimientos científicos a menudo son nombrados por los apellidos de los científicos que los hicieron. <br>
     Por ejemplo, el sistema de criptografía asimétrica más popular, RSA fue descubierto por Rivest, Shamir y Adleman. <br>
     Otro ejemplo notable es el algoritmo de Knuth-Morris-Pratt, nombrado por Knuth, Morris y Pratt. <br>
     La referencia de documentos científicos anteriores funciona mucho y es frecuente que un documento utilice dos convenciones de nomenclatura diferentes:<br>
    la variación corta (por ejemplo, KMP) utilizando sólo las primeras letras de los autores y la larga variación <br>
    (por ejemplo, Knuth-Morris-Pratt) Apellidos completos separados por guiones. <br>
     Encontramos que la mezcla de dos convenciones en un papel es estéticamente desagradable y quisiera que usted escribiera un programa que transformara variaciones largas en cortas.</p>
    <h2>Entrada</h2>
    <p>La primera y única línea de entrada contendrá como máximo 100 caracteres, letras mayúsculas y minúsculas del alfabeto inglés y guión ('-' ASCII 45).<br>
     El primer carácter siempre será una letra mayúscula. Los guiones siempre serán seguidos por una letra mayúscula. <br>
     Todos los demás caracteres serán letras minúsculas.</p>
    <h2>Salida</h2>
    <p>La primera y única línea de salida debe contener la variación corta apropiada.</p>


    <table border="1">
        <tr> <td>Ejemplo</td> <td> Outpot</td>
     </tr>
     <tr>
        <td>Knuth-Morris-Pratt</td> <td>KMP</td>
     </tr>
        <td>Mirko-Slavko</td> <td>MS</td>
     <tr>
     <td>Pasko-Patak</td> <td>PP</td>
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
  if (!preg_match('/^[A-Z][a-zA-Z-]{0,99}$/', $cadena)) {
    echo "<p style='color: red'>Error: La cadena no cumple con el formato especificado.</p>";
    exit;
  }

  // Generar la variacion corta
  $variacionCorta = "";
  $primeraPalabra = true;
  for ($i = 0; $i < strlen($cadena); $i++) {
    $caracter = $cadena[$i];
    if ($primeraPalabra || ctype_upper($caracter)) {
      $variacionCorta .= $caracter;
      $primeraPalabra = false;
    }
  }

  // Mostrar el resultado
  echo "<p>Variación corta: $variacionCorta</p>";
}

?>
<table border="1" cellpacing="0" class="i">
    <tr>
        <td><li><a href="1ro.php">Anterior</a></li></td>
 <td><li><a href="3ro.php">Siguiente</a></li></td>   
</tr>
</table>
</body>
</html>