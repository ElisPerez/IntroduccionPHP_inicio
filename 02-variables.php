<?php include 'includes/header.php';

$nombre = "Antonio";
$_apellido = "Perez";
$nombreCliente = "Pedro";
$apellido_cliente = "Torres";

echo $nombre, " ", $_apellido;

var_dump($nombre);

// Constantes en PHP
define('nombreConstante', "Este es el valor de la constante");

echo nombreConstante;

// Segunda forma de crear constantes en php:
const nombreConstante2 = "Valor de la constante 2";
echo nombreConstante2;

include 'includes/footer.php';
