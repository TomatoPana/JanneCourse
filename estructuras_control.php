<?php
if (1 > 2) {
  //
}

if (1 > 2) {
  //
} else {
  //
}

if (1 > 2) {
  //
} else if (2 > 1) {
  //
} else {
  //
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php if (1 > 2) : ?>
    <h1> Es Verdad</h1>
  <?php endif; ?>

  <?php if (1 > 2) : ?>
    <h1>Es verdad</h1>
  <?php else : ?>
    <h1>Es falso</h1>
  <?php endif; ?>

  <?php if (1 > 2) : ?>
    <h1>Es verdad</h1>
  <?php else if (2 > 1) : ?>
    <h1>Es parcialmente falso</h1>
  <?php else : ?>
    <h1>Es falso</h1>
  <?php endif; ?>
</body>

</html>