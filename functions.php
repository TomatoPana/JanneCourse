<?php
$result = Carrito(12);

$variableChingona = true;

function Auto($parameter)
{
  echo "Hi! $parameter";
}

// HOISTING
function Carrito(int $parameter)
{
  return $parameter;
}

function Types(string $parameter): int
{
  echo "Hi! " . $parameter;
  return 0;
}

function Echoing(string|bool|int|float $parameter): string
{
  return "Hi $parameter";
}

$array = [1, 2];

Echoing($array[0]);

function Sometimes(string $name = "Desconocido", int $age = null): string
{
  return "Hola $name. " .
    (($age === null) ? "No se tu edad" : "Tienes $age años.") .
    "<br />";
}

Sometimes();
Sometimes(age: 32);
Sometimes("Moises");
Sometimes("Janne", 24);

function Punteros(array &$array): int {
  $array[] = 3;
  return 0;
}

Punteros($array);

print_r($array);

// Función Anónima
$closure = function () use ($variableChingona) {
  return $variableChingona;
};

// Función anónima Arrow
$suma = fn(int $a , int $b) => $a + $b + $variableChingona;

// Clonar función
$closure = Punteros(...);
$return = $closure([]);