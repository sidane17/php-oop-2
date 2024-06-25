<?php
include_once __DIR__ . "/models/prodotto.php";
include_once __DIR__ . "/models/categoria.php";
include_once __DIR__ . "/models/cibo.php";
include_once __DIR__ . "/models/gioco.php";
$cane=new Categoria("puppy","gold retriver","icona");
$gatto=new Categoria("Nella","maltese","iconaG");


$prodotti=[
    new Prodotto("titolo","22.50","immagine",$gatto),
    new Prodotto("titoloC","58.50","immagineC",$cane)
]; 