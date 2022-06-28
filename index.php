<?php

require_once __DIR__ . '/classes/product.php';
require_once __DIR__ . '/classes/food.php';

$food = new food('Carne Essiccata', '10€', 'Cani', 'Cibo in scatola', '10/10/2022');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
</head>
<body>
    <h1>Animal Planet</h1>
    <h2>Sezione cibo</h2>
    <ul>
        <?php foreach($product->foods as $food) { ?>
            <h3><?php echo $food->name ?></h3>
        <?php } ?>   
    </ul>
</body>
</html>