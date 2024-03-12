<?php
if ($_POST){
    $numero = $_POST["txttamaño"];
$triangulo = "";
for ($i = $numero; $i >= 1; $i--) {
    $triangulo .= str_repeat("*", $i) . "<br>";
}
echo "<p>$triangulo</p>";
}
?>
<li><a href="main.html">Regresar</a></li>