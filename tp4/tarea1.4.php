<html>

<head><link rel="stylesheet" href="Styles1.4.css"></head>

    <body>
        <div>
            <br>
            <h2>Omega <span>UP </span></h2>
            <br>
        </div>
    <!--Cuerpo del código numero 1-->
        <h1>¿Cuántos valen 7?</h1>
        <H2>Descripción</H2>
        <p>Escribe un programa que lea dos enteros e imprima cuántos de ellos valen 7</p>
        <H2>Entrada</H2>
        <p>Dos enteros en el rango de -1000 a +1000</p>
        <H2>Salida</H2>
        <p>La cantidad de enteros iguales a 7</p>
        <h2>Ejemplo</h2>

        <table border="1">
            <tr>
                <td>Entrada</td><td>Salida</td>
            </tr>
            <?php
                echo "<tr>"; //Ejemplo #1
                    $a=-3;
                    $b=8;
                    $cont=0;
                    if($a==7)
                    {
                        $cont++;
                    }
                    if($b==7)
                    {
                        $cont++;
                    }
                    echo "<td>";
                        echo "$a $b";
                    echo "</td>";
                    echo "<td>";
                        echo "$cont ejemplo #1";
                    echo "</td>";

                echo "</tr>"; 

                echo "<tr>"; //Ejemplo #2
                    $a=7;
                    $b=57;
                    $cont=0;
                    if($a==7)
                    {
                        $cont++;
                    }
                    if($b==7)
                    {
                        $cont++;
                    }
                    echo "<td>";
                        echo "$a $b";
                    echo "</td>";
                    echo "<td>";
                        echo "$cont ejemplo #2";
                    echo "</td>";

                echo "</tr>"; 

                echo "<tr>"; //Ejemplo #3
                    $a=62;
                    $b=7;
                    $cont=0;
                    if($a==7)
                    {
                        $cont++;
                    }
                    if($b==7)
                    {
                        $cont++;
                    }
                    echo "<td>";
                        echo "$a $b";
                    echo "</td>";
                    echo "<td>";
                        echo "$cont ejemplo #3";
                    echo "</td>";

                echo "</tr>"; 
                echo "<tr>"; //Ejemplo #4
                    $a=7;
                    $b=7;
                    $cont=0;
                    if($a==7)
                    {
                        $cont++;
                    }
                    if($b==7)
                    {
                        $cont++;
                    }
                    echo "<td>";
                        echo "$a $b";
                    echo "</td>";
                    echo "<td>";
                        echo "$cont ejemplo #4";
                    echo "</td>";

                echo "</tr>"; 
            ?>
        </table>

    <!--Cuerpo del código numero 2-->
    <h1>El mayor de tres números</h1>
        <H2>Descripción</H2>
        <p>Realiza un problema que imprima el mayor de tres números.</p>
        <H2>Entrada</H2>
        <p>Escribe tres números enteros a, b y c</p>
        <H2>Salida</H2>
        <p>El número entero mayor de los tres números introducidos.</p>
        <h2>Ejemplo</h2>

        <table border="1">
            <tr>
                <td>Entrada</td><td>Salida</td>
            </tr>
            <?php
                    echo "<tr>"; // ejemplo #1
                        
                            $a=10;
                            $b=8;
                            $c=-7;
                            echo "<td>";
                                echo $a," ", $b," ", $c;
                            echo "</td>";
                            if($a>$b && $a>$c)
                            {
                                echo "<td>";
                                echo $a;
                                echo "</td>";
                            }
                            else if($c>$b && $c>$a)
                            {
                                echo "<td>";
                                echo $c;
                                echo "</td>";
                            }
                            else if($b>$c && $b>$a)
                            {
                                echo "<td>";
                                echo $b;
                                echo "</td>";
                            }
                            else if($a==$b && $a==$c)
                            {
                                echo "<td>";
                                echo $a;
                                echo "</td>";
                            }
                            else if($a<$b && $a<$c && $b==$c)
                            {
                                echo "<td>";
                                echo $b;
                                echo "</td>";
                            }
                            else if($b<$a && $b<$c && $a==$c)
                            {  
                                echo "<td>";
                                echo $a;
                                echo "</td>";
                            }
                            else if($c<$a && $c<$b && $b==$a)
                            {
                                echo "<td>";
                                echo $b;
                                echo "</td>";
                            }
                    echo "</tr>";

                    echo "<tr>"; // ejemplo #2
                        
                            $a=10;
                            $b=81;
                            $c=101;
                            echo "<td>";
                                echo $a," ", $b," ", $c;
                            echo "</td>";
                            if($a>$b && $a>$c)
                            {
                                echo "<td>";
                                echo $a;
                                echo "</td>";
                            }
                            else if($c>$b && $c>$a)
                            {
                                echo "<td>";
                                echo $c;
                                echo "</td>";
                            }
                            else if($b>$c && $b>$a)
                            {
                                echo "<td>";
                                echo $b;
                                echo "</td>";
                            }
                            else if($a==$b && $a==$c)
                            {
                                echo "<td>";
                                echo $a;
                                echo "</td>";
                            }
                            else if($a<$b && $a<$c && $b==$c)
                            {
                                echo "<td>";
                                echo $b;
                                echo "</td>";
                            }
                            else if($b<$a && $b<$c && $a==$c)
                            {  
                                echo "<td>";
                                echo $a;
                                echo "</td>";
                            }
                            else if($c<$a && $c<$b && $b==$a)
                            {
                                echo "<td>";
                                echo $b;
                                echo "</td>";
                            }
                    echo "</tr>";

                    echo "<tr>"; // ejemplo #3
                        
                            $a=11;
                            $b=11;
                            $c=11;
                            echo "<td>";
                                echo $a," ", $b," ", $c;
                            echo "</td>";
                            if($a>$b && $a>$c)
                            {
                                echo "<td>";
                                echo $a;
                                echo "</td>";
                            }
                            else if($c>$b && $c>$a)
                            {
                                echo "<td>";
                                echo $c;
                                echo "</td>";
                            }
                            else if($b>$c && $b>$a)
                            {
                                echo "<td>";
                                echo $b;
                                echo "</td>";
                            }
                            else if($a==$b && $a==$c)
                            {
                                echo "<td>";
                                echo $a;
                                echo "</td>";
                            }
                            else if($a<$b && $a<$c && $b==$c)
                            {
                                echo "<td>";
                                echo $b;
                                echo "</td>";
                            }
                            else if($b<$a && $b<$c && $a==$c)
                            {  
                                echo "<td>";
                                echo $a;
                                echo "</td>";
                            }
                            else if($c<$a && $c<$b && $b==$a)
                            {
                                echo "<td>";
                                echo $b;
                                echo "</td>";
                            }
                    echo "</tr>";

            ?>
        </table>
        
        <!--Cuerpo del código numero 3-->
        <h1>Estaciones del Año</h1>
        <H2>Descripción</H2>
        <p>Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras de control selectivas en la programación estructurada, como ejercicio necesita desarrollar un programa que sea capaz de especificar a que estación (su nombre en inglés) del año pertenece una fecha en especifico compuesta por un día d y un mes m</p>
        <H2>Entrada</H2>
        <p>Dos números enteros d y m separados por un espacio que corresponden al día y mes de una fecha determinada</p>
        <H2>Salida</H2>
        <p>Una cadena S que indique la estación del año a la que pertenece la fecha ingresada o un mensaje que indique no existe la fecha, si la fecha no es válida</p>
        <h2>Ejemplo</h2>

        <table border="1">
            <tr>
                <td>Entrada</td><td>Salida</td>
            </tr>
            <?php
                function Arroz( $dia, $mes )
                {
                    if($dia>=31 || $mes>=13)
                    {
                        return "no existe la fecha                        ";
                    }
                    if($mes==1)
                    {
                        return "Winter";
                    }
                    else if($mes==3)
                    {
                        if($dia<=19)
                        return "Winter";
                        else
                        return "Spring";
                    }
                    else if($mes==4)
                    {
                        return "Spring";
                    }
                    else if($mes==5)
                    {
                        return "Spring";
                    }
                    else if($mes==6)
                    {
                        if($dia<=20)
                        return "Spring";
                        else
                        return "Summer";
                    }
                    else if($mes==7)
                    {
                        return "Summer";
                    }
                    else if($mes==8)
                    {
                        return "Summer";
                    }
                    else if($mes==9)
                    {
                        if($dia<=21)
                        return "Summer";
                        else
                        return "Fall";
                    }
                    else if($mes==10)
                    {
                        return "Fall";
                    }
                    else if($mes==11)
                    {
                        return "Fall";
                    }
                    else if($mes==12)
                    {
                        if($dia<=22)
                        return "Fall";
                        else
                        return "Winter";
                    }
                    else{
                        return "pz no se entonces";
                    }
                }

            $dia=1;//ejemplo #1
            $mes=6;
            $pru1= Arroz($dia, $mes);
            echo "<tr>";
                echo "<td> $dia $mes</td>";
                echo "<td> $pru1 </td>";
            echo "</tr>";

            $dia=22;//ejemplo #2
            $mes=3;
            $pru1= Arroz($dia, $mes);
            echo "<tr>";
                echo "<td> $dia $mes</td>";
                echo "<td> $pru1 </td>";
            echo "</tr>";

            $dia=31;//ejemplo #3
            $mes=6;
            $pru1= Arroz($dia, $mes);
            echo "<tr>";
                echo "<td> $dia $mes</td>";
                echo "<td> $pru1 </td>";
            echo "</tr>";

            ?>
        </table>
    </body>
</html>
