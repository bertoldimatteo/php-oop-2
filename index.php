<?php

require_once __DIR__ . '/classes/food.php';

$food = [
    new Food('Carne Essiccata', '10€', 'Cani', 'Cibo in scatola', '10/10/2022'),
    new Food('Semi di girasole', '8€', 'Criceti', 'Cibo in scatola', '01/06/2023'),
    new Food('Crocchette di salmone', '15€', 'Gatti', 'Cibo in scatola', '01/09/2022'),
]
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
        <?php foreach($food as $foods) { ?>
            <li>
                <h3><?php echo $foods->name ?></h3>
                <p><?php echo $foods->animalType ?></p>
                <small><?php echo $foods->price ?></small>
            </li>
        <?php } ?>   
    </ul>
</body>
</html>