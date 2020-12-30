<div class="titulo">Mapa</div>

<?php
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados);
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>';
var_dump ($dados["outra informação"]);

$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h",
);


echo '<br>';
print_r($lista);

$lista [] = "i"; // modo para adicionar elementos a um array
echo '<br>';
print_r($lista);

$lista ["vinte"] = "j"; // modo para adicionar elementos a um array a uma posição especifica
echo '<br>';
print_r($lista);

$lista [false] = "tentei indexar como false!"; // retorna 0
echo '<br>';
print_r($lista);

$lista [true] = "tentei indexar como true!"; // retorna 1
echo '<br>';
print_r($lista);