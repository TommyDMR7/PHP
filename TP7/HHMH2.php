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
    <h1>7050. Cálculos condicionales</h1>
    <table border="1" cellspacing="0" 
    cellpadding = "8" class="jj">
        <tr>
            <td><h5>Puntos</h5></td>
            <td>8.49</td>
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
    Eres muy bueno evaluando fórmulas y realizando 
    cálculos directos, pero te cuesta trabajo 
    decidir en qué situaciones se deben hacer qué 
    operaciones. Un compañero te sugirió un 
    ejercicio de cálculo mental que consiste en, 
    dado un número inicial N, realizar las 
    siguientes operaciones en el orden indicado 
    y con aritmética entera:
    </p>
    <p>
        1. Si el valor actual de N es par, dividelo entre 2.
        En caso contrario sumale 1.
        2. Si el valor actual de N tiene tres o más 
        cifras, divídelo entre 100. Pero si tiene exactamente 
        dos cifras, divídelo entre 10.
        3. Si el valor actual de N es multiplo de tres restale uno.
    </p>
    <h2>Entrada</h2>
    <p>
        Un entero N. Puedes suponer que 1<=N<=1000
    </p>
    <h2>Salida</h2>
    <p>
        Dos enteros que correspondan con el valor final de N y
        el número de veces que N fue modificado respectivamente.
    </p>
    <form action="HHMH2.php" method="post">
            <input type="text" name="txtRadio1"> <br>
            <input type="submit" value="Enviar"><br>
    </form>
    <?php
            if($_POST)
            {
                $suma=0;
                $N=$_POST['txtRadio1'];
                    if($N%2==0)
                    {
                        $N=$N/2;
                        $suma++;
                    }
                    else
                    {
                        $N++;
                        $suma++;
                    }
                    if($N>=100)
                    {
                        $N=$N/100;
                        $suma++;
                    }
                    else if($N>=10 && $N<=99)
                    {
                        $N=$N/10;
                        $suma++;
                    }
                    if($N%3==0)
                    {
                        $N--;
                        $suma++;
                    }
            echo $N," ",$suma;
            }
        ?>
    </div>

</body>
</html>