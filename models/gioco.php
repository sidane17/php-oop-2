<?php
include __DIR__ . "/models/prodotto.php";
class Gioco extends Prodotto {
    private $materiale;

    public function __construct($titolo, $prezzo, $immagine, $categoria, $materiale) {
        parent::__construct($titolo, $prezzo, $immagine, $categoria);
        $this->materiale = $materiale;
    }

    public function getMateriale() {
        return $this->materiale;
    }

    public function __toString() {
        return parent::__toString() . ", Materiale: $this->materiale";
    }
}
