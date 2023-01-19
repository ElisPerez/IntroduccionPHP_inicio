<?php include 'includes/header.php';

/* ----- Como los objetos en JS ----- */
echo "<h1>Arrays asociativos</h1>";
$cliente = [
    'nombre' => 'Antonio',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100
    ]
];

echo '<pre>';
var_dump($cliente);
echo '</pre>';
echo '<br>';

/* ---- Acceder a un a propiedad --- */
echo '<pre>';
var_dump($cliente['informacion']);
echo '</pre>';
echo '<br>';

echo $cliente['informacion']['tipo'];
echo '<br>';

echo '<pre>';
var_dump($cliente['nombre']);
echo '</pre>';
echo '<br>';

echo $cliente['saldo'];
echo '<br>';

/* -------- Agregar propiedad ------- */
$cliente['codigo'] = 123456;
echo $cliente['codigo'];


include 'includes/footer.php';