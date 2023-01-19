<?php include 'includes/header.php';

/* ---------------------------------- */
/*                 []                 */
/* ---------------------------------- */
// Forma utilizada por Larabel
$carrito = ['Tablet', 'Television', 'Computadora'];

// Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";
echo "<br>";

// Acceder a una posición del array
echo "<pre>";
var_dump($carrito[1]);
echo "</pre>";
echo "<br>";

echo $carrito[2];
echo "<br>";

// Agregar nuevo producto
$carrito[3] = "Telefono";

// Agregar al final del array
array_push($carrito, "Audifonos");

// Agregar al inicio del array
array_unshift($carrito, "Monitor 20\"");
echo $carrito[0];
echo "<br>";

echo "<pre>";
var_dump($carrito);
echo "</pre>";
echo "<br>";

/* ---------------------------------- */
/*               array()              */
/* ---------------------------------- */
// Forma utilizada por WordPress
$clientes = array('Juan', 'Antonio', 'Miriam');

echo "<pre>";
var_dump($clientes);
echo "</pre>";
echo "<br>";

include 'includes/footer.php';