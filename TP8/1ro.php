<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4352. Bit de paridad</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<table border="1" cellpacing="0" class="i">
    <tr>
 <td><li><a href="Index.html">Inicio</a></li></td>   
</tr>
</table>
<h1>4352. Bit de paridad</h1>
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
<div class="content">
<h4>Descripcion</h4>
<p>Un bit de paridad es un dígito binario que indica si el número de bits con un valor de 1 en un conjunto de bits es par o impar. <br>
 Los bits de paridad conforman el método de detección de errores más simple. Existen dos variantes de este método: <br>
    *Bit de paridad par <br>
    *Bit de paridad impar. <br>
En el caso de la paridad par, se cuentan el número de unos. Si el total es impar, el bit de paridad se establece en uno y por tanto la suma del total anterior con este bit de paridad, daría par. <br>
 Si el conteo de bits uno es par, entonces el bit de paridad se deja en 0, pues ya es par. <br>
<br>
Escribe un programa que sirva para añadir un bit de paridad par a una secuencia de bits.</p>

<h4>Entrada</h4>
<p>La entrada consiste de una sola línea con una secuencia de siete bits 0 o 1.</p>

<h4>Salida</h4>
<p>La salida es la misma secuencia de siete bits de la entrada más el bit de paridad par. <br> Dicho bit de paridad se agrega al lado derecho.</p>
</div>
<table border="0">
        <tr> <td>Ejemplo</td> <td> Outpot</td> <td>Descripcion</td>
     </tr>
     <tr>
        <td>1010001</td> <td>10100011</td> <td>El número de bits con valor de 1 en la entrada es 3.<br> La salida son los mismos siete bits de la entrada y<br> se añade un bit 1 para que en total el número de bits con valor 1 sea par.</td>
     </tr>
        <td>1101001</td> <td>11010010</td> <td>El número de bits con valor de 1 en la entrada es 4.<br> La salida son los mismos siete bits de la entrada y <br>se añade un bit 0 para que en total el número de bits con valor 1 se mantenga par.</td>
     <tr>
     <td>0000000</td> <td>00000000</td> <td>El número de bits con valor de 1 en la entrada es 0.<br> La salida son los mismos siete bits de la entrada y<br> se añade un bit 0 para que en total el número de bits con valor 1 se mantenga par (cero es un número par).</td>
     </tr>
     <tr>
     <td>1111111</td> <td>11111111</td> <td>El número de bits con valor de 1 en la entrada es 7.<br> La salida son los mismos siete bits de la entrada y <br>se añade un bit 1 para que en total el número de bits con valor 1 sea par. </td>
     </tr>
    
    </table>

<form method="post">
  <label for="bits">Secuencia de bits (7 bits):</label>
  <input type="text" id="bits" name="bits" maxlength="7">
  <br>
  <input type="submit" value="Enviar"> <br>
</form>

<?php
    if($_POST)
{
$bits=0;
$bits = $_POST['bits'];
if (strlen($bits) != 7) {
  echo "<p style='color: red'>Error: La secuencia de bits debe tener 7 bits.</p>";
  exit;
}
$countBits = 0;
for ($i = 0; $i < strlen($bits); $i++) {
  if ($bits[$i] === '1') {
    $countBits++;
  }
}
$parityBit = ($countBits % 2 === 0) ? '0' : '1';
echo "<p>Secuencia de bits con bit de paridad par: $bits$parityBit</p>";
}
?>
<table border="1" cellpacing="0" class="i">
    <tr>
        <td><li><a href="Index.html">Regresar</a></li></td>
 <td><li><a href="2do.php">Siguiente</a></li></td>   
</tr>
</table>
</body>
</html>