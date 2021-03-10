<div class="titulo">Métodos Mágicos</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Construtor invocado<br>';
    }

    function __destruct(){
        echo 'E morreu!<br>';
    }

    public function __toString(){
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar(){
        echo $this . "<br>";
    }

    public function __get($atrib){
        echo "Lendo atributo não declarado: {$atrib}<br>";
    }
}

$pessoa = new Pessoa('Ricardo', 40);
$pessoa->apresentar();
echo $pessoa, '<br>';

echo $pessoa->nomeCompleto;
