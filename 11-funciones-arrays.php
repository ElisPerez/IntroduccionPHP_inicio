<?php include 'includes/header.php';

$carrito = ['Tablet', 'Computadora', 'Televisor'];

/* ------------ in_array ------------ */
// Busca elementos en un array
echo "<h2>in_array</h2>";
var_dump(in_array('Tablet', $carrito)); // true
echo "<br>";
var_dump(in_array('Audifonos', $carrito)); // false
echo "<br>";

/* -------------- sort and rsort -------------- */
// Ordenar elementos de un array
$numeros = array(1, 3, 4, 5, 2, 6);
sort($numeros); // de manor a mayor

echo "<h2>sort</h2>";
echo "<pre>";
var_dump($numeros);
echo "</pre>";
echo "<br>";

rsort($numeros); // de mayor a menor

echo "<h2>rsort</h2>";
echo "<pre>";
var_dump($numeros);
echo "</pre>";
echo "<br>";

/* -------------- asort and ksort ------------- */
// Ordena elementos asociativos en un array
$cliente = array(
  'saldo' => 200,
  'tipo' => 'Premium',
  'nombre' => 'Antonio'
);

asort($cliente); // Ordena por los valores (orden alfabetico, primero numeros)

echo "<h2>asort</h2>";
echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo "<br>";

arsort($cliente); // Ordena por los valores (orden alfabetico INVERSO de la Z a la A y luego numeros)

echo "<h2>arsort</h2>";
echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo "<br>";

ksort($cliente); // Ordena por las llaves (orden alfabetico)

echo "<h2>ksort</h2>";
echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo "<br>";

/* ------------- krsort ------------- */
krsort($cliente); // Ordena por las llaves (orden alfabetico INVERSO de la Z a la A)

echo "<h2>krsort</h2>";
echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo "<br>";


include 'includes/footer.php';