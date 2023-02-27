<?php
// Aritméticas
1 + 1;
1 - 2;
1 * 2;
1 / 2;
4 % 2;

// Booleanas (Loose)
11 == 11.3; //true
false < 12; // true
12 > 11;
11 <= []; // TypeError
12 >= 11; // false
11 != 12;

// Bitwise (Solo funciona con booleanos)
true && true;
true || false;
!true;

// Booleanas (Strict)
11 === 11.0; // false
11 !== 12; // false

// Null Coalescing
$result ??= "Janne";
$other = $result ?? 12;

// Ternary Operator
// (11 < 13) ? hazAlgoVerdadero() : hasAlgoFalso();

// String operations
$result = "Hola " . "Janne";

// Heredoc
$result = <<<'HTML'
  <html>
    <h1> Hola mundo </h1>
    <pre>$result</pre>
  </html>
HTML;

