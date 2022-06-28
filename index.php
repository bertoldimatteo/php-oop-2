<?php

require_once __DIR__ . '/classes/food.php';

$food = new Food('Carne Essiccata', '10€', 'Cani', 'Cibo in scatola', '10/10/2022');
// var_dump($food);die;
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
        <?php foreach($food as $food) { ?>
            <li>
                <h3><?php echo $food->name ?></h3>
            </li>
        <?php } ?>   
    </ul>
</body>
</html>