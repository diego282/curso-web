<?php
error_reporting(E_ERROR);
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        echo 'Pessoa Criada! <br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo 'Pessoa diz: Tchau! <br>';
        
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
}