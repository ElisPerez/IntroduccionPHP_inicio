<?php include 'includes/header.php';

/* -------------- While ------------- */
$i = 0; // inicializador

while ($i < 10) {
  echo $i . ", ";

  $i++; // incrementar $i
}
echo "<br>";

// Segunda manera de declarar WHILE sin las llaves {}
while ($i < 10):
  echo $i . ", ";

  $i++; // incremento
endwhile;
echo "<br>";

/* ------------ Do While ------------ */
$a = 0;

do {
  echo $a . ", ";

  $a++;
} while ($a < 10);
echo "<br>";
echo "<br>";

/* ------------ For Loop ------------ */
for ($j = 0; $j < 10; $j++) {
  echo $j . ", ";
}
echo "<br>";
echo "<br>";

/* ------------ FIZZ BUZZ ----------- */
// Multiplo de 3 = Fizz
// Multiplo de 5 = Buzz
// 3 y 5 = Fizz Buzz
for ($b = 1; $b <= 100; $b++) {
  if ($b % 3 === 0 && $b % 5 === 0) {
    echo "{$b}: FIZZ-BUZZ, ";
  } elseif ($b % 5 === 0) {
    echo "{$b}: BUZZ, ";
  } elseif ($b % 3 === 0) {
    echo $b . ": FIZZ, ";
  } else {
    echo $b . ", ";
  }
}
echo "<br>";
echo "<br>";

/* ------------- foreach ------------ */
$clientes = array('Antonio', 'Marcos', 'Miriam');
foreach ($clientes as $cliente) {
  echo $cliente . ", ";
}

echo "<br>";

// sintaxis de ":" y "endforeach"
foreach ($clientes as $cliente):
  echo $cliente . ", ";
endforeach;

echo "<br>";

// for en comparacion con foreach:
for ($z = 0; $z < count($clientes); $z++):
  echo $clientes[$z] . ", ";
endfor;
echo "<br>";
echo "<br>";

// count() sizeof() son lo equivalente a ".length" en Javascript
echo "count(clientes): " . count($clientes);
echo "<br>";

echo "sizeof(clientes): " . sizeof($clientes);
echo "<br>";
echo "<br>";

/* ----- Iterar Array asociativo ---- */
$cliente = [
  'nombre' => 'Miguel',
  'saldo' => 200,
  'tipo' => 'Premium'
];

foreach ($cliente as $key => $value):
  echo $key . " - " . $value . "<br>";
endforeach;


include 'includes/footer.php';