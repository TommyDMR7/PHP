
<?php
if($_POST){
    $frase=$_POST["txtfrase"];
    $t=strlen($frase);
    for($i=0; $i<$t; $i++)
    {
        for($j=0; $j<=$i; $j++)
        {
            echo $frase[$j];
        }
        echo "<br>";
    }
}
?>
<li><a href="main.html">Regresar</a></li>