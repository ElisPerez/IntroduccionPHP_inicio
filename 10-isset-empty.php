<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = ['Antonio', 'John', 'Martha'];
$clientes5 = [
  'nombre' => 'Antonio',
  'saldo' => 200
];

/* -------------- Empty ------------- */
// Revisa si un array está vacío
var_dump(empty($clientes));
echo "<br>";
var_dump(empty($clientes3));
echo "<br>";

/* -------------- Isset ------------- */
// Revisa si un array está creado o una propiedad está definida
var_dump(isset($clientes4)); // No está definido entonces da "false"
echo "<br>";
var_dump(isset($clientes)); // true
echo "<br>";
var_dump(isset($clientes2)); // true
echo "<br>";
var_dump(isset($clientes3)); // true
echo "<br>";
// revisando propiedades
var_dump(isset($clientes5['nombre'])); // true
echo "<br>";
var_dump(isset($clientes5['codigo'])); // false
echo "<br>";

include 'includes/footer.php';