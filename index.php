<?php

include_once __DIR__ . "/data.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
</head>

<body>
  <div class='container cont'>
    <h1>Prodotti</h1></br>
    <a href="carrello.php">Carrello</a>
    <div class="containerCard">


    
        <?php foreach ($prodotti as $prodotto) {
            echo "  
        
            <div class='ca' >
                <h3> {$prodotto->getTitolo()} </h3>
                <h3> {$prodotto->getPrezzo()} </h3>
                <h3> {$prodotto->getCategoria()->getNome()} </h3>
            </div>";
        }?>
    </div>
</div>
    

    

</body>

</html>