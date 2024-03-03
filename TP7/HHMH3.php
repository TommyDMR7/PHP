<html>
    <head>
        <link rel="stylesheet" href="Estilos1.7.css">
    </head>
<body>
    
    <div class="poiqwe">
    <br>
    <h1>OmegaUp</h1>
    <br>
    </div>
    <br>
    <u>
        <li><a href="Tarea1.7.php">INICIO</a></li>
    </u>
    <h1>7093. El lado más corto</h1>
    <table border="1" cellspacing="0" 
    cellpadding = "8" class="jj">
        <tr>
            <td><h5>Puntos</h5></td>
            <td>8.68</td>
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

    <div class="mm">

    <h2>Descripción</h2>
    <p>
    Escribe un programa que, dadas las 
    coordenadas de los vértices de un 
    cuadrilátero, calcule la longitud 
    de su lado más corto.
    </p>
    <h2>Entrada</h2>
    <p>
        Ocho reales x1,x2,x3,x4,y1,y2,y3,y4;
    </p>
    <h2>Salida</h2>
    <p>
    Un real que sea la longitud del 
    lado más corto del cuadrilátero. 
    Tu programa se considerará correcto 
    si el valor calculado es
    razonablemente cercano a la respuesta exacta.
    </p>
    <form action="HHMH3.php" method="post">
            <input type="text" name="txtRadiox1"> <br>
            <input type="text" name="txtRadioy1"> <br>
            <input type="text" name="txtRadiox2"> <br>
            <input type="text" name="txtRadioy2"> <br>
            <input type="text" name="txtRadiox3"> <br>
            <input type="text" name="txtRadioy3"> <br>
            <input type="text" name="txtRadiox4"> <br>
            <input type="text" name="txtRadioy4"> <br>

            <input type="submit" value="Enviar"><br>
    </form>
    <?php
            if($_POST)
            {
                $x1=$_POST['txtRadiox1'];
                $y1=$_POST['txtRadioy1'];
                $x2=$_POST['txtRadiox2'];
                $y2=$_POST['txtRadioy2'];
                $x3=$_POST['txtRadiox3'];
                $y3=$_POST['txtRadioy3'];
                $x4=$_POST['txtRadiox4'];
                $y4=$_POST['txtRadioy4'];
                $a = sqrt((pow($x2-$x1,2))+(pow($y2-$y1,2)));
                $b = sqrt((pow($x3-$x2,2))+(pow($y3-$y2,2)));
                $c = sqrt((pow($x4-$x3,2))+(pow($y4-$y3,2)));
                $d = sqrt((pow($x4-$x1,2))+(pow($y4-$y1,2)));
 
                if($a<$b && $a<$c && $a<$d)
                {
                  echo $a;
                }
                else if ($b<$c && $b<$d)
                {
                    echo $b;
                }
                else if ($c<$d)
                {
                    echo $c;
                }
                else
                {
                    echo $d;
                }
            }
        ?>
    </div>

</body>
</html>