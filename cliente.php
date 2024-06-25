<?php
class Cliente{
    public $nome;
    public $cognome;
    public $carrello=[];
    public function __construct($nome,$cognome){
        $this->nome=$nome;
        $this->cognome=$cognome;
    }
    public function addToCart($prodotto){
        $this->carello[]=$prodotto;
    }
    public function getCart(){
        return $this->carrello;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getCognome(){
        return $this->cognome;
    }
    public function __toString() {
        return  "$this->nome,$this->cognome," . $this->carrello;
    }
}