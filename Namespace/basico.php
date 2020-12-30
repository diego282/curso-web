<?php namespace contexto;?>

<div class="titulo">Básico Namespace</div>

<?php
// namespace tem que ser a primeira sentença do código ser não dá erro!!

echo __NAMESPACE__ . '<br>'; // __NAMESPACE__: constante para mostra o namespace atual
const constante1 = 123;
define('contexto\constante2', 234);
define(__NAMESPACE__ . '\constante3', 345);
define('outro_contexto\constante4', 456);
// define no contexto namespace usa-se como mostrado acima
echo constante1 . '<br>';
echo constante2 . '<br>';
// echo contexto\constante3 . '<br>'; // sem \ de modo relativo, e não acharia o valor da sentença acima.
echo \contexto\constante3 . '<br>'; // \contexto com barra acessar de modo absoluto
echo constant(__NAMESPACE__ . '\constante3') . '<br>';// outra forma de acessar o namespace e seu valor.
// echo constante4 . '<br>';
echo \outro_contexto\constante4 . '<br>';

function soma($a, $b) {
    return $a + $b;
}

echo \contexto\soma(1, 2) . '<br>';
echo soma(1, 2) . '<br>';

function strpos($str, $text) {
    echo "Buscando o texto '{$text}' em '{$str}'<br>";
    return 1;
}

echo strpos('Texto genérico para busca', 'busca') . '<br>';
echo \strpos('Texto genérico para busca', 'busca') . '<br>';