<?php
include_once __DIR__ . "/models/prodotto.php";
include_once __DIR__ . "/models/categoria.php";
include_once __DIR__ . "/models/cibo.php";
include_once __DIR__ . "/models/gioco.php";
include_once __DIR__ . "/cliente.php";

$cliente=new Cliente("khalil","sidane");

$cane=new Categoria("puppy","gold retriver","icona");
$gatto=new Categoria("Nella","maltese","iconaG");

$prodottiCarrello=[
    new Gioco("corda",4,"img",$cane,"canapa"),
    new Cibo("pallina",7,"img",$gatto,"tessuto"),
    new Prodotto("generico",5,"img",$gatto),
];


$cliente->addToCart($prodottiCarrello[0]);
$cliente->addToCart($prodottiCarrello[1]);
$cliente->addToCart($prodottiCarrello[2]);
echo $cliente->getCart();
$carrello = $cliente->getCart();
echo var_dump($carrello);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
    ">
</head>
<body>
    <div class="container cont">
        <h1>Carrello di <?php echo $cliente->getNome() . " " . $cliente->getCognome();?></h1>
        <div class="containerCard">
        <?php foreach ($carrello as $prodotto) {
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