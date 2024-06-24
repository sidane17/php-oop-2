<?php
class Categoria {
    private $nome;
    private $descrizione;
    private $icona;

    public function __construct($nome, $descrizione, $icona) {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->icona = $icona;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescrizione() {
        return $this->descrizione;
    }

    public function getIcona() {
        return $this->icona;
    }

    public function __toString() {
        return "Categoria: $this->nome, Descrizione: $this->descrizione, Icona: $this->icona";
    }
}