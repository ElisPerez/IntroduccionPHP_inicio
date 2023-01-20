<?php include 'includes/header.php';

$productos = [
  [
    'nombre' => 'Tablet',
    'precio' => 200,
    'disponible' => true
  ],
  [
    'nombre' => 'Televisión 24"',
    'precio' => 300,
    'disponible' => true
  ],
  [
    'nombre' => 'Monitor Curvo',
    'precio' => 400,
    'disponible' => false
  ]
];

echo "<pre>";
var_dump($productos);
echo "</pre>";
echo "<br>";
echo "<br>";

$json = json_encode($productos, JSON_UNESCAPED_UNICODE);

$json_array = json_decode($json);

echo "<pre>";
var_dump($json);
echo "</pre>";
echo "<br>";

echo "<pre>";
var_dump($json_array);
echo "</pre>";
echo "<br>";

include 'includes/footer.php';