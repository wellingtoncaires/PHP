<div class="titulo">Desafio Palíndromo</div>

<?php

function palindromo($palavra){
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}

echo palindromo('arara') . '<br>';
echo palindromo('ana') . '<br>';
echo palindromo('abccba') . '<br>';
echo palindromo('bola') . '<br>';