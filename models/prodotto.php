<?php
include_once __DIR__ . "/categoria.php";
class Prodotto {
    public $titolo;
    public $prezzo;
    public $immagine;
    public $categoria;

    public function __construct($titolo, $prezzo, $immagine, $categoria) {
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }

    public function getTitolo() {
        return $this->titolo;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }

    public function getImmagine() {
        return $this->immagine;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function __toString() {
        return "$this->titolo,$this->prezzo," . $this->categoria->getNome();
    }
}