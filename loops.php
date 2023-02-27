<?php

switch ($variable) {
  case "Valor perron":
    echo 1;
    break;
  case 23:
  case 24:
    echo 2;
    break;
  case true:
    echo 2;
    break;
  default:
    // echo "Default";
    break;
}

for ($index = 0; $index < 10; $index++) {
  if ($index === 5) break; //
  if ($index % 2 === 0) continue; // Saltarse los pares
  // echo "No soy par!";
}

$arreglo = [2, 4, 6, 8, 10];

foreach ($arreglo as $key => $value) {
  if ($key == 5) break; //
  if ($key % 2 == 0) continue; // Saltarse los pares
  echo "Arreglo posición $key vale $value <hr />";
}

foreach ($arreglo as $value) {
  echo "Info: Arreglo vale $value <hr />";
}

$valor = match ($animal) {
  "perro" => 1,
  "gato" => 2,
  "raton" => 3,
  default => throw new UnhandledMatchError(),
};

$statement = false;
while ($statement) {
  // Do something until $statement is false
  $statement = false;
}

do {
  // Always execute AT LEAST 1 time, then evaluate $statement
  $statement = false;
} while ($statement);
