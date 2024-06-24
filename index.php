<?php

include __DIR__ . "/data.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Hello OOP-2</h1>
    <ul>
        <?php foreach ($prodotti as $prodotto) {
            echo "<li>" . $prodotto->getTitolo() . "</li>";
        }?>
    </ul>

    <h2>VarDump $prodotto</h2>
    <pre>
        <?= var_dump($prodotti) ?>
    </pre>

</body>

</html>