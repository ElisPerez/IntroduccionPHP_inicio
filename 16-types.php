<?php

declare(strict_types=1);
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado): ?string
{
  if ($autenticado) {
    return "El usuario está autenticado";
  } else {
    return null;
  }
}

$usuario = usuarioAutenticado(true);

echo $usuario;

function usuarioAutenticado2(bool $autenticado): string|int
{
  if ($autenticado) {
    return "El usuario está autenticado";
  } else {
    return 20;
  }
}

$usuario2 = usuarioAutenticado2(true);

echo $usuario2;

include 'includes/footer.php';
