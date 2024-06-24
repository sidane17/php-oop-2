<?php
include __DIR__ . "/models/categoria.php";
class Prodotto {
    protected $titolo;
    protected $prezzo;
    protected $immagine;
    protected $categoria;

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
        return "Prodotto: $this->titolo, Prezzo: $this->prezzo, Categoria: " . $this->categoria->getNome();
    }
}