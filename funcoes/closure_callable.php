<div class="titulo">Closure & Callable</div>

<?php
error_reporting(E_ERROR);
$soma1 = function ($a, $b){
    return $a + $b;
};

function soma2 ($a, $b){
    return $a + $b;
};

echo $soma1(1, 2) . ' ';
echo (is_callable($soma1)? 'Sim' : 'Não') . '<br>';

// is_callable retorna ser é uma função anonima, funçao normais tbm e collable

echo soma2(1, 2) . ' ';
echo (is_callable('soma2')? 'Sim' : 'Não') . '<br>';

var_dump($soma1);

function executar1($a, $b, $op, callable $funcao){
    $resultado = $funcao($a,$b)?? 'Nada';
    echo "$a $op $b = $resultado <br>";
}

echo '<br>';
executar1(2,3,'+',$soma1);
executar1(2,3,'+','soma2');

function executar2($a, $b, $op, Closure $funcao){
    $resultado = $funcao($a,$b)?? 'Nada';
    echo "$a $op $b = $resultado <br>";
}
echo '<br>';
executar2(100, 100, '+', $soma1);
//executar2(3000, 3000, '+', 'soma2');
