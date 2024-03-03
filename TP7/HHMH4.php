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
    <h1>18710. Formulota</h1>
    <table border="1" cellspacing="0" 
    cellpadding = "8" class="jj">
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

    <div class="mm">

    <h2>Descripción</h2>
    <p>
        Diseñar un programa que pregunte 
        los valores de las variables 
        x,y,z y evalue la función f(x,y,z).
    </p>
    <h2>Entrada</h2>
    <p>
    El programa pedirá tres números, uno por 
    renglón, estos podrán ser positivos, 
    negativos o cero, y pudieran tener decimales.
    </p>
    <h2>Salida</h2>
    <p>
    La respuesta, o salida a la consola, 
    será el valor de la función f(x,y,z) 
    redondeado a 6 decimales.
    Nota: Se puede usar la función 
    tofixed(numero,decimales) para ajustar 
    la salida.
    </p>
    <form action="HHMH4.php" method="post">
            <input type="text" name="txtRadio1"> <br>
            <input type="text" name="txtRadio2"> <br>
            <input type="text" name="txtRadio3"> <br>

            <input type="submit" value="Enviar"><br>
    </form>
    <?php
            if($_POST)
            {
                $X=$_POST['txtRadio1'];
                $Y=$_POST['txtRadio2'];
                $Z=$_POST['txtRadio3'];
                $trpo=((($X+$Y)/(2*$X))+(($X*$X*$X+$Y*$Y*$Y)/($X*$X+$Y*$Y)))/($X*$X+$Y*$Y+$Z*$Z);
            echo round($trpo,6);
            }
        ?>
    </div>

</body>
</html>