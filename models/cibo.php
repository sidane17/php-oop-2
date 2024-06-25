<?php
include_once __DIR__ . "/prodotto.php";

class Cibo extends Prodotto {
    private $peso;

    public function __construct($titolo, $prezzo, $immagine, $categoria, $peso) {
        parent::__construct($titolo, $prezzo, $immagine, $categoria);
        $this->peso = $peso;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function __toString() {
        return parent::__toString() . ", Peso: $this->peso kg";
    }
}
