<?php include 'includes/header.php';

/* ----------- Incremento ----------- */
$numero1 = 30;
$numero1++;

echo $numero1;
echo "<br>";

$numero1 = 30;
++$numero1;

echo $numero1;
echo "<br>";

$numero1 = 30;

echo ++$numero1;
echo "<br>";

$numero1 = 30;

echo $numero1++;
echo "<br>";

/* ----------- Decremento ----------- */
$numero2 = 10;
$numero2--;

echo $numero2;
echo "<br>";

$numero2 = 10;
--$numero2;

echo $numero2;
echo "<br>";

$numero2 = 10;

echo --$numero2;
echo "<br>";

$numero2 = 10;

echo $numero2--;
echo "<br>";

// Incremento personalizado
$numero3 = 50;
$numero3 += 5;
echo $numero3;
echo "<br>";

// Decremento personalizado
$numero4 = 60;
$numero4 -= 2;
echo $numero4;


include 'includes/footer.php';