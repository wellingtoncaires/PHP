<div class="titulo">Traits #01</div>
<?php
trait validacao {
    public $a = 'a';
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public $b = 'b';
    public function validacaoMelhor($str){
        return isset($str) && trim($str);
    }
}

class Usuario  {
    use validacao, validacaoMelhor;
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));

echo '<br>';
var_dump($usuario->validacaoMelhor(' '));
echo '<br>';
echo $usuario->a, '<br>' ,$usuario->b;