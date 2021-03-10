<div class="titulo">Polimorfismo</div>

<?php

abstract class Comida {
    public $peso;
}

class Arroz extends Comida {

}

class Feijao extends Comida {

}

class Sorvete extends Comida {

}

class Pessoa {
    public $peso;

    function __construct($peso){
        $this->peso = $peso;
    }

    public function comer(Arroz $comida){
        $this->peso += $comida->peso;
    }
}

$c1 = new Arroz();
$c1->peso = 0.65;

$p = new Pessoa(83.45);
$p->comer($c1);

echo $p->peso;
