<div class="titulo">Operações com Arrays</div>

<?php
$dados1 = [
    "nome" => "José",
    "idade" => 28,
];

$dados2 = [
      "naturalidade" => "Fortaleza",
];

$dados2["Endereço"] = "Rua A";

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); // verifica ser é uma arrays (is_array)
echo '<br>' . count($dadosCompletos); // verifica o tamanho do arrays (count)
echo '<br>';
$indice = array_rand($dadosCompletos);  // array_rand: pegar um parte do array e retorna o valor para ele, tipo "nome" = José
echo "$indice = $dadosCompletos[$indice]";
echo "<br>{$dadosCompletos['idade']}"; // modo para inteprertação de arrays usar ser {}
echo "<br>${dadosCompletos['idade']}";// modo para inteprertação de arrays usar ser {} pode ser com $ fora tbm
unset($dadosCompletos["nome"]);// unset: retira um valor do array
echo '<br>';
print_r($dadosCompletos);
unset($dadosCompletos);// unset: retira um valor do array, nesse caso tirou todo o array
echo '<br>';
echo '<br>'. var_dump($dadosCompletos);

$impares = [1,3,5,7,9];
$par = [0,2,4,6,8];
$decimais = $par + $impares; // sempre o que ta a esquerda do sinal tem preferencia
echo '<br>';
print_r($decimais);

$decimais = array_merge($par, $impares); // array_merge: junta os arrays em 1, mas de forma desarumada
echo '<br>';
print_r($decimais);

sort($decimais); // sort: ordenar o array
echo '<br>';
print_r($decimais);