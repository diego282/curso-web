<div class="titulo">Desafio Índice </div>

<?php
$lista = array(
    1,
    4=> 2,
    3=> 3,
    "8" => 4,
    "a" => 4,
    5,
    "9" => 6,
    "06" => 7,
    0 => 8,
);

print_r($lista);

//Array [0] => 1, [4]=> 2, [3]=> 3, [8]=> 4, [9]=> 6, [06] =>  [0] =>8
// resultado: Array ( [0] => 8 [4] => 2 [3] => 3 [8] => 4 [a] => 4 [9] => 6 [06] => 7 )