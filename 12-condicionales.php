<?php include 'includes/header.php';

/* --------------- OR --------------- */
echo "<h1>OR</h1>";
$autenticado = true;
$admin = false;

if ($autenticado || $admin) {
  echo "<h2>Usuario autenticado correctamente</h2>";
} else {
  echo "<h2>Usuario no autenticado, inicia sesión</h2>";
}

/* --------------- AND -------------- */
echo "<h1>AND</h1>";
$isMusician = true;
$isDeveloper = true;

if ($isMusician && $isDeveloper) {
  echo "<h2>Pichón de Hacker</h2>";
} else {
  echo "<h2>Usuario Inteligente</h2>";
}

/* ----------- If anidados ---------- */
echo "<h1>If Anidados</h1>";
$cliente = [
  'nombre' => 'Marcos',
  'saldo' => 400,
  'informacion' => [
    'tipo' => 'Premium'
  ]
];

if (!empty($cliente)) {
  echo "<h2>El array del cliente NO está vacío</h2>";
  if ($cliente['saldo'] > 0) {
    echo "<h2>Saldo disponible {$cliente['saldo']}</h2>";
  } else {
    echo "<h2>No tiene saldo disponible</h2>";
  }
}

/* ------------- else if ------------ */
echo "<h1>else if</h1>";

if ($cliente['saldo'] > 0) {
  echo "<h2>Saldo disponible {$cliente['saldo']}</h2>";
} elseif ($cliente['informacion']['tipo'] === 'Premium') {
  echo "<h2>El cliente es Premium</h2>";
} else {
  echo "<h2>El cliente no tiene saldo y no es Premium</h2>";
}

/* ------------- Switch ------------ */
echo "<h1>Switch</h1>";

$tecnologia = 'PHP';

switch ($tecnologia) {
  case 'PHP':
    echo "<h2>PHP, un excelente lenguaje</h2>";
    break;

  case 'JAVA':
    echo "<h2>JAVA, una relacion toxica</h2>";
    break;

  case 'JavaScript':
    echo "<h2>JavaScript: Genial, el lenguaje de la web</h2>";
    break;

  default:
    echo "<h2>Lenguaje no conocido</h2>";
    break;
}



include 'includes/footer.php';