<div class="titulo">Construtor & Destrutor</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade = 18){
        echo 'Construtor invocado! <br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'E morreu!<br>';
    }

    public function apresentar(){
        echo "Nome: {$this->nome}, {$this->idade} anos <br>";
    }
}

$pessoaA = new Pessoa("Rebeca Maria", 40);
$pessoaB = new Pessoa("João Pedro");

$pessoaA->apresentar();
unset($pessoaA);

$pessoaB->apresentar();
$pessoaB = null;