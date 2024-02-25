<html>

<head><link rel="stylesheet" href="Styles1.2.css"></head>

    <body>
        <div>
            <br>
            <h2>Omega <span>UP </span></h2>
            <br>
        </div>
    <!--Cuerpo del código-->
        <h1>Practicando con formulas</h1>
        <H2>Descripción</H2>
        <p>Dado un valor real a , quieres resolver una serie de ecuaciones hasta obtener el valor de z</p>
        <p>X=3a+15 <br> Y=(x+3)/(x+1) <br> (Z=5x+7x)/axy</p>
        <H2>Entrada</H2>
        <p>Un real a. Puedes suponer que 1<=a<=100.</p>
        <H2>Salida</H2>
        <p>Un real que sea el valor de z impreso con tres puntos decimales.</p>
        <h2>Ejemplo</h2>

        <table border="1">
            <tr>
                <td>Entrada</td><td>Salida</td>
            </tr>
            <tr><!--Ejemplo #1-->
                <?php
                    $a=33.562;
                    $X=3*$a+15;
                    $Y=($X+3)/($X+1);
                    $Z=(5*$X+7*$Y)/($a*$X*$Y);
                ?>
                <td><?php echo round($a,3);?></td>
                <td><?php echo round($Z,3)," Ejemplo #1";?></td>
            </tr>
            <tr><!--Ejemplo #2-->
                <?php
                    $a=72.569;
                    $X=3*$a+15;
                    $Y=($X+3)/($X+1);
                    $Z=(5*$X+7*$Y)/($a*$X*$Y);
                ?>
                <td><?php echo round($a,3);?></td>
                <td><?php echo round($Z,3)," Ejemplo #2";?></td>
            </tr>
            <tr><!--Ejemplo #3-->
                <?php
                    $a=64.835;
                    $X=3*$a+15;
                    $Y=($X+3)/($X+1);
                    $Z=(5*$X+7*$Y)/($a*$X*$Y);
                ?>
                <td><?php echo round($a,3);?></td>
                <td><?php echo round($Z,3)," Ejemplo #3";?></td>
            </tr>
        </table>
    </body>
</html>