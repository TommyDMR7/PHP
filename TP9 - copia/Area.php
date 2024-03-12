<?php

if($_POST){
$base = $_POST['txtbase'];
$height = $_POST['txtaltura'];
$area=$base*$height;
echo"El area es: " . $area;
}
?>
<li><a href="main.html">Regresar</a></li>