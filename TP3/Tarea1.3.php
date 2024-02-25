<html>

<head><link rel="stylesheet" href="Styles1.3.css"></head>

    <body>
        <div>
            <br>
            <h2>Omega <span>UP </span></h2>
            <br>
        </div>
    <!--Cuerpo del código-->
        <h1>Colegiatura</h1>
        <H2>Descripción</H2>
        <p>La mamá de Esteban quiere inscribirlo en la mejor preparatoria de Cuernavaca, pero le preocupa cuanto vaya a pagar, y te pide ayuda para que hagas un programa que le diga cuanto tenga que pagar. El esquema que maneja la prepa es este:</p>
        <li>La colegiatura de los alumnos se determina según el numero de materias que cursan. El costo de cada una de las materias es de $1600.</li>
        <li>Se ha establecido un programa para estimular a los alumnos, el cual consiste en lo siguiente: si el promedio obtenido por un alumno en el ultimo periodo es mayor o igual que 9, se le hará un descuento del 30% sobre la colegiatura y no se le cobrara IVA; si el promedio obtenido es menor que 9 deberá pagar la colegiatura completa, mas el IVA del 16%.</li>
        <H2>Entrada</H2>
        <p>El numero de materias A que Esteban va a cursar. Y un numero con decimales B que es el promedio de Esteban.</p>
        <H2>Salida</H2>
        <p>Un numero entero C con el precio a pagar. Debe de ir con un $</p>
        <h2>Ejemplo</h2>

        <table border="1">
            <tr>
                <td>Entrada</td><td>Salida</td>
            </tr>
            <?php
                    echo "<tr>";
                    $NDM=5;//Ejemplo #1
                    $PROM=9.6;
                    $PAGO=$NDM*1600;
                    echo "<td> $NDM -- $PROM</td>";

                    if($PROM>=9)
                    {
                        $DES = ($PAGO*30)/100;
                        $PAGO = $PAGO-$DES;
                        echo "<td> $ $PAGO Ejemplo #1</td>";
                    }
                    else
                    {
                        $IVA=$PAGO*16/100;
                        $PAGO=$PAGO+$IVA;
                        echo "<td> $ $PAGO Ejemplo #1</td>";
                    }
                    echo "</tr>";

                    echo "<tr>";
                    $NDM=8;//Ejemplo #2
                    $PROM=7.8;
                    $PAGO=$NDM*1600;
                    echo "<td> $NDM -- $PROM</td>";

                    if($PROM>=9)
                    {
                        $DES = ($PAGO*30)/100;
                        $PAGO = $PAGO-$DES;
                        echo "<td> $ $PAGO Ejemplo #2</td>";
                    }
                    else
                    {
                        $IVA=$PAGO*16/100;
                        $PAGO=$PAGO+$IVA;
                        echo "<td> $ $PAGO Ejemplo #2</td>";
                    }
                    echo "</tr>";

                    echo "<tr>";
                    $NDM=2;//Ejemplo #3
                    $PROM=8;
                    $PAGO=$NDM*1600;
                    echo "<td> $NDM -- $PROM</td>";

                    if($PROM>=9)
                    {
                        $DES = ($PAGO*30)/100;
                        $PAGO = $PAGO-$DES;
                        echo "<td> $ $PAGO Ejemplo #3</td>";
                    }
                    else
                    {
                        $IVA=$PAGO*16/100;
                        $PAGO=$PAGO+$IVA;
                        echo "<td> $ $PAGO Ejemplo #3</td>";
                    }
                    echo "</tr>";
            ?>
        </table>
    </body>
</html>