<?php include 'includes/header.php';

$nombre_cliente = "  Antonio Perez  ";

// Longitud de String
echo strlen($nombre_cliente);
echo "<br>";
var_dump($nombre_cliente);
echo "<br>";

// Eliminar espacios en blanco
$nombre_sin_espacios = trim($nombre_cliente);
echo $nombre_sin_espacios;
echo "<br>";

// Convertirlo a mayusculas
echo strtoupper($nombre_sin_espacios);
echo "<br>";

// Convertirlo a minusculas
echo strtolower($nombre_sin_espacios);
echo "<br>";

// Casos de usos
$mail1 = "correo@mail.com";
$mail2 = "Correo@mail.com";
var_dump($mail1 === $mail2); // false
echo "<br>";
var_dump(strtolower($mail1) === strtolower($mail2)); // true
echo "<br>";

// Replace
$nombre2 = "Darianny Perez";
echo str_replace('Darianny', 'D', $nombre2);
echo "<br>";

// Revisar si un string existe o no
$frase = "La vida es bella";
echo strpos($frase, 'vida'); // 3 - comienza desde la posicion cero.
echo "<br>";

echo strpos($frase, 'flor'); // No imprime nada.
echo "<br>";

// Concatenar
$nombreCliente = "Jhon";
$tipoCliente = "Premium";
echo "El cliente " . $nombreCliente . " es " . $tipoCliente;
echo "<br>";

// Template string: Este PHP es un loquillo 😂
echo "El cliente ${nombreCliente} es ${tipoCliente}";
echo "<br>";
echo "El cliente {$nombreCliente} es {$tipoCliente}";
echo "<br>";
echo "El cliente ${nombreCliente} es {$tipoCliente}";


include 'includes/footer.php';