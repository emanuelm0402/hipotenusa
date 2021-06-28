<?php
$a = 3;
$b = 4;
$msj = "La hipotenusa del triangulo rectangulo de lados 3cm y 4cm es: ";
$sumCuadrado = pow($a, 2) + pow ($b, 2);
$raiz = sqrt($sumCuadrado);

echo "<h1 align='center'>Calculo de la hipotenusa de un triangulo rectangulo</h1>";
echo "<h2 align='center'>cateto a = 3cm</h2>";
echo "<h2 align='center'>cateto b = 4cm</h2>";
echo "<h2 align='center'>$msj $raiz cm</h2>";
?>
