<div class="titulo">Classe Data</div>

<?php

class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresntar(){
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$d1 = new Data();
echo $d1->apresntar(), '<br>';


$d2 = new Data();
$d2->dia = 20;
$d2->mes = 10;
$d2->ano = 2010;
echo $d2->apresntar(), '<br>';