<?php
// Para mostrar errores de tipado 😱😱😱
declare(strict_types=1);

include 'includes/header.php';

function sumar(int $num1 = 0, int $num2 = 0)
{
  echo "<p>" . $num1 + $num2 . "</p>";
}

sumar(2, 2);

// parametros nombrados 😳😳
sumar(num2:4, num1:6);


include 'includes/footer.php';
