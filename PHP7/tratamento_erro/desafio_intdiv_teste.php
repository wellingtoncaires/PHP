<div class="titulo">Desafio Intdiv</div>

<?php
require_once 'desafio_intdiv.php';
use function \Aritmetica\intdiv;

try {
    echo \Aritimetica\intdiv(8,3) . '<br>';
} catch(\Aritimetica\NaoInteiroException $e) {
    echo 'Resultado não é um número inteiro<br>';
}

try{
    echo \Aritimetica\intdiv(8,0) . '<br>';
}catch(DivisionByZeroError $e) {
    echo 'Divisão por zero<br>';
}

echo \Aritimetica\intdiv(8,2) . '<br>';
echo \intdiv(8,2) . '<br>';
echo \intdiv(8,3) . '<br>';