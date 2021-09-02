<?php

class Movie {
    public $nome;
    public $film;
    public $age;
    public $prezzo = 10;

    function __construct($_nome, $_film, $_age) {
        $this->nome = $_nome;
        $this->film = $_film;
        $this->age = $_age;
    }

    public function setSconto($age){
        if($age > 65) {
        $this->prezzo = 7;
        }
    }

    public function getSconto() {
        return $this->sconto;
    }

}

$angelo = new Movie ('Angelo', 'Fast and Furious 9', 69);
$angelo->setSconto(69);

$marco = new Movie ('Marco', 'Spiderman 2', 19);
$marco->setSconto(19);

var_dump($angelo);
var_dump($marco);